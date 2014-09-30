@extends('utama')

@section('content')
	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-menu">
		<li><a href="{{url('dosen');}}">Dosen</a></li>
		<li><a href="{{url('matakuliah');}}">Mata Kuliah</a></li>
		<li><a href="{{url('ruangan');}}">Ruangan</a></li>
		<li><a href="{{url('hari');}}">Hari</a></li>
		<li><a href="{{url('about');}}">(info) Mengenai Aplikasi</a></li>
	</ul>

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

@section('search')

@stop