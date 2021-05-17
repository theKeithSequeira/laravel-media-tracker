@extends('layouts.base')

@section('content')
<h2>Edit Movie</h2>
<a class="btn" href="{{route('movies.index')}}"> Go to Index</a>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif

<form action="{{route('movies.update',$movie->id)}}" method="post">
@csrf
@method('PUT')
<div class="flex flex-col mb-6">
    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="title">Title</label>
<input class="border py-2 px-3 text-grey-darkest" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="{{$movie->title}}">
</div>
<div class="flex flex-col mb-6">
 <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="release_date">Release Date</label>
<input class="border py-2 px-3 text-grey-darkest" type="date" name="release_date" id="release_date" value="{{ old('release_date') }}"  placeholder="{{$movie->release_date}}">
</div>
<div class="flex flex-col mb-6">
<label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="running_time">Running Time</label>
<input class="border py-2 px-3 text-grey-darkest" type="number" name="running_time" id="running_time" value="{{ old("running_time") }}" placeholder="{{$movie->running_time}}">
</div>
<div class="flex flex-col mb-6">
<label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="language">Language</label>
<input class="border py-2 px-3 text-grey-darkest" type="text" name="language" id="language" value="{{ old("language") }}" placeholder="{{$movie->language}}">
</div>
<div class="flex flex-col mb-6">
<label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="release_country">Release Country</label>
<input class="border py-2 px-3 text-grey-darkest" type="text" name="release_country" id="release_country" value="{{ old("release_country") }}" placeholder="{{$movie->release_country}}">
</div>
<input class="block bg-teal hover:bg-teal-dark text-black uppercase text-lg mx-auto p-4 rounded" type="submit" value="Update Movie">
</form>
@endsection
