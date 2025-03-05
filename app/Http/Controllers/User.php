<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    

public function loginWiew(){

return view('login');


}
public function registerWiew(){

return view('register');


}
public function login(Request $request){


    $user = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($user) && Auth::attempt(['role' => 'admen'])) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }


// SELECT email , password
// FROM users

// count

// SELECT COUNT(id) as CONT
// FROM users 
// GROUP BY id;

}
public function register(Request $request){
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);

    $user->save();

    // INSERT INTO users (name, email, password) 
    // VALUES (' value 1 ',' value 2 ',' value 3')


}



}
