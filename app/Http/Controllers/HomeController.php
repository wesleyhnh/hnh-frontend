<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'your-name'    => 'required|string|max:400',
            'your-email'   => 'required|email|max:400',
            'your-subject' => 'nullable|string|max:400',
            'your-message' => 'nullable|string|max:2000',
        ]);

        // Form submission handled here
        return back()->with('success', 'Thank you! We will be in touch soon.');
    }
}
