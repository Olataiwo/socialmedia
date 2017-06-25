<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
	public function getDashBoard()
	{
		return view('dashboard');
	}

	public function postSignUp(Request $request)
	{
		$email = $request['email'];
		$first_name = $request['first_name'];
		$password = bcrypt($request['password']);

		$user = new User;
		$user->email = $email;
		$user->first_name = $first_name;
		$user->password = $password;

		$user->save();

		return redirect()->route('dashboard');
	}


	public function postSignIn(Request $request)
	{

	}
}

