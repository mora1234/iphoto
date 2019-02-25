@extends('cms.cms_master')
@section('cms_content')
<h1>Add New Product</h1>
<div class="row">
  <div class="col-md-8 link-form">
    <form action="{{ url('cms/products') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="category-id" class="hidden">Category</label>
        <select class="form-control" name="category_id" id="category-id">
          <option value="">Choose Category..</option>
          @foreach($categories as $item)
          <option @if( old('category_id') == $item['id'] ) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['ctitle'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label class="hidden" for="ptitle">Product Name</label>
        <input type="text" value="{{ old('ptitle') }}" name="ptitle" class="form-control origin-text" id="ptitle" placeholder="Product Name">
      </div>
      <div class="form-group">
        <label class="hidden" for="purl">URL</label>
        <input type="text" value="{{ old('purl') }}" name="purl" class="form-control target-text" id="purl" placeholder="URL">
      </div>
      <div class="form-group">
        <label for="particle">Article</label>
        <textarea class="form-control" name="particle" id="article">{{ old('particle') }}</textarea>
      </div>
      <div class="form-group">
        <label class="hidden" for="price">Price</label>
        <input type="text" value="{{ old('price') }}" name="price" class="form-control" id="price" placeholder="Price">
      </div>
      <div class="form-group">
        <label for="pimage">Product Image</label>
        <input type="file" name="pimage" id="pimage">
      </div>
      <input type="submit" name="submit" value="Save Product" class="btn btn-primary pull-right">
      <a href="{{ url('cms/products') }}" class="btn btn-default" role="button">Cancel</a>
    </form>

  </div>
</div>
@endsection
