    @if(Session::has('sm'))
    <div id="sm-box" class="row">
      <div class="col-sm-12">
        <div class="alert alert-success" role="alert">
          <p>{{ Session::get('sm') }}</p>
        </div>
      </div>
    </div>
    @endif
