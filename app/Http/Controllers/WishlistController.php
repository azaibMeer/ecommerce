<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use App\Models\Wishlist;
use App\Models\Product;

class WishlistController extends Controller
{
    
    public function wishlist()
    {       
            $user_id = Auth::User()->id;
            
            $data['wishlist'] = Product::join('wishlist','wishlist.product_id','products.id')
            ->select('products.*','wishlist.created_at','wishlist.id','wishlist.product_id')
            ->where('wishlist.user_id',$user_id)->get();

            return view('front.layouts.wishlist',$data);
    }

    public function addToWishlist($id)
    {       
            
           $user_id = Auth::User()->id;
           $chek_wishlist_product = Wishlist::where('product_id',$id)->where('user_id',$user_id)->first();

           if(empty($chek_wishlist_product))
           {
               $wishlist = new Wishlist;
               $wishlist->user_id = $user_id;
               $wishlist->product_id = $id;
               $wishlist->save();
               return redirect()->back()->with('message' , 'Product add to wishlist');
           }

            else
                return redirect()->back()->with('error' , 'Product is alredy in wishlist');
               
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
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
        return redirect()->back()->with('error','Removed Success');
    }

    public function add_to_wishlist(Request $request){
        
        $user_id = Auth::User()->id;
        if(isset($user_id)){

        $product_id = $request->product_id;
        $check_in_wishlist = Wishlist::where('product_id',$product_id)
        ->where('user_id',$user_id)->first();
        if(isset($check_in_wishlist)){
             return response()->json(['success'=>'Already In Wishlist']);
        }else{
            $wishlist = new Wishlist;
            $wishlist->product_id = $product_id;
            $wishlist->user_id = $user_id;
            $wishlist->save();
            return response()->json(['success'=>'Added To Wishlist']);
        }
        }else{
            return response()->json(['error'=>'Please Login']);   
        }

    }
}
