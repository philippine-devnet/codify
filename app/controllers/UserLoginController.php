<?php
	class UserLoginController extends BaseController{
		public function getIndex(){
			return View::make('home.body')->with(array('title'=>'Codify PH | Login','page'=>'login.index'));
		}
	}

