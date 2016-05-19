@extends('layouts.app')

@section('content')
	@can('edit_forum')
		<a href="#">Edit the Forum</a>
	@endcan
	@can('manage_money')
		<a href="#">Manage the money</a>
	@endcan

@stop
