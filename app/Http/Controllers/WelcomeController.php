<?php namespace App\Http\Controllers;

use App\Books;
use Illuminate\Support\Facades\App;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Displayed a list of books saved in an sqlite DB
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('welcome');
	}

}
