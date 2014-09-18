@extends('utama')

@section('content')
	<ul data-role="listview">
    
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