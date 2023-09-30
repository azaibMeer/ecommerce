<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['setting'] = Setting::first();
       return view('admin.setting.setting',$data);   
    }
    
    public function update(Request $request, string $id)
    {
        //dd($request->all());

        $request->validate([ 

        'logo_path' => '|image|mimes:jpeg,png,jpg|dimensions:width=127,height=24', 
        'footer_logo' => '|image|mimes:jpeg,png,jpg|dimensions:width=127,height=24',
        'website_name' => 'required',
        'email' => 'required',
        /*'phone' => 'digits:11',
        'contact' => 'digits:11',
        'mobile' => 'digits:11'*/
        
       ]);

        $setting = Setting::find($id);
        $setting->website_name = $request->website_name;
        $setting->description = $request->description;
        $setting->address = $request->address;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->contact = $request->contact;
        $setting->mobile = $request->mobile;
        $setting->opening_hours = $request->opening_hours;
        $setting->currency = $request->currency;
        $setting->facebook_link = $request->facebook_link;
        $setting->whatsapp_link = $request->whatsapp_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->instagram_link = $request->instagram_link;
        $setting->tiktok_link = $request->tiktok_link;
        $setting->newsletter_description = $request->newsletter_desc;
        $setting->shipping_charges = $request->shipping_charges;
        
        $upload_path = "/front_assets/img/website_logo/";
        if($request->hasfile('logo_path')){

            $file = $request->file('logo_path');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            $file->move(public_path($upload_path) , $filename);
            $setting->logo_path = $filename; 
        }

        if($request->hasfile('footer_logo')){

            $file = $request->file('footer_logo');
            $imageName = time(). "_".$file->GetClientOriginalName();
            $filename = $upload_path.$imageName;

            $file->move(public_path($upload_path) , $filename);
            $setting->footer_logo = $filename; 
        }

        $setting->save();
        return redirect()->back()->with('message','Updated success');
    }
}
