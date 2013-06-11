<?php

class Category extends Eloquent{



	public function thread(){
		return $this->hasMany('Thread');
	}
	
}