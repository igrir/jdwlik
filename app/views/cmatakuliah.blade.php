@extends('daftar_list')

@section('daftar')
	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-daftar">
		@foreach($daftar as $row)
			<li><a href="#">{{$row->MATA_KULIAH}}</a></li>
		@endforeach
	</ul>
@stop

@section('search')
		<form class="ui-filterable">
			<input id="filterBasic-input-daftar" data-type="search">
		</form>
@stop
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
