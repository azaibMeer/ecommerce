<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {   
        $data['setting'] = Setting::first();
        return view('front.auth.login',$data);
    }

    public function register()
    {   
        $data['setting'] = Setting::first();
        return view('front.auth.register',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function account()
    {   
        $data['user'] = Auth::User();
        //dd($user);
        $data['setting'] = Setting::first();
        return view('front.user.account',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required|digits:11',
            'address' => 'required'
        ]); 

        $email = $request->email;
        $db_email = User::where('email',$email)->first();

        if(isset($db_email))
            return redirect()->back()->with('error','Email alredy in used');
        else

        $user = new User;
        $user->name = ucfirst($request->name);
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->status = 1;
        $user->user_type = 2;
        $user->save();
        return redirect()->back()
            ->with('message','Account created success');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['users'] = User::where('user_type',2)->orderBy('id','desc')->get();
        $data['setting'] = Setting::first();
        return view('admin.user.list',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['user'] = User::where('id',$id)->where('user_type',2)->first();
        if(isset($data['user']))
            return view("admin.user.edit",$data);
        else
            return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function profile()
    {
        $data['user'] = Auth::User();
        return view('front.user.profile',$data);
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required|digits:11',
            'address' => 'required'
        ]);

        $id = Auth::User()->id;
        $profile = User::find($id);

        if($profile->email == $request->email)
            $profile->email = $request->email;
        else
            return redirect()->back()->with('error','Can not change Email');    
        
        $profile->name = $request->name;
        $profile->phone = $request->phone; 
        $profile->gender = $request->gender; 
        $profile->address = $request->address;        
        $profile->update();
        return redirect()->back()->with('message','Profile Updated Successfully..'); 
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users/list')->with('error' , 'Delete Succcess');
    }

    public function change_password()
    {
        $data['setting'] = Setting::first();
        return view('front.auth.change_password',$data);
    }

    public function store_password(Request $request)
    {   
        //dd($request->all());
        $id = Auth::User()->id;
        /* $request->validate([
        
        
        'old_password'=> 'required',
        'new_password' => 'required',
        'confirm_password' => 'required',
        
        

       ]);*/

        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $confirm_password = $request->confirm_password;

        $change_password = User::find($id);

        if(Hash::check($old_password,Auth::User()->password)){
            
            if($new_password == $confirm_password){
                
                $change_password->password = hash::make($confirm_password);
                $change_password->save();
                
                 return redirect()->back()->with('success', 'password Has been Changed Next time Login with new password');

            }else{
                 return redirect()->back()->with('danger', 'new password and confirm password not matched');
            }


        }else{
            return redirect()->back()->with('danger', 'Old Password Not Matched');
        }

    }


    public function user_update_by_admin(Request $request ,$id){


        $request->validate([
        'phone'=> 'digits:11',
       ]);
        //dd($request->all());
        $user = User::find($id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone; 
            $user->gender = $request->gender; 
            $user->address = $request->address;        
            $user->date_of_birth = $request->date_of_birth;        
            $user->zip_code = $request->zip_code;        
            $user->city = $request->city;        
            $user->status = $request->status;
            if(isset($request->password)) 
                $user->password = Hash::make($request->password);

            $upload_path = "/backend_assets/img/userprofile/";
            if($request->hasfile('image')){

                $file = $request->file('image');
                $imageName = time(). "_".$file->GetClientOriginalName();
                $filename = $upload_path.$imageName;

                $file->move(public_path($upload_path) , $filename);
                $user->profile = $filename; 
             }
            $user->update();
            return redirect()->back()->with('message','User updated success');
            
    }

}
