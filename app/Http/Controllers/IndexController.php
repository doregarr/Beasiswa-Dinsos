<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showUserPage()
    {
        return view('index1');
    }


}
