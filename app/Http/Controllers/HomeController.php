<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class HomeController extends Controller
{
    public function index()
    {
        $names = 'Farid Ahmad Haidary';
        return view('Home')->with('names', $names);
    }


    public function save(Request $request)
    {
        $request->validate([
        'note' => 'required'
    ]);

        Note::create([
            'note' => $request->note
        ]);

        return redirect()->back();
     
    }
}
