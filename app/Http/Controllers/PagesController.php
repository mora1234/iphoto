<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class PagesController extends MainController
{
    public function home(){
      self::$data['title'].= 'Home page';
      return view('content.home', self::$data);
    }
    public function about(){
      self::$data['title'].= 'About us';
      return view('content.about', self::$data);
    }
    public function content($url){
      Content::getContent($url, self::$data);
      return view('content.contents', self::$data);
    }
}
