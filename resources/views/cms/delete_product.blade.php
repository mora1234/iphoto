@extends('cms.cms_master')
@section('cms_content')
<h1>Are you sure you want to delete this product?</h1>
<div class="row">
  <div class="col-md-6 link-form">
    <form action="{{ url('cms/products/'.$item_id) }}" method="POST">
      @csrf
      {{ method_field('DELETE') }}
      <input type="submit" name="submit" value="Delete" class="btn btn-primary">
      <a href="{{ url('cms/products') }}" class="btn btn-default" role="button">Cancel</a>
    </form>

  </div>
</div>
@endsection
