<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        // Validate input fields
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Fetch admin details from the database
        $admin = DB::table('admin')
            ->where('idAdmin', $request->username)
            ->where('password', $request->password)
            ->first();

        // Check if the admin exists
        if ($admin) {
            // Redirect to home page if credentials are valid
            return redirect('/home');
        } else {
            // Redirect back to login page with an error message
            return back()->withErrors(['invalid' => 'Invalid ID or password.']);
        }
    }
}
