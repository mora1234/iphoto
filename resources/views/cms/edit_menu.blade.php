@extends('cms.cms_master')
@section('cms_content')
<h1>Edit Menu Link</h1>
<div class="row">
  <div class="col-md-6 link-form">
    <form action="{{ url('cms/menu/'.$item['id']) }}" method="POST">
      @csrf
      {{ method_field('PUT') }}
     <input type="hidden" name="item_id" value="{{ $item['id'] }}">
      <div class="form-group">
        <label for="link">Link</label>
        <input type="text" value="{{ $item['link'] }}" name="link" class="form-control origin-text" id="link" placeholder="Link">
      </div>
      <div class="form-group">
        <label for="mtitle">Page Title</label>
        <input type="text" value="{{ $item['mtitle'] }}" name="mtitle" class="form-control" id="mtitle" placeholder="Page Title">
      </div>
      <div class="form-group">
        <label for="url">URL</label>
        <input type="text" value="{{ $item['url'] }}" name="url" class="form-control target-text" id="url" placeholder="URL">
      </div>

      <input type="submit" name="submit" value="Update Link" class="btn btn-primary pull-right">
      <a href="{{ url('cms/menu') }}" class="btn btn-default" role="button">Cancel</a>
    </form>

  </div>
</div>
@endsection
