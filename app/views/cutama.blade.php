@extends('utama')

@section('content')
	
	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-utama">
    
	@foreach ($jadwals->get()->sortBy("JAM_MULAI") as $j)
		<li><a href="#">
		<p>{{$j->matakuliah->MATA_KULIAH}}&nbsp{{$j->matakuliah->KODE}}</p>
		<p>{{$j->dosen->DOSEN}} &nbsp {{$j->dosen->KODE}}</p>
		<p>{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp {{$j->ruang->RUANG}}</p>
		<p>{{$j->kelas->NAMA_KELAS}}</p>
		
		</a></li>
	@endforeach
	</ul>

@stop

@section('header')
<h1>Jadwal Ilmu Komputer</h1>
	<div data-role="navbar">
		<ul>
			<li ><a href="{{url('utama');}}" class="ui-btn-active">Hari Ini</a></li>
			<li><a href="{{url('besok');}}">Besok</a></li>
			<li><a href="{{url('menu')}}">Menu</a></li>
		</ul>
	</div><!-- /navbar -->
@stop

@section('search')
		<form class="ui-filterable">
			<input id="filterBasic-input-utama" data-type="search">
		</form>

@stop