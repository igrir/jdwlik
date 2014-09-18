<?php

class Matakuliah extends Eloquent{
	
	protected $table = "matakuliahs";

	public function jadwal(){
		return $this->belongsTo('Jadwal', 'KODE', 'KODE');
	}


}