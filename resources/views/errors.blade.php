@if (count($errors))
  <div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title">Errors</h3>
    </div>
    <div class="panel-body">
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
    </div>
  </div>

@endif
