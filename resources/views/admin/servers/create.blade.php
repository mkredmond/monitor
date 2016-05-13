@extends('layouts.app')

@section('content')

    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2">
        <h1 class="page-header">Add new server</h1>
      </div>
      <div class="col-sm-12 col-md-6 col-md-offset-3">
        @include('flash')
        @include('errors')
      </div>
    </div>
    <div class="row">
      <form class="form-horizontal" action="{{ url('admin/servers')}}" method="POST">


        {{ csrf_field() }}
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="hostname">Hostname</label>
          <div class="col-md-5">
          <input id="hostname" name="hostname" type="text" placeholder="ie: www.sjfc.edu" class="form-control input-md" required="">

          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="env">Environment</label>
          <div class="col-md-5">
            <select id="env" name="env" class="form-control" required="">
              <option value="DEV">DEV</option>
              <option value="FAID">FAID</option>
              <option value="PPRD">PPRD</option>
              <option value="PROD">PROD</option>
            </select>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">Add Server</button>
          </div>
        </div>

        </fieldset>

      </form>

    </div>

    @if($servers)
    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2">
        <div class="page-header">
          <h2><small>Existing Servers</small></h2>
        </div>
        <ul class="list-group">
          @foreach($servers as $server)
            <li class="list-group-item">{{ $server-> hostname }}  <span class="badge">{{$server->env}}</span></li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif

@stop
