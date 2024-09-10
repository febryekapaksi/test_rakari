<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class AdminController extends Controller
{
    public function index()
    {
        $messages = Kontak::latest()->paginate(10);
        return view('admin.pesan.index', compact('messages')); 
    }
}
