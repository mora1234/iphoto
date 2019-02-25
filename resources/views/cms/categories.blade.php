@extends('cms.cms_master')
@section('cms_content')
<h1>Site Categories</h1>
<div class="row">
  <div class="col-md-12">
    @if($categories)
    <div class="table-responsive crud-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Category Name</th>
          <th>Category Image</th>
          <th>Last Updated</th>
          <th>Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $item)
        <tr>
          <td>{{ $item['ctitle'] }}</td>
          <td><img width="50" src="{{ asset('images/'.$item['cimage']) }}"></td>
          <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
          <td>
            <a href="{{ url('cms/categories/'.$item['id']).'/edit' }}">Edit</a> |
            <a href="{{ url('cms/categories/'.$item['id']) }}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    @endif
    <p class="pull-right"><a href="{{ url('cms/categories/create') }}" class="btn btn-primary">+ Add New Category</a></p>
  </div>
</div>
@endsection
