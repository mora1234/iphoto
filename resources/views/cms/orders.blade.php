@extends('cms.cms_master')
@section('cms_content')
<h1>Orders</h1>
<div class="row">
  <div class="col-md-12">
    @if(! $orders->isEmpty() )
    <div class="table-responsive crud-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>User</th>
          <th>Total</th>
          <th>Order Details</th>
          <th>Order Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>${{ $item->total }}</td>
          <td>
            <ul>
            @foreach( unserialize($item->data) as $row )
            <li>{{ $row['name'] }}, Price: ${{ $row['price'] }}, Quantity: {{ $row['quantity'] }}</li>
            @endforeach
            </ul>
          </td>
          <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    @endif
  </div>
</div>
@endsection
