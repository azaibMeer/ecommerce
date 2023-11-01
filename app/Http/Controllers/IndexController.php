<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Subscribe;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['categories'] = Category::with('children')->where('parent_id','0')
        ->where('status','1')->take(10)->get();
        $data['sliders'] = Slider::where('status', 1)->take(3)->orderBy('id','desc')->get();
        $data['featured_products'] = Product::where('status',1)->get();
        $data['blogs'] = Blog::where('status',1)->orderBy('id','desc')->take(3)->get();
        $data['featured_categories'] = Category::where('is_featured', 1)->orderBy('order','asc')
        ->take(10)->get();
        //dd($data['featured_categories']);
        return view('front.layouts.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function subscribe(Request $request)
    {
        //dd($request->all());
        $db_email = Subscribe::where('email',$request->email)->first();
        if(isset($db_email))
            return response()->json(['message' => 'Email alredy exisit! try diffrent email']);
        else
        $subscribe = new Subscribe;
        $subscribe->email = $request->email;
        $subscribe->save();
        return response()->json(['message' => 'Thanks For Subscribe']);
    }

    public function error()
    {
        return view('front.error');
    }

    public function search(Request $request)
    {
        $search = $request->q;
        if(isset($search)){
            $search_result = Product::where('name','like', '%'.$search.'%')->get();
                return view('front.layouts.search_result',compact('search_result','search'));
        }else{
            return redirect()->back();
        }
    }
}
