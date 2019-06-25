<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

// use App\Http\Request;

class UserController extends Controller
{

	protected $title = "All users";
    
	public function index()
	{
		$data = [];

		$data['title'] = $this->title;

		return view('users.index',$data);

	}

	public function store(Request $require)
	{
		$query = User::all();
		$data['query'] = $query;

		User::insert('users',[

			'Username' => $_POST['username'],

			'Password' => md5($_POST['password']),

			'FullName' => $_POST['fullname'],

		]);

		return redirect('users');

	}
}
