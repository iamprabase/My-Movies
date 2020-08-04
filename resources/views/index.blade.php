@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-10">
  <div class="popular-movies"> 
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
      popular movies
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-20">
      <div class="mt-10">
        <a href="#">
          <img src="/img/joker.jpeg" class="hover:opacity-75 transition fade-in-out duration-200" alt="Movie Img">
        </a>
        <div class="mt-2 ml-1">
          <a href="#" class="text-lg mt-2 hover:text-gray:400">Movie Name</a>
          <div class="flex items-center text-gray-400 text-sm">
            <span class="fa fa-star text-yellow-400"></span>
            <span class="mx-2">50% |</span>
            <span>Release Date</span>
          </div>
          <div class="flex items-center text-gray-500 text-sm">
            <span>Genre</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection