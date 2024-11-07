<?php
// Login logic implementation in AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Display login page
    public function tampilLogin()
    {
        return view('login');
    }

    // Handle login submission
    public function submitLogin(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to intended route or dashboard
            return redirect()->intended('/welcome')->with('success', 'Login successful!');
        }

        // If authentication fails
        return redirect()->back()->withErrors(['email' => 'Invalid email or password'])->withInput();
    }

    // Display registration page
    public function tampilRegistrasi()
    {
        return view('registrasi');
    }

    // Handle registration submission
    public function submitRegistrasi(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login page after successful registration
        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login!');
    }
    public function home()
    {
        return view('home'); // Pastikan 'home' adalah view yang ada
    }
}
