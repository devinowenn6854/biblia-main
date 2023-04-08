<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Collect;
use Illuminate\Http\Request;
use Response;

class CollectionController extends Controller
{
    public function index()
    {
        $data = Book::where('ket', 'yes')->get();
        return view('collection', [
            'title' => 'Collection Book',
        ], compact('data'));
    }
    
    function addcollect(Request $request, $id){
        $data = Book::find($id);
        $data->update($request->all());
        return redirect('/collection');
    }
    
}
