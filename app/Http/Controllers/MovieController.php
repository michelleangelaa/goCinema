<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

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
        // display the trailer
        // $trailer = Movie::where('currently_showing', true)->first();

        // display now showing
        $current = Movie::where('currently_showing', true)->get();
        // // return $current;
        

        // $current1 = Movie::where('id', 1)->get();
        // return $current;
  

        // $current2 = Movie::where('id', 2)->get();
        // return $current;
        // return view('movies.index', compact('current2'));

        // $current3 = Movie::where('id', 3)->get();
        // return $current;
        // return view('movies.index', compact('current3'));
        // return view('movies.index', compact('current1', 'current2', 'current3'));
        // display upcoming movies
        $upcoming = Movie::where('currently_showing', false)->orderBy('release_date', 'desc')->get();
        // return $upcoming;

        return view('movies.index', compact('current', 'upcoming'));

        $movies = Movie::all();
        // return $movies;
        // return [$current, $upcoming];
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'title' => 'required|string',
            'release_date' => 'required|date',
            'currently_showing' => 'required|string',
            'picture' => 'required|image|max:1999|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('picture')){
            $extension = $request->file('picture')->getClientOriginalExtension();
            $file_name = $request->name.'.'.$extension;
            $path = $request->$file('picture')->storeAs('public/images/movie', $file_name);
        }

        Movie::create([
            'name' => $request->$name,
            'release_date' => $request->release_date,
            'currently_showing'=>$request->currently_showing,
            'picture'=>$file_name
        ]);

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
