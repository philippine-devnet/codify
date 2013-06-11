<?php

class ProfileApiController extends \BaseController {

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
		//
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
		$profile = Profile::with('User')->find($id);
		if(!$profile)
			App::abort('404','An Error has occured! Profile {$id} can\'t be found. ');
		return $profile;
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

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$profile = Profile::find($id);
		if(!$profile)
			App::abort('404','An Error has occured! Profile {$id} can\'t be found. ');
		$profile->first_name = e(Input::get('first_name'));
		$profile->middle_name = e(Input::get('middle_name'));
		$profile->last_name = e(Input::get('last_name'));
		$profile->occupation = e(Input::get('occupation'));
		$profile->save();
		return $profile;

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