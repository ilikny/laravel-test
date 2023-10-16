<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideogameController extends Controller
{
  public function topRated()
  {

    $games = DB::select(
      'SELECT *
       FROM `movies`
       WHERE `votes_nr` > 5000 && `movie_type_id` = 7
       ORDER BY `rating` DESC
       LIMIT 50',
      []
    );

    return view('top-rated-videogames.index', compact('games'));
  }
}
