<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB,
    Cart,
    Session,
    Image;

class Product extends Model {

  static public function getProducts($curl, &$data) {
    $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.category_id')
            ->where('c.curl', '=', $curl)
            ->select('p.*', 'c.ctitle', 'c.curl')
            ->get();
    $data['products'] = $products->toArray();
    if ($data['products'])
      $data['title'] .= $data['products'][0]->ctitle;
  }

  static public function getItem($purl, &$data) {
    $data['product'] = DB::table('products')
            ->where('purl', '=', $purl)
            ->first();
  }

  static public function addToCart($pid) {
    if (!empty($pid) && is_numeric($pid)) {
      if ($product = Product::find($pid)) {
        $product = $product->toArray();


        if (!Cart::get($pid)) {
          Cart::add($pid, $product['ptitle'], $product['price'], 1, ['image' => $product['pimage'], 'size' => 'M']);
          Session::flash('sm', $product['ptitle'] . ' is added to cart');
        }
      }
    }
  }

  static public function updateCart($request) {

    if (!empty($request['pid']) && is_numeric($request['pid'])) {
      if (!empty($request['op'])) {
        if ($product = Cart::get($request['pid'])) {
          $product = $product->toArray();

          if ($request['op'] == 'plus') {

            Cart::update($request['pid'], ['quantity' => 1]);
          } elseif ($request['op'] == 'minus') {

            if ($product['quantity'] - 1 != 0) {

              Cart::update($request['pid'], ['quantity' => -1]);
            }
          }
        }
      }
    }
  }

  static public function saveNew($request) {

    $image_name = 'defulte.png';

    if ($request->hasFile('pimage') && $request->file('pimage')->isValid()) {

      $file = $request->file('pimage');
      $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
      $request->file('pimage')->move(public_path() . '/images', $image_name);
      $img = Image::make(public_path() . '/images/' . $image_name);
      $img->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
      });
      $img->save();
    }

    $product = new self();
    $product->category_id = $request['category_id'];
    $product->ptitle = $request['ptitle'];
    $product->purl = $request['purl'];
    $product->particle = $request['particle'];
    $product->price = $request['price'];
    $product->pimage = $image_name;
    $product->save();

    Session::flash('sm', 'New product saved');
  }
  
  static public function updateItem($request, $id){
    
    $image_name = '';
    
        if ($request->hasFile('pimage') && $request->file('pimage')->isValid()) {

      $file = $request->file('pimage');
      $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
      $request->file('pimage')->move(public_path() . '/images', $image_name);
      $img = Image::make(public_path() . '/images/' . $image_name);
      $img->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
      });
      $img->save();
    }

    $product = self::find($id);
    $product->category_id = $request['category_id'];
    $product->ptitle = $request['ptitle'];
    $product->purl = $request['purl'];
    $product->particle = $request['particle'];
    $product->price = $request['price'];
    
    if($image_name){
      $product->pimage = $image_name;
    }
    
    $product->save();
    Session::flash('sm', 'The product was updated');
    
    
  }

}
