<?php

class Threads extends Eloquent{

	public function category(){

		return $this->belongsTo('category');
	
	}
	
}