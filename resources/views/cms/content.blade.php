@extends('cms.cms_master')
@section('cms_content')
<h1>Site Contents</h1>
<div class="row">
  <div class="col-md-12">
    @if($contents)
    <div class="table-responsive crud-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Title</th>
          <th>Last Updated</th>
          <th>Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contents as $item)
        <tr>
          <td>{{ $item['title'] }}</td>
          <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
          <td>
            <a href="{{ url('cms/content/'.$item['id']).'/edit' }}">Edit</a> |
            <a href="{{ url('cms/content/'.$item['id']) }}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    @endif
    <p class="pull-right"><a href="{{ url('cms/content/create') }}" class="btn btn-primary">+ Add New Content</a></p>
  </div>
</div>
@endsection
