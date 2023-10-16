<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
  public function topRated()
  {

    $movies = DB::select(
      'SELECT *
       FROM `movies`
       WHERE `votes_nr` > 5000 && `movie_type_id` = 1
       ORDER BY `rating` DESC
       LIMIT 50',
      []
    );

    return view('top-rated-movies.index', compact('movies'));
  }

  public function shawshank()
  {
    $detail = DB::select(
      'SELECT *
       FROM `movies`
       WHERE `name` LIKE "%Shawshank redemption%"
       LIMIT 1',
      []
    );

    return view('movies.detail', compact('detail'));
  }
}
