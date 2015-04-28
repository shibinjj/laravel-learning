<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Input;
use Request;
/*
|--------------------------------------------------------------------------
| Learning Controller
|--------------------------------------------------------------------------
|
| This controller is used for learning HTTP routing and filtering.
|
*/
class LearningController extends Controller {

	/**
	 * Test Controller to display a view page
	 */
	public function helloWorld($user)
	{
		$data['name'] = $user;
		return view('learning.helloWorld', $data);
	}

	/**
	 * Get name of the user
	 * @param $user
	 * @return \Illuminate\View\View
	 */
	public function getName()
	{
		$name = Request::input('name');
		if (isset($name))
		{
			Session::put('name', $name);
		}
		else
		{
			$data = [];
			return view('learning.getName', $data);
		}
	}

	public function nextPage()
	{
		if(Session::has('name'))
		{
			$name = Session::get('key');
			return 'Welcome'.$name;
		}
	}
}





