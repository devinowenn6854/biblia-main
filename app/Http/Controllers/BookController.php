<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Collect;
use Illuminate\Http\Request;
use Response;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::all();
        return view('databuku', [
            'title' => 'Upload Buku',
        ], compact('data'));
    }

    public function tambahbuku()
    {
        return view('tambahdata', [
            'title' => 'Tambah Data Buku',
        ]);
    }

    public function insertdata(Request $request)
    {
        $data = Book::create($request->all());
        if ($request->hasFile('cover')) {
            $request->file('cover')->move('coverbuku/', $request->file('cover')->getClientOriginalName());
            $data->cover = $request->file('cover')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('isi')) {
            $request->file('isi')->move('isibuku/', $request->file('isi')->getClientOriginalName());
            $data->isi = $request->file('isi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('buku')->with('success', 'Data berhasil ditambahkan');
    }

    public function tampilkandata($id)
    {
        $data = Book::find($id);
        // dd($data);

        return view('tampildata', [
            'title' => 'Edit Data Buku',
        ], compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Book::find($id);
        $data->update($request->all());
        if ($request->hasFile('cover')) {
            $request->file('cover')->move('coverbuku/', $request->file('cover')->getClientOriginalName());
            $data->cover = $request->file('cover')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('buku')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $data = Book::find($id);
        $data->delete();
        return redirect()->route('buku')->with('success', 'Data berhasil dihapus');
    }

    public function download($isi)
    {
        $download = public_path("isibuku/{$isi}");
        return Response::download($download);
    }
}
