<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function show()
    {
        return view('home', [
            'title' => 'Home',
            'isi' => 'Teyvat',
            'link' => 'Luvsana'
        ]);
    }
}
