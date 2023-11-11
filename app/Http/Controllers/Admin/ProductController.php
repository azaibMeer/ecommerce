<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\OrderDetail;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
            $data['categories'] = Category::where('status',1)->get();
            return view('admin.product.add',$data);
    }
   
    public function store(Request $request)
    {
        
        //dd($request->image);
        $product = new Product;
        $product->user_id = Auth::User()->id;
        $product->category_id = $request->category_id;
        $product->name = $request->product_name;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->height = $request->height;
        $product->length = $request->length;
        $product->width = $request->width;
        
       if(isset($request->discount))
        {
            $discount = $request->discount;
            if(strpos($discount, '%'))
            {
                $calculated_discount = (trim($discount,'%') * $request->price) / 100;
                $product->discount = $discount;
            }else{
                $product->discount = $discount;
            }
        }else{
            $product->discount = 0;
        }
        $product->quantity = $request->quantity;
        $product->product_sku = $request->product_sku;
        $product->status = $request->status;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;


        $product_tags = $request->product_tags;
       
        $product_tags = json_decode($product_tags, true);
        
        $tag = '';

        if ($product_tags !== null) {
            foreach ($product_tags as $item) {
                if (isset($item['value'])) {
                    $tag .= $item['value'] . ",";
                }
            }
        } 
        $product->product_tag = rtrim($tag , ',');
        $product->meta_title = $request->meta_title;
        $product->meta_tags = $request->meta_tags;
        $product->meta_description = $request->meta_description;
        $product->save();
        
        $images = $request->image;
        $upload_path = "/front_assets/img/product/";
        
        foreach($images as $key => $image){

            $imageName = time(). "_".$image->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            if($key <= 0){
                $product->main_image = $filename;
                $product->save();
            }
            
            $product_sub_image = new ProductImage;
            $image->move(public_path($upload_path) , $filename);
            $product_sub_image->sub_image = $filename;
            $product_sub_image->product_id = $product->id;
            $product_sub_image->status = 1;
            $product_sub_image->save();

        }
        $product_id = $product->id;
        $product->slug = Str::slug($request->product_name . '-' . $product_id);
        $product->save();
        return redirect('/product/list')->with('message','Product add success');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {   
        $data['products'] = product::join('categories','categories.id','products.category_id')
        ->select('products.*','categories.name as category_name')->OrderBy('products.id','desc')
        ->get();
        return view('admin.product.list',$data);
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
        $product = Product::find($id);
        $product->delete();
        return redirect('/product/list')->with('message' , 'Delete Succcess');
    }


    public function detail($slug)
    {   

       $data['product'] = Product::where('slug',$slug)->with('reviews')->first();

       $data['best_sellers'] = OrderDetail::select('product_id')
        ->selectRaw('SUM(qty) as total_quantity_sold')->groupBy('product_id')
        ->orderBy('total_quantity_sold' ,'desc')->limit(3)->with('products')->get();
        
        $data['categories'] = Category::where('parent_id','0')
        ->where('status','1')->take(5)->with('children')->get();
        // dd($data['categories']);
       if(isset($data['product'])){

           $product_id = $data['product']['id']; 
           $data['product_images'] = ProductImage::where('product_id',$product_id)
           ->where('status', 1)->take(4)->get();
           return view('front.layouts.product_detail',$data); 
       
       }else{
            return redirect()->back()->with("message","something went wrong");
       }
       
    }
}
