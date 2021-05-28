@extends('layouts.base')


@section('content')
<h2 class="text-3xl p-5 underline">Movie Details</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="font-bold underline ">
                <a class="" href="{{ route('movies.index') }}" >Go To Index</a                      ></i> </a>
            </div>
        </div>
    </div>

    <div class="row border-4 mt-4 p-4 text-center tex">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="font-bold underline">Title:</strong>
                {{ $movie->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="font-bold underline">Release Date:</strong>
                {{ $movie->release_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Running Time:</strong>
                {{ $movie->running_time }}
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong class="font-bold underline">Language:</strong>
                {{ $movie->language }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="font-bold underline">Release Country:</strong>
                {{ $movie->release_country }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="font-bold underline">Date Created:</strong>
                {{ date_format($movie->created_at, 'jS M Y') }}
            </div>
        </div>
        <a href="{{route('movies.index')}}"><button class="block bg-teal hover:bg-teal-dark text-white uppercase text-lg mx-auto p-4 rounded">Go To Index</button></a>

    </div>
@endsection
