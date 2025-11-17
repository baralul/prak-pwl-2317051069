<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = '', $npm = '', $kelas = ''){
        $data = [
            'nama' => 'Akbar Ganteng',
            'npm' => '2317051069',
            'kelas' => 'A',
        ];
        return view('profile', $data);
    }
}
