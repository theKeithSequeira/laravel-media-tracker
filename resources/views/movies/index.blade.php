@extends('layouts.base')

@section('content')
<h1 class="text-3xl p-5 underline"> Movie Index</h1>
<h2 class="text-2xl p-1 pl-3">This all the movies I've seen:</h2>
@if ($message=Session::get('success'))
    {{$message}}
@endif
@if ($errors->any())
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
@endif
<table class="shadow-lg bg-white m-4">
    <tr>
        <th class="bg-blue-100 border text-left px-8 py-4">Movie Title</th>
        <th class="bg-blue-100 border text-left px-8 py-4">Release Date</th>
        <th class="bg-blue-100 border text-left px-8 py-4">Running Time</th>
        <th class="bg-blue-100 border text-left px-8 py-4">Language</th>
        <th class="bg-blue-100 border text-left px-8 py-4">Genres</th>
        <th class="bg-blue-100 border text-left px-8 py-4">Release Country</th>
        <th class="bg-blue-100 border text-left px-8 py-4">Date Created</th>
        <th class="bg-blue-100 border text-left px-8 py-4">Action</th>
    </tr>

  @foreach ($movies as $movie)
  <tr>
      <td class="border px-8 py-4">{{$movie->title}}</td>
      <td class="border px-8 py-4">{{$movie->release_date}}</td>
      <td class="border px-8 py-4">{{$movie->running_time }} minutes </td>
      <td class="border px-8 py-4">{{$movie->language}}</td>
      <td class="border px-8 py-4">
          @if ($movie->genres)
          {{$movie->genres->pluck('name')->implode(',')}}
          @else
<p>No Movies yet</p>
          @endif
                </td>
      <td class="border px-8 py-4">{{$movie->release_country}}</td>
      <td class="border px-8 py-4">{{$movie->created_at}}</td>
      <td class="border px-8 py-4">
          <form action="{{route('movies.destroy',$movie->id)}}" method="post" class="flex">
            <a href="{{route('movies.show',$movie->id)}}"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"></path></svg></a>
            <a href="{{route('movies.edit',$movie->id)}}"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></a>
        @csrf
        @method('DELETE')
        <button type="submit" title="Delete"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
        </form>
      </td>
    </tr>
  @endforeach

</table>
    <br>
    <a class="bg-red-100  btn hover:shadow-inner transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 rounded-full py-2 px-3 uppercase text-xs font-bold cursor-pointer tracking-wider ml-6" href="{{route('movies.create')}} ">Add a Movie</a>
@endsection
