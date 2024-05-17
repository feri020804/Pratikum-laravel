<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $username = 'Feri Ardiansyah';
        $role = 'mahasiswa';

        return view('home', [
            'name' => $username,
            'peran' => $role,
        ]);
    }
}
