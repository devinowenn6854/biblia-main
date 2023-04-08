<?php

namespace App\Http\Controllers;

use App\Models\Book;
class DetailduaController extends Controller
{
    public function detail($id)
    {
        $data = Book::find($id);
        $nama = $data->judul;
        $buku = Book::where('judul', $nama)->get();
        $random = Book::inRandomOrder()->take(5)->get();
        return view('detaildua', [
            'title' => 'Detail of Book',
        ], compact('data', 'buku', 'random'));
    }
}