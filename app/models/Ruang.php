<?php

class Ruang extends Eloquent{

	protected $table = "Ruangs";
	
	public function jadwal(){
		$this->belongsTo('Jadwal', "ID_RUANG", "ID_RUANG");
	}

}