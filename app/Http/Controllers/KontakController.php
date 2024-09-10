<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function create()
    {
        return view('kontak.create');
    }
  
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'telepon' => 'required|digits_between:10,15',
            'pesan' => 'required',
        ]);
      
        Kontak::create($validated);
      
        return redirect()->route('home')->with('success', 'Pesan Anda telah terkirim!');
    }
}
