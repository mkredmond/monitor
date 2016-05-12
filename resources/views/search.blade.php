@extends('layouts.app')

@section('content')

    <h1 class="page-header">Search</h1>
    <p>
       Search Results for: <span class="alert alert-info">"{{ $searchQuery }}"</span>
    </p>
@stop
