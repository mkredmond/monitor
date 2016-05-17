@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-sm-12 col-md-8 col-md-offset-2">
    <h1 class="page-header">Add new application</h1>
  </div>
  <div class="col-sm-12 col-md-6 col-md-offset-3">
    @include('flash')
    @include('errors')
  </div>
</div>

<div class="row">
  <form class="form-horizontal" action="{{ url('admin/applications')}}" method="POST">
    {{ csrf_field() }}
    <fieldset>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="server_id">Server</label>
      <div class="col-md-5">
        <select id="server_id" name="server_id" class="form-control" required="">
            <option value="-1" disabled="" selected="">Please select a server</option>
            @foreach( $servers as $server)
              <option value="{{ $server->id }}">{{$server->hostname}}</option>
            @endforeach
        </select>
      </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
      <label class="col-md-4 control-label" for="name">Application Name</label>
      <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="ie: Employee Profile" class="form-control input-md" required="" value="{{ old('name') }}">

      </div>
    </div>

    <!-- Prepended text-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="uri">URI</label>
      <div class="col-md-5">
        <div class="input-group">
          <span class="input-group-addon">/</span>
          <input id="uri" name="uri" class="form-control" placeholder="ie: EmployeeProfileSSB/admin" type="text" required="" value=" {{ old('uri') }}">
        </div>
        <p class="help-block">Do not include starting "/"</p>
      </div>
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="protocol">Protocol</label>
      <div class="col-md-4">
      <div class="radio">
        <label for="protocol-0">
          <input type="radio" name="protocol" id="protocol-0" value="http" checked="{{old('protocol')}}">
          HTTP
        </label>
    	</div>
      <div class="radio">
        <label for="protocol-1">
          <input type="radio" name="protocol" id="protocol-1" value="https" checked="{{old('protocol')}}">
          HTTPS
        </label>
    	</div>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="port">Port</label>
      <div class="col-md-5">
      <input id="port" name="port" type="text" placeholder="ie: 8080 or 8443" class="form-control input-md" required="" value="{{ old('port') }}">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Add Application</button>
      </div>
    </div>

    </fieldset>
  </form>

</div>
@stop
