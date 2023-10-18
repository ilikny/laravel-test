<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  use HasFactory;

  public function movieType()
  {
    return $this->belongsTo(MovieType::class);
  }

  public function genres()
  {
    return $this->belongsToMany(Genre::class);
  }

  public function people()
  {
    return $this->belongsToMany(Person::class);
  }

  public function languages()
  {
    return $this->belongsToMany(Language::class);
  }

  public function certification()
  {
    return $this->belongsTo(Certification::class);
  }

  public function originCountries()
  {
    return $this->belongsToMany(OriginCountry::class);
  }

  public function movieStatus()
  {
    return $this->belongsTo(MovieStatus::class);
  }
}
