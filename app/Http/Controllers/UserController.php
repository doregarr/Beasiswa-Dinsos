<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showIndexPage()
    {
        return view('index1');
    }
}
