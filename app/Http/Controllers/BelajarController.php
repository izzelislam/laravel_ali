<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BelajarController extends Controller
{
    public function store(Request $request)
    {
        // $nama = 'Joko';
        // return view('belajar',compact('nama'));

        $url = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = json_decode($url);
        // dd($data);
        return view('belajar',compact('data'));
    }
}
