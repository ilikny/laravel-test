<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieCRUDController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $movie = new Movie();

    return view('movies.CRUD.form', compact('movie'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $this->validateMovie($request);

    $movie = new Movie();
    $movie->name = $request->input('name');
    $movie->year = $request->input('year');
    $movie->save();

    session()->flash('success_message', 'The movie was successfully saved!');


    // $name = $request->input('name');
    // $year = $request->input('year');
    // return 'the values are:' . $title . $year;
    return redirect()->route('movies.edit', $movie->id);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id)
  {
    $movie = Movie::findOrFail($id);

    // dd($movie);

    return view('movies.CRUD.form', compact('movie'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $this->validateMovie($request);
    // $this->validate($request, [
    //   'name' => 'required|min:3|max:40',
    //   'year' => 'required|numeric',
    // ], [
    //   'name.required' => 'You forgot something, right.',
    //   'year.numeric' => 'Some custom message'
    // ]);

    $movie = Movie::findOrFail($id);
    $movie->name = $request->input('name');
    $movie->year = $request->input('year');
    $movie->update();

    session()->flash('success_message', 'The movie was successfully updated!');

    return redirect()->route('movies.edit', $movie->id);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $movie = Movie::findOrFail($id);
    $movie->delete();

    return 'You destroy the movie!!!!';
  }

  private function validateMovie($request)
  {
    $this->validate($request, [
      'name' => 'required|min:3|max:40',
      'year' => 'required|numeric',
    ], [
      'name.required' => 'You forgot something, right.',
      'year.numeric' => 'Some custom message'
    ]);
  }
}
