@extends('about')

@section('header')

<h1>Jadwal Ilmu Komputer</h1>
	<div data-role="navbar">
		<ul>
			<li ><a href="{{url('utama');}}">Hari Ini</a></li>
			<li><a href="{{url('besok');}}">Besok</a></li>
			<li><a href="{{url('menu')}}" class="ui-btn-active">Menu</a></li>
		</ul>
	</div><!-- /navbar -->
@stop

@section('search')

@stop