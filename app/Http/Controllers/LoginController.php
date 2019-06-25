<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class LoginController extends Controller
{

	protected $title = "Login form";
    
	public function login()
	{
		$data = [];
		// $query = User::all();
		$data['title'] = $this->title;
		// $data['query'] = $query;
		return view('login',$data);

	}

	public function register(Request $request)
	{
		// resources/views/resgister.blade.php 
		// resources/views/resgister/index.blade.php 
		// return view("tenfile")  sau dau cham cuoi cung phai la phai .blade.php

		//
		return view('register');
	}

   public function postLogin(Request $request)
   {
    	$username=$request->input('username');
    	$password=md5($request->input('password'));
    	$result=DB::table('users')->where('Username',$username)->where('Password',$password)->first();
    	$messages = [
            'username.required' => 'Username required!',
            'password.required' => 'Password requied!',
        ];
        
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ], $messages);

    	if ($result==null) {
    		$alert='Username or Password is not valid!';
    		return redirect()->back()->with('alert',$alert);
    	}else{
    		session(['user'=>$username]);
    		return redirect('users');
    	}
    }

}
