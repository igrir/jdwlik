@extends('detail_jadwal')

@section('search')
@stop

@section('content')
@stop

@section('nama')
@stop

@section('header')
<h1 >Jadwal Ilmu Komputer</h1>
<div data-role="navbar">
	<ul>
		<li ><a href="{{url('utama')}}">Hari Ini</a></li>
		<li><a href="{{url('besok')}}">Besok</a></li>
		<li><a href="{{url('menu')}}" class="ui-btn-active">Menu</a></li>
	</ul>
</div><!-- /navbar -->


@stop

@section('matakuliah')
	{{$NAMA_MK}}
@stop

@section('kode_matakuliah')
	{{$KODE_MK}}
@stop

@section('dosen')
	{{$NAMA_DOSEN}}
@stop

@section('kode_dosen')
	{{$KODE_DOSEN}}
@stop

@section('keterangan')
	{{$KETERANGAN}}
@stop

@section('tweet_link')
	https://twitter.com/search?q=%23jdwlik%20AND%20%23{{$KODE_MK}}%20AND%20%23{{$KODE_DOSEN}}&src=typd
@stop

@section('ruangan')
	{{$RUANGAN}}
@stop