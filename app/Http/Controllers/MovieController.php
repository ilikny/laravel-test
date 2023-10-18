<?php

namespace App\Http\Controllers;

use App\Models\Movie;
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


  public function index()
  {
    $movies = Movie::query()
      ->orderBy('rating', 'desc')
      ->limit(5)
      ->where('votes_nr', '>=', 10000)
      ->where('movie_type_id', 1)
      ->get();

    // dd($movies);

    return view('movies.index', compact('movies'));
  }



  public function shawshank()
  {
    $detail = DB::select(
      'SELECT `movies`.*, `people`.`fullname`, `positions`.`name` AS `position`
        FROM `movies` 
        LEFT JOIN `movie_person` 
        ON `movies`.`id` = `movie_person`.`movie_id` 
        LEFT JOIN `people` 
        ON `movie_person`.`person_id` = `people`.`id`
        LEFT JOIN `positions`
        ON `movie_person`.`position_id` = `positions`.`id`
        WHERE `movies`.`id` = 111161 
        ORDER BY `positions`.`name` DESC',
      []
    );

    $detailMovie = DB::select(
      'SELECT *
        FROM `movies` 
        WHERE `movies`.`id` = 111161',
      []
    );


    return view('movies.detail', compact('detail', 'detailMovie'));
  }



  public function search()
  {
    $getSearch = $_GET['search'];

    $searchMovie = DB::select(
      'SELECT *
        FROM `movies`
        WHERE `name` LIKE ? ',
      ["%$getSearch%"]
    );
    // dd($searchMovie);

    return view('movies.search', compact('searchMovie'));
  }
}
