<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['setting'] = Setting::first();
        return view('admin.slider.add',$data);  
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
        $request->validate([ 

        'image' => 'required|image|mimes:jpeg,png,jpg|dimensions:width=1920,height=1010', 
        'slider_title' => 'required',
        'status'=> 'required'
        
       ]);
        
        $slider = new Slider;
        $slider->name = $request->slider_title;
        $slider->link = $request->slider_link;
        $slider->description = $request->description;
        $slider->status = $request->status;
       
        $upload_path = "/uploads/sliders/";
        if($request->hasfile('image')){

            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            $file->move(public_path($upload_path) , $filename);
            $slider->image = $filename; 
        }

        $slider->save();
        return redirect('/slider/list')->with('message', 'Slider add success');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::orderBy('id','desc')->get();
        return view('admin.slider.list',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $data['setting'] = Setting::first();
        $data['slider'] = Slider::where('id',$id)->first();
        return view('admin.slider.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $request->validate([ 


        'image' => 'image|mimes:jpeg,png,jpg|dimensions:width=1920,height=1010',
        'slider_title' => 'required',
        'status'=> 'required'
        
       ]);
        
        $slider = Slider::find($id);
        $slider->name = $request->slider_title;
        $slider->link = $request->slider_link;
        $slider->description = $request->description;
        $slider->status = $request->status;
       
        $upload_path = "/uploads/sliders/";
        if($request->hasfile('image')){

            $file = $request->file('image');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            $file->move(public_path($upload_path) , $filename);
            $slider->image = $filename; 
        }

        $slider->save();
        return redirect('/slider/list')->with('message', 'Slider update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('/slider/list')->with('error' , 'Delete Succcess');
    }


}
