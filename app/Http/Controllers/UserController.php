<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show all seeded users (for admin/testing purposes)
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->get(); // Get all users
        return view('seederUser', compact('users'));
    }

    public function dashboard()
    {
        // Get the first user from the database (your seeded account)
        $user = User::first();

        if ($user) {
            // Log in this user automatically (for display purposes)
            Auth::login($user);

            // Optional: update last_login timestamp
            $user->last_login = now();
            $user->save();
        }

        return view('dashboard', compact('user'));
    }
}
