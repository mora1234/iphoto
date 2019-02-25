<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use App\Order;
use DB, Cart, Session;
use App\Http\Requests\SearchRequest;


class ShopController extends MainController {

  public function categories() {
    self::$data['categories'] = categorie::all()->toArray();
    self::$data['title'] .= 'Shop categories';
    return view('content.categories', self::$data);
  }

  public function products($curl) {
    $products = Product::getProducts($curl, self::$data);
    return view('content.products', self::$data);
  }

  public function item($curl, $purl){
    Product::getItem($purl, self::$data);
    if(! empty(self::$data['product']->ptitle)){
      self::$data['title'].= self::$data['product']->ptitle;
    }
    return view('content.item', self::$data);
  }
  
  public function addToCart(Request $request){
    Product::addToCart($request['pid']);
  }
  
  public function checkout(){
    $cartCollection = Cart::getContent();
    $cart = $cartCollection->toArray();
    sort($cart);
    self::$data['cart'] = $cart;
    self::$data['title'].= 'Checkout page';
    return view('content.checkout', self::$data);
  }
  
  public function clearCart(){
    Cart::clear();
    return redirect('shop/checkout');
  }
  
  public function removeItem(Request $request){
    if(!empty($request['id'])&& is_numeric($request['id'])){
      Cart::remove($request['id']);
    }  return redirect('shop/checkout');
  }
  
  public function updateCart(Request $request){
    Product::updateCart($request);
  }
  
  public function order(){
   if(Cart::isEmpty()){
     return redirect('shop');
   }else{
     if(! Session::has('user_id')){
       return redirect('user/signin?rt=shop/checkout');
     }else{
       Order::saveNew();
       return redirect('shop');
     }
   }
  }
  
  public function search(Request $request){
   $search = $request->search;

 $products = Product::from('products as p')
           ->join('categories as c','p.category_id','c.id')
           ->where('p.ptitle', 'like', "%$search%")
           ->orWhere('particle', 'like', "%$search%")
           ->select('c.curl','p.*')
           ->get();
  
   if(isset($request->auto)){
     return $products;
   } else {
    self::$data['title'].= 'Search results';
    return view('content.search_results', self::$data)->with('products', $products);
   }

  }
}
