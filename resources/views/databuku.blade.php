@extends('mainlayout')
@section('content')
<div class="container mt-5">
    <a href="/tambahbuku" type="button" class="btn bg-amber-300 text-white mb-3">+ Tambah Data</a>
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success mb-3 row" role="alert">
            {{ $message }}
        </div>
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Genre</th>
                <th scope="col">Cover</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->judul }}</td>
                <td>{{ $row->pengarang }}</td>
                <td>{{ $row->penerbit }}</td>
                <td>{{ $row->genre }}</td>
                <td>
                    <img src="{{ asset('coverbuku/' . $row->cover) }}" style="width: 55px;" alt="">
                </td>
                <td>
                    <a href="/download/{{ asset('isibuku/' . $row->isi) }}" type="button" class="btn btn-warning">Download</a>
                </td>
                <td>
                    <a href="/tampilkandata/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
                    <a href="/delete/{{ $row->id }}" type="button" class="btn btn-danger text-black">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
</div>
</div>
@endsection