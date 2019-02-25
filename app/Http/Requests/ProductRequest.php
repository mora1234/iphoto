<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules(Request $request) {
    
    $item_id = !empty($request['item_id']) ? ','.$request['item_id'] : '';
    
    return [
       'category_id' => 'required',
       'ptitle' => 'required',
       'purl' => 'required|regex:/^[a-z\d]+(-[a-z\d]+)*$/|unique:products,purl'.$item_id,
       'particle' => 'required',
       'price' => 'required|numeric',
       'pimage' => 'image',
    ];
  }
  
    public function messages() {
      return [
          'category_id.required' => 'Please choose category',
          'ptitle.required' => 'The product name field is required',
          'purl.required' => 'The url field is required',
          'purl.regex' => 'The url format is invalid',
          'purl.unique' => 'This url is already taken',
          'particle.required' => 'The article field is required',
          'price.required' => 'The price field is required',
          'price.numeric' => 'The price must be a number',
          'pimage.image' => 'The file must be in an image format',
      ];
    }

}
