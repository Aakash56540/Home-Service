<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

class ProductController extends Controller
{
   
    public function getShop()
    {
       $products= Product::all();
       return view('shopIndex',['products'=>$products]);
    }

    public function AddToCart(Request $request,$id){
       $product=Product::find($id);
       $oldCart=Session::has('cart') ? Session::get('cart') : null;
       $cart =new Cart($oldCart);
       $cart->add($product,$product->id);

       $request->session()->put('cart',$cart);
       return redirect()->route('getCart')->with('status','Product SuccessFully Added');
    }

    public function getCart(){
        if(Session::has('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
            return view('cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
        }
        else{
            return view('emptyCart');
        }
    }
}
