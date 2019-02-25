<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{
  function __construct() {
    parent::__construct();
    $this->middleware('authguard', ['except' => ['logout']]);
  }
  public function getSignin(){
    self::$data['title'].= 'Signin page';
    return view('forms.signin', self::$data);
  }
  
  public function postSignin(SigninRequest $request){
    $rt = !empty($request['rt']) ? $request['rt'] : '';
    if(User::verify( $request['email'], $request['password'])){
      return redirect($rt);
    } else {
    self::$data['title'].= 'Sign in';
    return view('forms.signin', self::$data)->withErrors('Wrong email or password');
    }
  }
  
  public function getSignup(){
    self::$data['title'].= 'Sign up';
    return view('forms.signup', self::$data);
  }

  public function postSignup(SignupRequest $request){
    User::saveNew($request);
    return redirect('');
  }

    
  public function logout(){
    Session::flush();
    return redirect('user/signin');
  }
  
 
    
    
  }

   
