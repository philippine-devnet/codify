<?php

class UserApiController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(!Auth::user()){
			App::abort(401, 'You are not authorized.');
		}
		$rules = array(
				'username'	=>	'unique:users,username',
				'password'	=>	'required'
			);
		$input = Input::all();
		$validation = Validator::make($input, $rules);
		if($validation->fails()){
			App::abort(500, 'You are not authorized.');
		}else{
			$newUser = new User;
			$newUser->username = Input::get('username');
			$newUser->password = Hash::make('password');
			$newUser->save();
			return $newUser;
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$user = User::with('Role','Profile')->find($id);
		if(!$user){
			App::abort('404','The user is not found.');
		}else{
			return $user;
		}

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	public function missingMethod($parameters)
	{
	    //
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}