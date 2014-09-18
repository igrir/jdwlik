<?php
class JadwalikController extends BaseController{
	public function utama(){
		$today = date("w", time());
		$tomorrow = ($today>=7?1:$today+1);

		echo "<h1>hari ini</h1>";

		$jadwals = Jadwal::whereRaw("HARI="+$today);

		return View::make('contentutama')->with('jadwals',$jadwals);
	}
}