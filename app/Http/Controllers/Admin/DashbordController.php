<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;


class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
       $data['setting'] = Setting::first();
       $data['users'] = DB::select('SELECT  COUNT(id) as total_users FROM users WHERE user_type = 2');
       $data['orders'] = DB::select('SELECT  COUNT(id) as total_orders FROM orders');
       
       $data['total_month_sales'] = DB::select('SELECT SUM(total_price) as total_order_price 
        FROM orders
        WHERE MONTH(created_at) = MONTH(CURRENT_DATE())
        AND YEAR(created_at) = YEAR(CURRENT_DATE())'); 
        
        return view('admin.layouts.dashboard',$data);   
    }
    /**
     * Show the form for creating a new resource.
     */
    

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
}
