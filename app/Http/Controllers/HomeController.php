<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $all = Book::all();
        $data = Book::inRandomOrder()->take(1)->get();
        return view('home', [
            'title' => 'Home',
        ], compact('all', 'data'));
    }
    
    public function search(Request $request)
    {
        $keterangan = $request->judul;
        $buku = Book::where('judul', $request->judul)->get();
        return view('search', [
            'title' => 'Search Book',
        ], compact('buku', 'keterangan'));
    }
}
