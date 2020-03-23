<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Address;
use Session;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){
       

       $this->validate($request,[
         'name'=>'required',
         'email'=>'email | required',
         'password'=>'required'
       ]);
       $user=new User([
         'name'=> $request->input('name'),
         'email'=> $request->input('email'),
         'password'=> bcrypt($request->input('password'))
       ]);

       $user->save();
       return redirect()->route('user.getLogin');
    }

    public function getLogin(){
        return view('login');

    }

    public function postLogin(Request $request){

        $this->validate($request,[ 
            'email'=>'email | required',
            'password'=>'required'
          ]);

       if(Auth::attempt(['email' =>$request->input('email'),'password'=>$request->input('password')])){
           return redirect()->route('product.index');
       }
       else{
           return redirect()->back();
       }
    }

    public function Logout(){
        Auth::logout();
        return redirect()->route('user.login');
    }

    public function getOrders(){
        $orders=Auth::user()->orders;
        $orders->transform(function($order,$key){
           $order->cart=unserialize($order->cart);
           return $order;
        });
        return view('order',['orders'=>$orders]);   
    }

    public function getAddress(){
        return view('address');
    }

    public function postAddress(Request $request){
       $this->validate($request,[
         'firstName'=>'required',
         'lastName'=>'required',
         'address1'=>'required',
         'address2'=>'required',
         'country'=>'required',
         'state'=>'required',
         'zipcode'=>'required'
       ]);

       $address=new Address([
           'firstName'=>$request->input('firstName'),
           'lastName'=>$request->input('lastName'),
           'address1'=>$request->input('address1'),
           'address2'=>$request->input('address2'),
           'country'=>$request->input('country'),
           'state'=>$request->input('state'),
           'zipcode'=>$request->input('zipcode'),

       ]);

       //dd($address);

       $address->save();

       $cart=Session::get('cart');

       $order=new Order();
       $order->cart=serialize($cart);
       $order->address=$address;
       $order->name=$address['firstName'];



       Auth::user()->orders()->save($order);
       Session::forget('cart');
       return redirect()->route('product.index')->with('success','Purchased Successfully');
       
    }
}
