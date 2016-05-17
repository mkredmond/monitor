@extends('layouts.app')

@section('content')

    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2">
        <h1 class="page-header">Edit <i>{{$server->hostname}}</i> <small>{{$server->id}}</small></h1>
      </div>
      <div class="col-sm-12 col-md-6 col-md-offset-3">
        @include('flash')
        @include('errors')
      </div>
    </div>
    <div class="row">
      <form class="form-horizontal" action="{{ url('admin/servers', [$server->id])}}" method="POST">

        {!! method_field('patch') !!}
        {{ csrf_field() }}
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="hostname">Hostname</label>
          <div class="col-md-5">
          <input id="hostname" name="hostname" type="text" placeholder="ie: www.sjfc.edu" class="form-control input-md" required="" value="{{$server->hostname}}">

          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="env">Environment</label>
          <div class="col-md-5">
            <select id="env" name="env" class="form-control" required="">
              <option value="DEV" @if($server->env == 'DEV') selected="" @endif>DEV</option>
              <option value="FAID" @if($server->env == 'FAID') selected="" @endif>FAID</option>
              <option value="PPRD" @if($server->env == 'PPRD') selected="" @endif>PPRD</option>
              <option value="PROD" @if($server->env == 'PROD') selected="" @endif>PROD</option>
            </select>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">Update Server</button>
          </div>
        </div>

        </fieldset>

      </form>

    </div>

@stop
