<?php
	class LoginController extends BaseController{
		public function getIndex(){
			return View::make('admin.login');
		}
	}

