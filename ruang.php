<?php

class Ruang extends Eloquent{
	
	public function jadwal(){
		$this->belongsTo('Jadwal', "ID_RUANG", "ID_RUANG");
	}

}