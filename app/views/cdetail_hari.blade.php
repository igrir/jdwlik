@extends('detail_hari')

@section('search')
	<form class="ui-filterable">
		@if ($HARI == 0)
			<input id="filterBasic-input-senin" data-type="search">
	    @elseif ($HARI == 1)
	    	<input id="filterBasic-input-selasa" data-type="search">
	    @elseif ($HARI == 2)
	    	<input id="filterBasic-input-rabu" data-type="search">
	    @elseif ($HARI == 3)
	    	<input id="filterBasic-input-kamis" data-type="search">
	    @elseif ($HARI == 4)
	    	<input id="filterBasic-input-jumat" data-type="search">
	    @elseif ($HARI == 5)
	    	<input id="filterBasic-input-sabtu" data-type="search">
	    @elseif ($HARI == 6)
	    	<input id="filterBasic-input-minggu" data-type="search">
	    @endif
		
	</form>

@stop

@section('nama')
@stop

@section('header')
<h1 >Jadwal Ilmu Komputer</h1>
<div data-role="navbar">
	<ul>
		<li ><a href="{{url('utama');}}">Hari Ini</a></li>
		<li><a href="{{url('besok');}}">Besok</a></li>
		<li><a href="{{url('menu')}}" class="ui-btn-active">Menu</a></li>
	</ul>
</div><!-- /navbar -->


@stop

@section('content')

	@if ($HARI == 0)
		<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-senin">
    @elseif ($HARI == 1)
    	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-selasa">
    @elseif ($HARI == 2)
    	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-rabu">
    @elseif ($HARI == 3)
    	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-kamis">
    @elseif ($HARI == 4)
    	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-jumat">
    @elseif ($HARI == 5)
    	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-sabtu">
    @elseif ($HARI == 6)
    	<ul data-role="listview" data-filter="true" data-input="#filterBasic-input-minggu">
    @endif

	@foreach ($jadwals->get()->sortBy("JAM_MULAI") as $j)
		<li><a href="{{url('detail')}}?kode_jadwal={{$j->ID_JADWAL}}">
		{{$j->matakuliah->MATA_KULIAH}} (<small>{{$j->matakuliah->KODE}}</small>)<br/>
		{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp &#64{{$j->ruang->RUANG}}<br/>
		{{$j->kelas->NAMA_KELAS}}
		<p>{{$j->dosen->DOSEN}} &nbsp {{$j->dosen->KODE}}</p>		
		
		</a></li>
	@endforeach
	</ul>
@stop
