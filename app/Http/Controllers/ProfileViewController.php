<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileViewController extends Controller
{
    public function showProfile()
    {
        return view('user.viewProfile');
    }
}
