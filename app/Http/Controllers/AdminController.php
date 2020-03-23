<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Employee;
use App\Order;
use DB;
class AdminController extends Controller
{
    public function getServices(){
        $products =Product::all();
        return view('admin',['products'=>$products]);
    }

    public function getAddProduct(){
      return view('addProduct');
    }

    public function postAddProduct(Request $request){
       $this->validate($request,[
          'title'=>'required',
          'description'=>'required',
          'price'=>'required',
          'image'=>'image'
       ]);

       $product=new Product([
         'title'=>$request->input('title'),
         'description'=>$request->input('description'),
         'price'=>$request->input('price'),
         'imagePath'=>$request->input('image'),
       ]);

       //print_r($product);
       $product->save();
       echo "INserted product";

    }

    public function deleteProduct($id)
    {
       $product=Product::find($id);
       DB::delete("delete from products where id=?",[$id]);
       return redirect()->route('product.index')->with('success','Product Deleted SuccessFully');
       //print_r($product);   
    }

    public function getUsers(){
      $users=User::all();
      return view('users',['users'=>$users]);
    }

    public function getEmployee(){
      $employees=Employee::all();
      return view('employee',['employees'=>$employees]);
    }


    public function getOrders()
    {
      $orders=Order::all();
      $orders->transform(function($order,$key){
        $order->cart=unserialize($order->cart);
        return $order;
     });
      return view('adminOrder',['orders'=>$orders]);
    }
}
