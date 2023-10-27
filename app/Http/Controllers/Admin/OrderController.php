<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Order;
use App\Models\OrderDetail;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
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

       
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['orders'] = Order::join('users','users.id','orders.user_id')
        ->select('orders.*','users.name as user_name')->get();
        return view('admin.order.list',$data);
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

    public function user_order()
    {
        //dd("dd");
        $user_id = Auth::User()->id;
        $order = Order::join('order_detail','order_detail.order_id','orders.id')
        ->select('orders.*','order_detail.*')
        ->where('orders.id', $user_id)->get();
        return view('front.layouts.orders');
        //dd($order);
        
    }

    public function order_view($id){
        //dd($id);

        $view_order = OrderDetail::where('order_id',$id)->get();
        //dd($view_order);
        return view('admin.order.view_order');

    }

}
