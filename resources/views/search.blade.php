@extends('mainlayout')
@section('content')
<div class="grid grid-cols-5 mt-5" style="width: 620px">
    @foreach ($buku as $row)
    <a href="/detail/{{ $row->id }}">
        <div>
            <img src="{{ asset('coverbuku/' . $row->cover) }}" alt="{{ asset('coverbuku/' . $row->cover) }}" class="rounded-xl h-44 ">
            <h2 class="font-bold text-center text-xl text-amber-500 mt-1">{{ $row->judul }}</h2>
            <p class="font-medium text-center text-lg">{{ $row->pengarang }}</p>
        </div>
    </a>
    @endforeach
</div>
@endsection