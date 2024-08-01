<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Tambahkan logika untuk mengambil data calon, infografis, dll.
        return view('home');
    }
}
