<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Checkout;
use App\Models\Order;
use App\Models\OrderDetail;

class CartController extends Controller
{
    
    public function viewcart()
    {
        $data['setting'] = Setting::first();
        $data['items'] = Checkout::Join('products','products.id','checkout.product_id')
                ->select('products.name','products.slug','products.main_image','checkout.*')
                ->where('checkout.user_id',Auth::User()->id)->get();
        $data['total'] =  Checkout::where('user_id',Auth::User()->id)->sum('price');
        return view('front.cart',$data);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addToCart(Request $request , $id)
    {   

        if(Auth::User()) 
        {
            $product = Product::find($id);

        $chek_product_in_cart = Checkout::where('product_id',$id)
        ->where('user_id',Auth::User()->id)->first();
        
        if(empty($chek_product_in_cart)){

            $cart = new Checkout;
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $id;
            $cart->price = ($product->price - $product->discount) * $request->quantity;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back()->with('message','Added to cart success');
        }    

        else{
            $chek_product_in_cart->quantity += $request->quantity;
            $chek_product_in_cart->price = ($product->price - $product->discount) * $chek_product_in_cart->quantity;
            $chek_product_in_cart->save();
            return redirect()->back()->with('message','quantity increase success');
        }
            
        }
        else {
             return redirect(url('/user/login'))->with('error','Please Login And Then Add Into The Cart');
        }
         
            
        
    }

    public function removeProductFromCart($id){

            $id = Checkout::find($id);
            $id->delete();
            return redirect()->back()->with('error','Removed Success');

    }

    public function checkout(){

            $data['setting'] = Setting::first();
            $data['items'] = Checkout::Join('products','products.id','checkout.product_id')
                ->select('products.name','products.slug','products.main_image','checkout.*')
                ->where('checkout.user_id',Auth::User()->id)->get();
            $data['total'] =  Checkout::where('user_id',Auth::User()->id)->sum('price');
            return view('front.checkout',$data);

    }

    public function place_order(Request $request){
        //dd($request->all());

        $setting = Setting::first();
        $user_id = Auth::User()->id;
        $checkout_products = Checkout::join('products','products.id','checkout.product_id')
        ->select('products.name as product_name', 'checkout.*')
        ->where('checkout.user_id',$user_id)->get();
        //dd($checkout_products);

        $total_quantity = 0;
        $sub_total = 0;
        foreach($checkout_products as $chekout_product){

            $total_quantity += $chekout_product->quantity;
            $sub_total += $chekout_product->price;
        }
        
        $order = new Order;
        $order->user_id = $user_id;
        $order->order_no = Str::random(4) . "-". $user_id;
        $order->quantity = $total_quantity;
        $order->sub_total = $sub_total;
        $order->delivery_charges = $setting->shipping_charges;
        $order->discount = 0;
        $order->total_price = $sub_total + $order->delivery_charges;
        $order->save();
        $order_id = $order->id;

        foreach($checkout_products as $single_product)
        {
                $order_detail =  new OrderDetail;
                $order_detail->order_id = $order_id;
                $order_detail->user_id = $user_id;
                $order_detail->product_id = $single_product->product_id;
                $order_detail->product_name = $single_product->product_name;
                $order_detail->price = $single_product->price / $single_product->quantity;
                $order_detail->qty = $single_product->quantity;
                $order_detail->subtotal = $order_detail->price * $single_product->quantity;
                $order_detail->shipping_charges = $setting->shipping_charges;
                $order_detail->total_price = $order_detail->subtotal + $setting->shipping_charges;
                $order_detail->status = 1;
                $order_detail->save();
        }


         $remove_from_checkout = Checkout::where('user_id',$user_id)->get();
            foreach($remove_from_checkout as $remove){
            $remove->delete();
            }

            return redirect('order_complete/'.$order->order_no);


    }


    public function order_complete($order_no){

        $data['order_no'] = $order_no;
        $data['setting'] = Setting::first();
        return view('front.order_complete',$data);
    }
}
