@extends('cms.cms_master')
@section('cms_content')
<h1>Edit Product</h1>
<div class="row">
  <div class="col-md-8 link-form">
   <form action="{{ url('cms/products/'.$item['id']) }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
      <input type="hidden" name="item_id" value="{{ $item['id'] }}">
      <div class="form-group">
        <label for="category-id">Category</label>
        <select class="form-control" name="category_id" id="category-id">
          @foreach($categories as $row)
          <option @if( $row['id'] == $item['category_id'] ) selected="selected" @endif  value="{{ $row['id'] }}">{{ $row['ctitle'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="ptitle">Product Name</label>
        <input type="text" value="{{ $item['ptitle'] }}" name="ptitle" class="form-control origin-text" id="ptitle" placeholder="Product Name">
      </div>
      <div class="form-group">
        <label for="purl">URL</label>
        <input type="text" value="{{ $item['purl'] }}" name="purl" class="form-control target-text" id="purl" placeholder="URL">
      </div>
      <div class="form-group">
        <label for="particle">Article</label>
        <textarea class="form-control" name="particle" id="article">{{ $item['particle'] }}</textarea>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" value="{{ $item['price'] }}" name="price" class="form-control" id="price" placeholder="Price">
      </div>
      <div class="form-group">
        <label for="pimage">Change Product Image</label>
        <input type="file" name="pimage" id="pimage">
        <img class="photo-edit-admin" width="60" src="{{ asset('images/'.$item['pimage']) }}" >
      </div>
      <input type="submit" name="submit" value="Update Product" class="btn btn-primary pull-right">
      <a href="{{ url('cms/products') }}" class="btn btn-default" role="button">Cancel</a>
    </form>

  </div>
</div>
@endsection
