<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['setting'] = Setting::where('status',1)->first();
       return view('front.layouts.contact',$data);
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

        $db_email = Contact::where('email',$request->email)->first();
        if(isset($db_email))
            return response()->json(['message' => 'Email alredy exisit']);
        else
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();
            return response()->json(['message' => 'Thanks For Contact']); 
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


}
