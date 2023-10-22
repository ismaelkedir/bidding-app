<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Create index
    public function index()
    {
        return view('profile');
    }
}
