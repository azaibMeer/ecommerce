<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactUsController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('front.index');
});*/


// main page routes //

Route::get('/', [IndexController::class, 'index']);
Route::post('/subscribe', [IndexController::class, 'subscribe']); 
Route::get('/contact', [ContactUsController::class, 'index']); 
Route::post('/store/contact', [ContactUsController::class, 'store']);
Route::get('/category/products/{slug}', [CategoryController::class, 'category_product']);
Route::get('/product/detail/{slug}', [ProductController::class, 'detail']);



// admin routes // 

Route::get('/admin/register', [AdminAuthController::class, 'register']);
Route::post('/create/admin', [AdminAuthController::class, 'store']);
Route::get('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/authenticate', [AdminAuthController::class, 'authenticate']);

Route::group(['middleware'=> 'admin'],function(){

    Route::get('/admin/dashboard', [DashbordController::class, 'index']);
    Route::get('/category/list', [CategoryController::class, 'show']);
    Route::get('/category/add', [CategoryController::class, 'index']);
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/category/update/{id}', [CategoryController::class, 'update']);
    Route::post('/category/store/', [CategoryController::class, 'store']);

    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);
    Route::get('/slider/list', [SliderController::class, 'show']);
    Route::get('/slider/add', [SliderController::class, 'index']);
    Route::post('/slider/store', [SliderController::class, 'store']);
    Route::get('/slider/delete/{id}', [SliderController::class, 'destroy']);
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit']);
    Route::post('/slider/update/{id}', [SliderController::class, 'update']);

    //admin products routes //

     Route::get('/product/list', [ProductController::class, 'show']);
     Route::get('/product/add', [ProductController::class, 'index']);
     Route::post('/product/store', [ProductController::class, 'store']);
     Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);
     Route::get('/website/setting', [SettingController::class, 'index']);
     Route::post('/update/setting/{id}', [SettingController::class, 'update']);
    

});

Route::get('/admin/logout', function(Request $request){
    
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/admin/login');
});

// user routes //

Route::get('/user/register', [UserController::class, 'register']);
Route::post('/create/user', [UserController::class, 'store']);
Route::get('/user/login', [UserController::class, 'login']);

Route::group(['middleware'=> 'user'],function(){

   Route::get('/user/account', [UserController::class, 'account']); 
   Route::get('/user/cart', [CartController::class, 'viewcart']); 
   Route::get('/user/wishlist', [WishlistController::class, 'wishlist']); 
   Route::get('/user/profile', [UserController::class, 'profile']); 
   Route::post('/update/user/profile', [UserController::class, 'updateProfile']); 
   Route::get('/change/password', [UserController::class, 'change_password']); 
   Route::post('/store/password', [UserController::class, 'store_password']); 
   Route::get('/user/wishlist/{id}', [WishlistController::class, 'addToWishlist']);
    Route::get('/wishlist/delete/{id}', [WishlistController::class, 'destroy']);
//Route::get('/product/addtocart/{id}', [CartController::class, 'addToCart']);
    Route::post('/product/addtocart/{id}', [CartController::class, 'addToCart']);
    Route::get('/remove/cart/product/{id}', [CartController::class, 'removeProductFromCart']);
    Route::get('/user/checkout/', [CartController::class, 'checkout']);
    Route::post('/place/order', [CartController::class, 'place_order']);
    Route::get('/order_complete/{order_no}', [CartController::class, 'order_complete']);

});

 



Route::get('/user/logout', function(Request $request){
    
    Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
});