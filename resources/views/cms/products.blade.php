@extends('cms.cms_master')
@section('cms_content')
<h1>Site Products</h1>
<div class="row">
  <div class="col-md-12">
    @if($products)
    <div class="table-responsive crud-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Image</th>
          <th>Last Updated</th>
          <th>Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $item)
        <tr>
          <td>{{ $item['ptitle'] }}</td>
          <td><img width="50" src="{{ asset('images/'.$item['pimage']) }}"></td>
          <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
          <td>
            <a href="{{ url('cms/products/'.$item['id']).'/edit' }}">Edit</a> |
            <a href="{{ url('cms/products/'.$item['id']) }}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    @endif
    <p class="pull-right"><a href="{{ url('cms/products/create') }}" class="btn btn-primary">+ Add New Product</a></p>
  </div>
</div>
@endsection
