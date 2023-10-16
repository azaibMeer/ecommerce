<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
            $data['categories'] = Category::where('status',1)->get();
            return view('admin.category.add',$data);
    }
    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $user_id = Auth::User()->id;
        $request->validate([ 

        /*'image' => 'required', */
        'category_name' => 'required',
        'sub_category' => 'required',
        'status'=> 'required',
        'show_home_page'=> 'required'
        
       ]);
        
        $category = new Category;
        $category->name = $request->category_name;
        $category->user_id = $user_id;
        $category->parent_id = $request->sub_category;
        $category->description = $request->description;
        $category->show_home_page = $request->show_home_page;
        $category->status = $request->status;
       
        $upload_path = "/front_assets/img/category/";
        if($request->hasfile('image')){

            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            $file->move(public_path($upload_path) , $filename);
            $category->image = $filename; 
        }

        $category->save();
        $category->slug = Str::slug($request->category_name.'-'.$category->id);
        $category->save();
        return redirect('/category/list')->with('message', 'Category add success');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {   
       $data['categories'] = Category::LeftJoin('categories as c2' ,'categories.parent_id','c2.id')
                            ->select('categories.*','c2.name as child_category')
                            ->orderBy('categories.id','desc')
                            ->get();
        
        return view('admin.category.list',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
       $data['categories'] = Category::where('status',1)->get();
       $data['category'] = Category::where('id',$id)->first();
       return view('admin.category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());

        $user_id = Auth::User()->id;

        $request->validate([ 
 
        'category_name' => 'required',
        'sub_category' => 'required',
        'status'=> 'required',
        'show_home_page'=> 'required'
        
       ]);
        
        $category = Category::find($id);
        $category->name = $request->category_name;
        $category->user_id = $user_id;
        $category->parent_id = $request->sub_category;
        $category->description = $request->description;
        $category->show_home_page = $request->show_home_page;
        $category->status = $request->status;
       
        $upload_path = "/front_assets/img/category/";
        if($request->hasfile('image')){

            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            $file->move(public_path($upload_path) , $filename);
            $category->image = $filename; 
        }

        $category->save();
        $category->slug = Str::slug($request->category_name.'-'.$category->id);
        $category->save();
        return redirect('/category/list')->with('message', 'Category update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/list')->with('error' , 'Delete Succcess');
    }

    public function category_product($slug){

            $category = Category::where('slug',$slug)->first();
            if(isset($category)){
                $data['products']  = Product::where('category_id',$category->id)->get();
                return view('front.layouts.category_products',$data);
            }else{
                return redirect()->back();
            }
                 
            
    }
}
