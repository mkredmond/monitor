@extends('layouts.app')

@section('content')

    <div class="row">
      <h1 class="page-header">Search</h1>
      <p>
      Found <code>{{ sizeof($applications) }}</code> results for: <span class="alert alert-info">"{{ $searchQuery }}"</span>
      </p>
    </div>
    <h1></h1>
    <div class="row">
      <ul>
        @foreach( $applications as $app)
          <li>{!! preg_replace("/\w*?$searchQuery\w*/i", "<b>$0</b>", $app->name) !!} ( {{ $app->url }} )</li>
        @endforeach
      </ul>
    </div>

@stop
