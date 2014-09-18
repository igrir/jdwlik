<?php
class JadwalikController extends BaseController{
	public function utama(){
		$today = date("w", time());
		$tomorrow = ($today>=7?1:$today+1);

		$jadwals = Jadwal::whereRaw("HARI=?",array($today));

		return View::make('contentutama')->with('jadwals',$jadwals);
	}
	public function besok(){
		$today = date("w", time());
		$tomorrow = ($today>=7?1:$today+1);
		$buset=5;
		$jadwals = Jadwal::whereRaw("HARI=?",array($tomorrow));

		return View::make('contentbesok')->with('jadwals',$jadwals);
	
	}
}