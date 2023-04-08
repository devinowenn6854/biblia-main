@extends('mainlayout')
@section('content')

<div class="grid grid-cols-5" style="width: 750px; margin-top: 30px;">
   @foreach ($data as $row)
   <a href="/detaildua/{{ $row->id }}">
      <div class="pl-5">
         <img src="{{ asset('coverbuku/' . $row->cover) }}" alt="{{ asset('coverbuku/' . $row->cover) }}" class="rounded-xl h-44 ">
         <h2 class="font-bold text-xl text-center text-amber-500 mt-1" style="margin-left: -10px;">{{ $row->judul }}</h2>
         <p class="font-medium text-center text-lg" style="margin-left: -10px;">{{ $row->pengarang }}</p>
      </div>
   </a>
   @endforeach
</div>
@endsection