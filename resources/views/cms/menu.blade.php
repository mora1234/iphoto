@extends('cms.cms_master')
@section('cms_content')
<h1>Site Menu Link</h1>
<div class="row">
  <div class="col-md-12">
    @if($menu)
    <div class="table-responsive crud-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Menu Link</th>
          <th>Last Updated</th>
          <th>Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($menu as $item)
        <tr>
          <td>{{ $item['link'] }}</td>
          <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
          <td>
            <a href="{{ url('cms/menu/'.$item['id']).'/edit' }}">Edit</a> |
            <a href="{{ url('cms/menu/'.$item['id']) }}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    @endif
    <p class="pull-right"><a href="{{ url('cms/menu/create') }}" class="btn btn-primary">+ Add New Menu Link</a></p>
  </div>
</div>
@endsection
