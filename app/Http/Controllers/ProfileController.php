<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'name' => '山田太郎',
            'age' => '25',
            'hobbies' => ['プログラミング', '読書', '旅行'],
        ];
        return view('profile', $data);
    }
}
