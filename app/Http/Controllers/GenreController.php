<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $action = Book::where('genre', 'action')->get();
        $horror = Book::where('genre', 'horror')->get();
        $romantis = Book::where('genre', 'romantis')->get();
        $sejarah = Book::where('genre', 'sejarah')->get();
        $komedi = Book::where('genre', 'komedi')->get();
        $drama = Book::where('genre', 'drama')->get();
        return view('genre', [
            'title' => 'Genre',
        ], compact('action', 'horror', 'romantis', 'sejarah', 'komedi', 'drama'));
    }
}
