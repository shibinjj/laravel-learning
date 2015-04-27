<?php namespace App\Http\Controllers;

use App\Books;
use App\User;
use App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LearningController extends Controller {

	/**
	 * This function displays books saved in the sqlite DB
	 *
	 * @return Response
	 */
	public function index()
	{
		//This function displays books saved in the sqlite DB
        $booksObj = new Books();
        $booksArray = $booksObj->getAllBooks();
        $data['books'] = $booksArray;
        return view('learning/books', $data);
	}

    /**
     * Saves a user to DB if the registration validation is passed
     * @return \Illuminate\View\View
     */
	public function register()
    {
        if(isset($_POST) && !empty($_POST))
        {
            $rules = array(
                'name' => 'required',                             // Field required validation
                'email' => 'required|email|unique:users',     // Required email and unique validation
                'password' => 'required',
                'password_confirm' => 'required|same:password'  // Required and has to match the password field
            );

            //Validate data against above defined rules
            $validator = Validator::make(\Illuminate\Support\Facades\Input::all(), $rules);

            // Checking if the validator failed or not
            if ($validator->fails())
            {

                // Get the error messages from the validator
                $messages = $validator->messages();

                // Redirect our user back to the form with the errors from the validator
                return Redirect::to('/learning/register')
                    ->withErrors($validator);
            }
            else
            {
                // The user has passed validation and save him to the DB
                $user = new User();
                $user->name = \Illuminate\Support\Facades\Input::get('name');
                $user->email = \Illuminate\Support\Facades\Input::get('email');
                $user->password = Hash::make(\Illuminate\Support\Facades\Input::get('password'));

                $user->save();

                // Redirect our user back to the form so they can do it all over again
                return Redirect::to('learning/register');

            }
        }
        else
        {
            return view('learning/register');
        }
    }

}
