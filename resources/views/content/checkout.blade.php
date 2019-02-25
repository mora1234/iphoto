@extends('master')

@section('main_content')

<div id="page-header" class="shopping-cart">
  <div class="container">
    <div class="page-header-content text-center">
      <div class="page-header wsub">
        <h1 class="page-title fadeInDown animated first">Shopping Cart</h1>
      </div><!-- / page-header -->
      <p class="slide-text fadeInUp animated second">Page description goes here...</p>
    </div><!-- / page-header-content -->
  </div><!-- / container -->
</div><!-- / page-header -->
@if($cart)
<!-- shopping-cart -->
<div id="shopping-cart">
  <div class="container">
    <!-- shopping cart table -->
    <table class="shopping-cart">
      <thead>
        <tr>
          <th class="image">&nbsp;</th>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart as $item)
        <tr class="cart-item">
          <td class="image"><a href="#"><img src="{{ asset('images/'.$item['attributes']['image']) }}" width="50"></a></td>
          <td><a href="single-product.html">{{ $item['name'] }}</a></td>
          <td>${{ $item['price'] }}</td>
          <td class="qty">
            <input type="button" class="update-qty" value="-" data-id="{{ $item['id'] }}" data-op="minus">
            <input type="text" name="cart" value="{{ $item['quantity'] }}" title="Qty" class="text-center" size="1">
            <input type="button" class="update-qty" value="+" data-id="{{ $item['id'] }}" data-op="plus">
          </td>    
          <td>${{$item['price'] * $item['quantity'] }}</td>
          <td class="remove"><a href="{{ url('shop/remove-item?id='.$item['id']) }}" class="btn btn-danger-filled x-remove">×</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <!-- / shopping cart table -->
    @else
    <p><i>No items in cart...</i></p>
    @endif
    <div class="row cart-footer">
     



      <div class="col-sm-6 cart-total">
        <h4>Cart Total</h4>
        <p>Subtotal: <span>${{ Cart::getTotal() }}</span></p>
        <p>Shipping: <span>Free</span></p>
        <p>Total: <span>${{ Cart::getTotal() }}</span></p>
      </div><!-- / cart-total -->

      <div class="col-sm-6 cart-checkout">
        <a href="{{ url('shop') }}" class="btn btn-default-filled btn-rounded"><i class="lnr lnr-cart"></i> <span>Continue Shopping</span></a>
        <a href="{{ url('shop/order') }}" class="btn btn-primary-filled btn-rounded"><i class="lnr lnr-exit"></i> <span>Order now!</span></a>
      </div><!-- / cart-checkout -->
      
      <div class="update-cart col-sm-6">
        <a href="{{ url('shop/clear-cart') }}" class="btn btn-default btn-rounded"><i class="lnr lnr-sync"></i><span>Clear Cart</span></a>
      </div><!-- / clear-cart -->
      



    </div><!-- / row -->
  </div><!-- / container -->
</div>
<!-- / shopping-cart -->

@endsection