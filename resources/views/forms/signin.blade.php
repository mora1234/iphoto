@extends('master')

@section('main_content')




<!-- login-register -->
<section id="login-register">
  <div class="container">
    <div class="row">


      <!-- register form 1 -->
      <div class="col-sm-8">
        <div id="register-form">
          <h3 class="log-title">Sign in</h3>
          <p>Here you can Log in with your account</p>
          <form action="" method="POST" novalidate="novalidate">
            @csrf
            <div class="form-group">
              <label class="hidden" for="email">Email adress</label>
              <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label class="hidden" for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <input type="submit" name="submit" id="submit" class="btn btn-md btn-primary-filled btn-log btn-rounded" value="Sign In">
          </form>

        </div>
      </div><!-- / col-sm-6 -->
      <!-- / register form 1 -->
    </div><!-- / row -->
    <!-- / form 1 -->
  </div><!-- / container -->
</section>
<!-- / login-register -->










@endsection