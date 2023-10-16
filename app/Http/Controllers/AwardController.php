<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
  public function index()
  {
    $greeting = 'world';

    $awards = [
      'Oscars',
      'Golden Globes',
      'Bafta',
      'Emmy'
    ];

    // dump($awards); this is like var_dump
    // dd($awards); this is like dump and die


    // $view = view('awards.index');
    // return $view;

    //resources/view/awards/index.blade.php
    //              awards.index


    return view('awards.index', [
      'greeting' => $greeting,
      'awards' => $awards
    ]);



    // //  this will generate the same like up 'greeting' => $greeting  'awards' => $awards ...
    //     compact('greeting', 'awards');


  }
}
