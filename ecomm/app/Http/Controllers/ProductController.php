<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
 
    //

    function index()
    {
        $data= Product::all();
        return view('product',['product'=>$data]);
}

function pview($id){
    $data= Product::find($id);
    return view('productview', ['data'=>$data]);
}

// function create(){
//     $categories=Category::all();
//     return view('create.createproduct',['categories'=>$categories]);

// }

function save(Request $request){
    //print_r($request->input());
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'category_id' => 'required'
       ]);
            
           $product = Product::create([
         'name' => $request->input('name'),
         'description' => $request->input('description'),
         'image' => $request->input('image'),
         'price' => $request->input('price'),
         'old_price' => $request->input('old_price'),
         'category_id' =>$request->input('category_id')
         
         
     ]);
          
 $product->save();
}

     function addToCart(Request $request)
    { 
     if($request->session()->has('user'))


         { 


         //echo $request->session()->get('id');
        // $data= $request->session()->all();
        // return $data;
       $cart= new Cart;
       //$cart = $request->session()->get('id');
       //  $cart = $request->session()->get('user', 'user');
       //  return $cart;
         $cart->user_id=$request->session()->get('user')['id'];
          $cart->product_id=$request->product_id;
           $cart->save();
            return redirect('/');
        }else{
         return redirect('/login');
     
      }

}

static function cartItem()
{
    $userId=Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
}

function cartlist()
{
    $userId=Session::get('user')['id'];
    $products=DB::table('carts')
    ->join('products', 'carts.product_id', '=', 'products.id')
    ->where('carts.user_id',$userId)
    ->select('products.*','carts.id as cart_id')
    ->get();
    return view('cartlist',['products'=>$products]);
    
}

function removeCart($id)
{
    Cart::destroy($id);
    return redirect('cartlist');
}

function orderNow()
{

    $userId=Session::get('user')['id'];
    $total= $products=DB::table('carts')
    ->join('products', 'carts.product_id', '=', 'products.id')
    ->where('carts.user_id',$userId)
    ->select('products.*','carts.id as cart_id')
    ->sum('products.price');
    return view('ordernow',['total'=>$total]);
    

}
function orderPlace(Request $request)
{
    $userId=Session::get('user')['id'];
     $allCart = Cart::where('user_id',$userId)->get();
        //return $userId;
        foreach($allCart as $cart) 
        {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request['address'];
            $order->save();
            $allCart = Cart::where('user_id',$userId)->delete();
        }
        $request->input();
        return redirect('/');

 }

function myOrders()

{
    $userId=Session::get('user')['id'];
    $orders= DB::table('orders')
    ->join('products', 'orders.product_id', '=', 'products.id')
    ->where('orders.user_id',$userId)
    ->get();
    return view('myorders',['orders'=>$orders]);


}







}
    
