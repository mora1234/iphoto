<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Categorie;
use App\Product;
use Session;

class ProductController extends MainController {

  public function index() {
    self::$data['products'] = Product::all()->toArray();
    return view('cms.products', self::$data);
  }

  public function create() {
    self::$data['categories'] = Categorie::all()->toArray();
    return view('cms.add_product', self::$data);
  }

  public function store(ProductRequest $request) {
    Product::saveNew($request);
    return redirect('cms/products');
  }

  public function show($id) {
    self::$data['item_id'] = $id;
    return view('cms.delete_product', self::$data);
  }

  public function edit($id) {
  self::$data['categories'] = Categorie::all()->toArray();
  self::$data['item'] = Product::find($id)->toArray();
  return view('cms.edit_product', self::$data);
  }

  public function update(ProductRequest $request, $id) {
    Product::updateItem($request, $id);
    return redirect('cms/products');
    
  }

  public function destroy($id) {
    Product::destroy($id);
    Session::flash('sm', 'The product was deleted');
    return redirect('cms/products');
  }

}
