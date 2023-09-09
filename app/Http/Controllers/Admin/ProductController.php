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


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
            $data['setting'] = Setting::first();
            $data['categories'] = Category::where('status',1)->get();
            return view('admin.product.add',$data);
    }
   
    public function store(Request $request)
    {
        
        //dd($request->all());
        $product = new Product;
        $product->user_id = Auth::User()->id;
        $product->category_id = $request->category_id;
        $product->name = $request->product_name;
        $product->price = $request->price;
        $product->discount_percentage = $request->discount;
        $product->discount = $request->discount;
        $product->weight = $request->weight;
        $product->height = $request->height;
        $product->length = $request->length;
        $product->width = $request->width;
        
        if($request->discount !== null)
        {
            $discount = $request->discount;
            if(strpos($discount, '%'))
            {
                $calculated_discount = (trim($discount,'%') * $request->price) / 100;
                $product->discount = $calculated_discount;
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


        $product_tags = $request->product_tag;
       
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
        
        $upload_path = "/front_assets/img/product/";
        if($request->hasfile('main_image')){

            $file = $request->file('main_image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            $file->move(public_path($upload_path) , $filename);
            $product->main_image = $filename; 
        }

        $product->save();
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
        $data['products'] = product::OrderBy('id','desc')->get();
        $data['setting'] = Setting::first();
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

       $data['setting'] = Setting::first();
       $data['product'] = Product::where('slug',$slug)->first();
       $product_id = $data['product']['id']; 
       $data['product_images'] = ProductImage::where('product_id',$product_id)
        ->where('status',1)->take(5)->get();
       return view('front.product_detail',$data);
    }
}
