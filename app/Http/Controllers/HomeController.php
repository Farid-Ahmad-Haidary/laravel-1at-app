<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $names = 'Farid Ahmad Haidary';
        return view('Home')->with('names', $names);
    }
}
