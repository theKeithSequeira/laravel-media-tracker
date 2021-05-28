@extends('layouts.base')

@section('content')
    <div class="container">
        <form class="mb-6" action="{{ route('movies.store') }}" method="post">
            @csrf
            <div class="flex flex-col mb-6">
            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="title">Title</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div class="flex flex-col mb-6">
         <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="release_date">Release Date</label>
        <input class="border py-2 px-3 text-grey-darkest" type="date" name="release_date" id="release_date" value="{{ old('release_date') }}">
    </div>
    <div class="flex flex-col mb-6">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="running_time">Running Time</label>
        <input class="border py-2 px-3 text-grey-darkest" type="number" name="running_time" id="running_time" value="{{ old("running_time") }}">
    </div>
    <div class="flex flex-col mb-6">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="language">Language</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="language" id="language" value="{{ old("language") }}">
    </div>
    <div class="flex flex-col mb-6">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="release_country">Release Country</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="release_country" id="release_country" value="{{ old("release_country") }}">
    </div>
        <input class="block bg-teal hover:bg-teal-dark text-black uppercase text-lg mx-auto p-4 rounded" type="submit" value="Add Movie">
        </form>
        <a href="{{route('movies.index')}}"><button class="block bg-blue-200 hover:bg-red-100 text-black uppercase text-lg mx-auto p-4 rounded">Go To Index</button></a>
    </div>
@endsection
