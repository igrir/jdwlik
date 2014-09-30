@extends('daftar_list')

@section('daftar')
	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-daftar">
			<li><a href="{{url('detail')}}?hari=0">Senin</a></li>
			<li><a href="{{url('detail')}}?hari=1">Selasa</a></li>
			<li><a href="{{url('detail')}}?hari=2">Rabu</a></li>
			<li><a href="{{url('detail')}}?hari=3">Kamis</a></li>
			<li><a href="{{url('detail')}}?hari=4">Jumat</a></li>
			<li><a href="{{url('detail')}}?hari=5">Sabtu</a></li>
			<li><a href="{{url('detail')}}?hari=6">Minggu</a></li>
		
	</ul>
@stop

@section('search')
	
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
