<?php
	class UsersApiController extends BaseController{
		public function getAll(){
			$scope = array(array('id','!=','0'));
			return UserApi::pull($scope, e(Input::get('skip')), e(Input::get('take')),array('id','desc'),array('Role','Profile'));
		}
	}
