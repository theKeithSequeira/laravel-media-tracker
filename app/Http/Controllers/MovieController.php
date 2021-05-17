<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies=Movie::all();
        return view('movies.index',['movies'=>$movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $request->validate([
            "title"=>"required",
            "release_date"=>["required","date"],
            "running_time"=>["required","numeric"],
            "language"=>"required",
            "release_country"=>"required",
        ]);
        $movie=new Movie();
        $movie->title=$request->title;
        $movie->release_date=$request->release_date;
        $movie->running_time=$request->running_time;
        $movie->language=$request->language;
        $movie->release_country=$request->release_country;
        $movie->user_id=auth()->user()->id;
        $movie->save();
        return redirect()->route("movies.index")->with("success","New Movie Added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
        $request->validate([
            "title"=>"required",
            "release_date"=>["required","date"],
            "running_time"=>["required","numeric"],
            "language"=>"required",
            "release_country"=>"required",
        ]);
        $movie->update($request->all());
        return redirect()->route('movies.index')->with('success',"Movie Updated!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();
        return redirect()->route('movies.index')->with('success',"Movie Deleted!");
    }
}
