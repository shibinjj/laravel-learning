<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use \Input;
use \Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Hash;

use Illuminate\Http\Request;

class UsersController extends Controller {

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
	 * Show the form for Registering a new User.
	 *
	 * @return Response
	 */
	public function register()
	{
            return view('auth.register')->with(["title" => "Register"]);
	}

	/**
	 * Save a user.
	 *
	 * @return Response
	 */
	public function Save()
	{
		$userDetails = Input::all();
        $validator = Validator::make([
            'first_name'            => $userDetails['first_name'],
            'last_name'             => $userDetails['last_name'],
            'email'                 => $userDetails['email'],
            'password'              => $userDetails['password'],
            'password_confirmation' => $userDetails['password_confirmation'],
            'address'               => $userDetails['address']
        ],
            [
                'first_name'            => 'required|string',
                'last_name'             => 'required|max:255',
                'email'                 => 'required|email|unique:users',
                'password'              => 'required|string',
                'password_confirmation' => 'required|string',
                'address'               => 'required|string'
            ]
        );
        if ($validator->fails()){
            return view('auth.register')->with(["title" => "Register"])->withErrors($validator);
        }elseif($userDetails['password'] !== $userDetails['password_confirmation']){
            return view('auth.register')->with(["title" => "Register", "error" => "Passwords don't match"]);
        }else{
            $user = new User();
            $user->first_name = $userDetails['first_name'];
            $user->last_name  = $userDetails['last_name'];
            $user->email      = $userDetails['email'];
            $user->password   = Hash::make($userDetails['password']);
            $user->address    = $userDetails['address'];
            $user->save();
            return view('auth.register')->with(["title" => "Register"]);
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
