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
         $data['new_orders'] = DB::select('SELECT  COUNT(id) as new_orders FROM orders where status = 1');
       
       $data['total_month_sales'] = DB::select('SELECT SUM(total_price) as total_order_price 
        FROM orders
        WHERE MONTH(created_at) = MONTH(CURRENT_DATE())
        AND YEAR(created_at) = YEAR(CURRENT_DATE())'); 
        
        $data['top_products_sale'] =  DB::select('SELECT name,main_image, SUM(order_detail.qty)
                            AS total_product_sales FROM products 
                            INNER JOIN order_detail 
                            ON products.id = order_detail.product_id
                            GROUP BY products.id, products.name,products.main_image
                            ORDER BY total_product_sales DESC
                            LIMIT 3');
    
        $data['top_purchsed_customers'] =  DB::select('SELECT name,profile, COUNT(order_detail.user_id) 
                            AS top_purchasing_user FROM order_detail 
                            INNER JOIN users 
                            ON users.id = order_detail.user_id
                            WHERE order_detail.status = 3
                            GROUP BY users.id, users.name,users.profile
                            ORDER BY top_purchasing_user DESC
                            LIMIT 3');   
        //return response()->json(['message' => 'Thanks For Contact']);
        
        
        $graphs = DB::select('SELECT DATE(created_at) AS order_date,SUM(total_price)
         AS total_orders_sale_perday FROM orders GROUP BY DATE(created_at)
         ORDER BY order_date');


        $data['chartData'] = [];
        foreach ($graphs as  $value) {
        $data['chartData'][] = [strtotime($value->order_date) , $value->total_orders_sale_perday];
        }

        


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

    /*public function get_data(){

        $orders = DB::select('SELECT 
            DATE(created_at) AS order_date,
            SUM(total_price) AS total_orders_sale_perday
        FROM 
            orders
        GROUP BY 
            DATE(created_at)
        ORDER BY 
            order_date;');
    }

   return response()->json(['message'=> 'Thanks for message']);*/
}
