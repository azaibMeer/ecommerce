<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;


class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function login()
    {   
        return view('admin.auth.login',$data);
    }

    public function register()
    {
        return view('admin.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
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
            $user->user_type = 1;
            $user->status = 0;
            $user->save();
            return redirect()->back()
            ->with('message','Account Created Successfully.. Please Wait For Admin Approvel');
    }

    public function authenticate(Request $request)
    {
        //dd($request);
         $request->validate([
            'email' => 'required',
            'password' => 'required'
           
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) 
        {

            $user = Auth::User();
                    if($user->user_type == 1)
                        return redirect('/admin/dashboard');
                    elseif($user->user_type == 2 && $user->status == 1)
                        return redirect('/');
                    else{
                        return redirect('/user/login')->with('error','Account Expired');
                    }
        }

        else
            {
                return redirect()->back()
                ->with('error','Credentials are Incorrect');
            }
            
          
    }
    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    

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
}
