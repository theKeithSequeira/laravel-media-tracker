@extends('layouts.base')

@section('content')
@if ($message=Session::get('success'))
    {{$message}}
@endif
@if ($errors->any())
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
@endif
<table>
    <tr>
        <th>Movie Title</th>
        <th>Release Date</th>
        <th>Running Time</th>
        <th>Language</th>
        <th>Release Country</th>
        <th>Date Created</th>
        <th>Action</th>
    </tr>

  @foreach ($movies as $movie)
  <tr>
      <td>{{$movie->title}}</td>
      <td>{{$movie->release_date}}</td>
      <td>{{$movie->running_time }} minutes </td>
      <td>{{$movie->language}}</td>
      <td>{{$movie->release_country}}</td>
      <td>{{$movie->created_at}}</td>
      <td>
          <form action="{{route('movies.destroy',$movie->id)}}" method="post">
            <a href="{{route('movies.show',$movie->id)}}">Show Details</a>
            <a href="{{route('movies.edit',$movie->id)}}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" title="Delete">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach

</table>
    <br>
    <a href="{{route('movies.create')}}">Add a Movie</a>
@endsection
