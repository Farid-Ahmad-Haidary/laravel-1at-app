<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class HomeController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('Home')->with($notes);
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
