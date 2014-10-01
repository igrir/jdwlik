<?php

class Matakuliah extends Eloquent{
	
	protected $table = "Matakuliahs";

	public function jadwal(){
		return $this->belongsTo('Jadwal', 'KODE', 'KODE');
	}


}