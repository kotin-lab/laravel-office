<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
  /**
   * Registration from.
   * 
   * Show user registration from.
   */
  public function create() 
  {
    return view('register.create');
  }
  
  /**
   * Register new account.
   * 
   * Store new account to the database.
   */
  public function store() 
  {
    // Validate registration fields.
    $attributes = request()->validate([
      'name' => 'required|max:255',
      'username' => 'required|min:3|max:255|unique:users,username',
      'email' => 'required|email|max:255|unique:users,email',
      'password' => 'required|max:255|min:4'
    ]);

    // Store account data into database.
    $user = User::create($attributes);

    // login the user.
    auth()->login($user);

    // Redirect to 'home page' and 
    // flash 'success' message to the session.
    return redirect('/')->with('success', 'Success! account created.');
  }
}
