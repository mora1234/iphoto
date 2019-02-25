<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules(Request $request) {
    
    $item_id = !empty($request['item_id']) ? ','.$request['item_id'] : '';
    
    return [
    'ctitle' => 'required',
    'curl' => 'required|regex:/^[a-z\d]+(-[a-z\d]+)*$/|unique:categories,curl'.$item_id,
    'carticle' => 'required',
    'cimage' => 'image',
        
    ];
  }
       public function messages() {
      return [
          'ctitle.required' => 'The category name field is required',
          'curl.required' => 'The url field is required',
          'curl.regex' => 'The url format is invalid',
          'curl.unique' => 'This url is already taken',
          'carticle.required' => 'The article field is required',
          'cimage.image' => 'The file must be in an image format',
      ];
    }

}
