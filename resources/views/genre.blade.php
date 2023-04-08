@extends('mainlayout')
@section('content')
<div class="h-80 mb-4 mt-3 rounded bg-gray-100">
   <p class="text-2xl font-bold p-3">Horror</p>
   <div class="grid grid-cols-5" style="width: 750px">
      @foreach ($horror as $horror)
      <a href="/detail/{{ $horror->id }}">
         <div class="pl-5">
            <img src="{{ asset('coverbuku/' . $horror->cover) }}" alt="{{ asset('coverbuku/' . $horror->cover) }}" class="rounded-xl h-44 ">
            <h2 class="font-bold text-xl text-center text-amber-500 mt-1" style="margin-left: -10px;">{{ $horror->judul }}</h2>
            <p class="font-medium text-center text-lg" style="margin-left: -10px;">{{ $horror->pengarang }}</p>
         </div>
      </a>
      @endforeach
   </div>
</div>
<div class="h-80 mb-4 mt-3 rounded bg-gray-100">
   <p class="text-2xl font-bold p-3">Romantis</p>
   <div class="grid grid-cols-5" style="width: 750px">
      @foreach ($romantis as $romantis)
      <a href="/detail/{{ $romantis->id }}">
         <div class="pl-5">
            <img src="{{ asset('coverbuku/' . $romantis->cover) }}" alt="{{ asset('coverbuku/' . $romantis->cover) }}" class="rounded-xl h-44 ">
            <h2 class="font-bold text-xl text-center text-amber-500 mt-1" style="margin-left: -10px;">{{ $romantis->judul }}</h2>
            <p class="font-medium text-center text-lg" style="margin-left: -10px;">{{ $romantis->pengarang }}</p>
         </div>
      </a>
      @endforeach
   </div>
</div>
<div class="h-80 mb-4 mt-3 rounded bg-gray-100">
   <p class="text-2xl font-bold p-3">Sejarah</p>
   <div class="grid grid-cols-5" style="width: 750px">
      @foreach ($sejarah as $sejarah)
      <a href="/detail/{{ $sejarah->id }}">
         <div class="pl-5">
            <img src="{{ asset('coverbuku/' . $sejarah->cover) }}" alt="{{ asset('coverbuku/' . $sejarah->cover) }}" class="rounded-xl h-44 ">
            <h2 class="font-bold text-xl text-center text-amber-500 mt-1" style="margin-left: -10px;">{{ $sejarah->judul }}</h2>
            <p class="font-medium text-center text-lg" style="margin-left: -10px;">{{ $sejarah->pengarang }}</p>
         </div>
      </a>
      @endforeach
   </div>
</div>
<div class="h-80 mb-4 mt-3 rounded bg-gray-100">
   <p class="text-2xl font-bold p-3">Komedi</p>
   <div class="grid grid-cols-5" style="width: 750px">
      @foreach ($komedi as $komedi)
      <a href="/detail/{{ $komedi->id }}">
         <div class="pl-5">
            <img src="{{ asset('coverbuku/' . $komedi->cover) }}" alt="{{ asset('coverbuku/' . $komedi->cover) }}" class="rounded-xl h-44 ">
            <h2 class="font-bold text-xl text-center text-amber-500 mt-1" style="margin-left: -10px;">{{ $komedi->judul }}</h2>
            <p class="font-medium text-center text-lg" style="margin-left: -10px;">{{ $komedi->pengarang }}</p>
         </div>
      </a>
      @endforeach
   </div>
</div>
<div class="h-80 mb-4 mt-3 rounded bg-gray-100">
   <p class="text-2xl font-bold p-3">Drama</p>
   <div class="grid grid-cols-5" style="width: 750px">
      @foreach ($drama as $drama)
      <a href="/detail/{{ $drama->id }}">
         <div class="pl-5">
            <img src="{{ asset('coverbuku/' . $drama->cover) }}" alt="{{ asset('coverbuku/' . $drama->cover) }}" class="rounded-xl h-44 ">
            <h2 class="font-bold text-xl text-center text-amber-500 mt-1" style="margin-left: -10px;">{{ $drama->judul }}</h2>
            <p class="font-medium text-center text-lg" style="margin-left: -10px;">{{ $drama->pengarang }}</p>
         </div>
      </a>
      @endforeach
   </div>
</div>
@endsection