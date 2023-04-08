@extends('mainlayout')
@section('content')

<div class="flex grid grid-cols-2 h-48 mb-4 mt-10 rounded">
   @foreach ($data as $row)
   <a href="/detail/{{ $row->id }}">
      <div>
         <img src="{{ asset('coverbuku/' . $row->cover) }}" alt="{{ asset('coverbuku/' . $row->cover) }}" class="h-80  rounded-xl" style="min-width: 460px">
      </div>
   </a>
   @endforeach
   <div class="flex items-center ml-5">
      <div>
         <h2 class="text-center text-lg font-bold">Continue Reading</h2>
         <img src="https://i.ibb.co/RH2MdLh/Frame-56.jpg" alt="" class="h-60 rounded-xl">
         <h2 class="text-center text-lg font-semibold text-amber-500">Kobra Kai: Ultimate</h2>
      </div>
      <div class="ml-5">
         <h2 class="text-center text-lg font-bold invisible">Continue</h2>
         <img src="https://i.ibb.co/6brWhvb/Group-6.jpg" alt="" class="h-60 rounded-xl">
         <h2 class="text-center text-lg font-semibold text-amber-500">Spider-Man</h2>
      </div>
      <div class="ml-12">
         <a href="#">
            <img src="https://i.ibb.co/t2H3nm3/angle-circle-right-1.jpg" alt="" class="h-12">
         </a>
      </div>
   </div>
</div>
<div class="mb-5" style="margin-top: 160px">
   <div class="flexrounded">
      <p class="font-bold text-2xl">Top Rated Comics</p>
   </div>
</div>
<div class="grid grid-cols-5 gap-4 mb-3" style="margin-top: -30px">
   @foreach ($all as $row)
   <a href="/detail/{{ $row->id }}">
      <div>
         <img src="{{ asset('coverbuku/' . $row->cover) }}" alt="{{ asset('coverbuku/' . $row->cover) }}">
         <h2 class="font-bold text-center text-xl text-amber-500 mt-1">{{ $row->judul }}</h2>
         <p class="font-medium text-center text-lg">{{ $row->pengarang }}</p>
      </div>
   </a>
   @endforeach
</div>
@endsection