@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-white-900">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <img src="/img/joker.jpeg" alt="Movie Img" class="w-95">
    <div class="md:ml-24">
      <h2 class="text-4xl font-semibold">
        Movie Name
      </h2>
      <div class="flex items-center text-gray-400 text-sm">
        <span class="fa fa-star text-yellow-400"></span>
        <span class="mx-2">50% |</span>
        <span class="mx-2">Release Date |</span>
        <span class="flex-wrap">Genre</span>
      </div>
      <div class="text-gray-200 mt-5">
        <p>
          We build a Movie App using Laravel, Tailwind CSS and The Movie DB REST API. I go over the different architecture options
          and the different popular technologies around the Laravel/Vue community. We'll be making use of several Laravel 7
          features like the HTTP Client and Blade Components. We then style our application with the latest version of Tailwind
          CSS, using new features like CSS Grid and CSS Transitions.
        </p>
      </div>
      <div class="mt-12">
        <h2 class="text-white font-semibold">
          Featured Cast
        </h2>
        <div class="flex mt-4">
          <div class="pr-5">
            <div class="font-bold">Cast Name</div>
            <div class="text-sm text-gray-400">Text Contents</div>
          </div>
          <div class="pr-5">
            <div class="font-bold">Cast Name</div>
            <div class="text-sm text-gray-400">Text Contents</div>
          </div>
          <div class="pr-5">
            <div class="font-bold">Cast Name</div>
            <div class="text-sm text-gray-400">Text Contents</div>
          </div>
        </div> 
      </div>
      <div class="mt-12">
        <button class="flex items-center bg-orange-500 text-white rounded-full font-semibold px-5 py-4 hover:bg-green-700 transition ease-in-out duration-200">
          <span class="fa fa-play pr-5"></span>Watch Trailer
        </button>
      </div>
    </div>
  </div>
</div>
<div class="movie-info border-b border-white-900">
  <div class="container mx-auto px-4 py-6">
    <div class="text-4xl font-semibold">Cast Overview</div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-15">
      <div class="mt-10">
        <a href="#">
          <img src="/img/joker.jpeg" class="hover:opacity-75 transition fade-in-out duration-200" alt="Cast Img">
        </a>
        <div class="mt-2">
          <a href="#" class="text-lg mt-2 hover:text-gray:400">Movie Name</a>
          <div class="flex items-center text-gray-400 text-sm">
            <span>Potrayed:</span>
            <span>Name Title in Movie</span>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
<div class="movie-info border-b border-white-900">
  <div class="container mx-auto px-4 py-6">
    <div class="text-4xl font-semibold">Screenshots</div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="mt-10">
        <a href="#">
          <img src="/img/joker.jpeg" class="opacity-75" alt="Screenshot">
        </a>
      </div>
    </div>
  </div>
</div>

@endsection