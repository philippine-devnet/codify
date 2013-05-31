<?php
	class LoginController extends BaseController{
		public function getIndex(){
			return View::make('admin.login');
		}
		public function postIndex(){
			$credentials = array('username'=>e(Input::get('username')), 'password'=>e(Input::get('password')));

			if(Auth::attempt($credentials)){
				return Redirect::to('ap');
			}else{
				return Redirect::to('login')->with('error',1);
			}

		}
	}

