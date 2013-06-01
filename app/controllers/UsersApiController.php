<?php
	class UsersApiController extends BaseController{
		public function getAll(){
			$scope = array(array('role_id','=','7'));
			return UserApi::pull($scope, e(Input::get('skip')), e(Input::get('take')));
		}
	}
