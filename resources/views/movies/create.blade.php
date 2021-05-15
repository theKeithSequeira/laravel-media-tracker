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
         <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="date">Release Date</label>
        <input class="border py-2 px-3 text-grey-darkest" type="date" name="date" id="date" value="{{ old('date') }}">
    </div>
    <div class="flex flex-col mb-6">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="running-time">Running Time</label>
        <input class="border py-2 px-3 text-grey-darkest" type="number" name="running-time" id="running-time" value="{{ old("running-time") }}">
    </div>
    <div class="flex flex-col mb-6">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="language">Language</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="language" id="language" value="{{ old("language") }}">
    </div>
    <div class="flex flex-col mb-6">
        <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="release-country">Release Country</label>
        <input class="border py-2 px-3 text-grey-darkest" type="text" name="release-country" id="release-country" value="{{ old("release-country") }}">
    </div>
        <input class="block bg-teal hover:bg-teal-dark text-black uppercase text-lg mx-auto p-4 rounded" type="submit" value="Add Movie">
        </form>
    </div>
@endsection
