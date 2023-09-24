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
        $db_email = User::where('email',$email)->get();

        if(count($db_email) > 0)
            return redirect()->back()->with('error','Email Alredy Exisit.. Try Other Email ');
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
            ->with('message','Account Created Successfully.');

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
    public function profile()
    {
        $data['user'] = Auth::User();
        $data['setting'] = Setting::first();
        return view('front.user.profile',$data);
    }

    public function updateProfile(Request $request)
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
    public function destroy(string $id)
    {
        //
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
}
