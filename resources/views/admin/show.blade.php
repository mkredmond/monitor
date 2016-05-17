@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-8 col-md-offset-2">
    <h1 class="page-header">View all</h1>
    @foreach( $servers as $server )
      <h2 class="page-header">
          {{ $server->hostname }}
          <small>{{ $server->env }}</small>
          <a href="{{url('admin/servers', [$server->id, 'edit'] )}}"><span class="pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a>
      </h2>
      <ul class="list-group">
        @if(count($server->applications) > 0)
          @foreach($server->applications as $application)
            <li class="list-group-item">
              <span>
                <a href="{{ url('admin/applications', [$application->id, 'edit'])}}">{{ $application->name }} <span class="pull-right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a>
              </span>
            </li>
          @endforeach
        @else
          <li class="list-group-item">There are currently no applications associated with this server. <a href="{{ url('admin/applications' )}}">Try adding one now!</a></li>
        @endif
      </ul>
    @endforeach
  </div>
</div>
@stop
