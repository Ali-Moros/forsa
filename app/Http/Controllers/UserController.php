<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
   //Show Register/Login 

   public function create() {
    return view('users.signup');
   }

   //Create New User

   public function store(Request $request) {

      $formFields = $request->validate([
         'name' => ['required', 'min:3'],
         'email' => ['required', 'email', Rule::unique('users', 'email')],
         'password' => 'required|confirmed|min:6'
     ]);

     // Password Hashing

     $formFields['password'] = bcrypt($formFields['password']);

     $user = User::create($formFields);



     //Login

     auth()->login($user);

     return redirect('/listings')->with('message', 'تم إنشاء حسابك بنجاح!');
   }
}
