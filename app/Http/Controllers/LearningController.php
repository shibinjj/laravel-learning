<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
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
}





