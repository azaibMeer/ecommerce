<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
Use Auth;
Use Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('admin.blog.add');
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

       //dd($request->all());
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->status = $request->status;
        $blog->description = $request->description;

        $upload_path = "/backend_assets/img/blogs/";
        if($request->hasfile('image')){

            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            $file->move(public_path($upload_path) , $filename);
            $blog->image = $filename; 
        }
        $blog->user_id = Auth::User()->id;
        $blog->save();
        $blog->slug = Str::slug($blog->title . '-'. $blog->id);
        $blog->save();
        return redirect('/blog/list/')->with('message','Add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $blogs = Blog::get();
        return view('admin.blog.list',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }

    public function detail($slug){

        $blog = Blog::where('slug',$slug)->with('post_by')->first();
        return view('front.layouts.blog_detail',compact('blog'));
    }

    public function review(Request $request){
        dd($request->all());
    }


}
