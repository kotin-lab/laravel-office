<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
  public function create() 
  {
    return view('sessions.create');
  }
  

  /**
   * Log the user in.
   */
  public function store() 
  {
    // Validate the credentials
    $attributes = request()->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (! auth()->attempt($attributes)) {
      throw ValidationException::withMessages([
        'email' => 'Your provided credentials could not be verified.'
      ]);
    }

    session()->regenerate(); // Generate a new session ID.

    return redirect('/')->with('success', 'Welcome Back!');
  }


  /**
   * Log the user out of the application.
   */
  public function destroy()
  {
    auth()->logout(); // Log the user out.

    session()->invalidate(); // Flush the session data and regenerate the ID.
 
    session()->regenerateToken(); // Regenerate the CSRF token value.

    return redirect('/')->with('success', 'Goodbye!');
  }
}
