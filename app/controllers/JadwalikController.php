<?php
class JadwalikController extends BaseController{
	public function utama(){
		echo $today = date("w", time())-1;
		$tomorrow = ($today>=6?0:$today+1);

		$jadwals = Jadwal::whereRaw("HARI=?",array($today));

		return View::make('cutama')->with('jadwals',$jadwals);
	}
	public function besok(){
		$today = date("w", time())-1;
		echo $tomorrow = ($today>=6?0:$today+1);
		$jadwals = Jadwal::whereRaw("HARI=?",array($tomorrow));

		return View::make('cbesok')->with('jadwals',$jadwals);
	
	}
	public function menu(){
		return View::make('cmenu');
	}
	public function getDosen(){
	
	$daftar = Dosen::all()->sortBy("DOSEN");
		return View::make('cdosen')->with('daftar',$daftar);
	}
	public function getMataKuliah(){
	
		$daftar = Matakuliah::all()->sortBy("MATA_KULIAH");
		return View::make('cmatakuliah')->with('daftar',$daftar);
	}
	public function getRuangan(){
		$daftar = Ruang::all()->sortBy("RUANG");
		return View::make('cruangan')->with('daftar',$daftar);
	}
	public function getHari(){
		return View::make('chari');
	}
	
	public function getDetail(){
		return View::make('cdetail_jadwal');
	}
}