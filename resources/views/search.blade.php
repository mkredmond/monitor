@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-8 col-md-offset-2">
    <h1 class="page-header">Search</h1>
    <p>
      Found <code>{{ sizeof($servers) }}</code> results for: <span class="alert alert-info">"{{ $searchQuery }}"</span>
    </p>
    <h1></h1>
    <div class="row">
      <ul class="list-group">
        @foreach( $servers as $app)
          <li class="list-group-item">
            {!! highlight($searchQuery, $app->name) !!} ( <a href="{{$app->protocol}}://{{$app->hostname}}:{{$app->port}}/{{$app->uri}}" target="_blank">{!! highlight($searchQuery, $app->uri) !!}</a> )
            <span class="badge">{{$app->env}}</span>
            <span class="badge">{{$app->hostname}}</span>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@stop
