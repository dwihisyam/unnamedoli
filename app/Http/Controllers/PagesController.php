<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function mempelai()
    {
        return view('mempelai');
    }

    public function acara()
    {
        return view('acara');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function lokasi()
    {
        return view('lokasi');
    }

    public function ucapan()
    {
        $komentar = DB::table('komentars')->where('user', 'user')->get();
        return view('ucapan', ['komentar' => $komentar]);
    }

    public function create(Request $request)
    {
        DB::table('komentars')->insert([
            'user' => 'user',
            'nama' => $request->nama,
            'komentar' => $request->komentar,
            'tanggal' => Carbon::now()
        ]);
        return redirect('/ucapan');
    }
}
