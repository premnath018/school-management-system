<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        $user = User::where('email', $credentials['email'])->first();
        
        if ($user && Hash::check($credentials['password'], $user->password)) { //Check the entered password with the stored password
            Auth::login($user);

            // Store the users sessions data
            session(['name' => $user->name]);
            session(['email' => $user->email]);
            return redirect()->route('home');
        }
        
        return redirect()->back()->with('error', 'Invalid Credentials.');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' =>  [
                'required',
                'confirmed',
                'min:8',
            //    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ],
           // 'accept_terms' => 'accepted',
        ]);
        $userData = $request->all();

        // Create the user using the validated data
        $user = User::create([
            'name' => '',
            'email' => $userData['email'],
            'password' => bcrypt($userData['password']), // Make sure to hash the password
        ]);

        $user->save();

        return  view('auth.login'); 
    }

}
