<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="/">Home</a><br>
  <a href="/awards">Awards</a><br>
  <a href="/top-rated-movies">Top rated movies</a><br>
  <a href="/top-rated-games">Top rated games</a>
  <ul>

    @foreach ($movies as $movie)
<br>
<br>
    <li>
      <h3>{{ $movie->name }}</h3>
     

      type: {{ $movie->movieType->slug }}
      <br>
      
      genres:
      @foreach ($movie->genres as $genre)
          {{ $genre->name }},
      @endforeach
      <br>
      languages:
      @foreach ($movie->languages as $language)
          {{ $language->name }},
      @endforeach
      <br>
      
        certification: <?php  echo $movie->certification->slug ?>
      <br>
      Origin country: {{ $movie->originCountries }}
      <br>
      Movie status: {{ $movie->movieStatus }}
     
      <br>
      <br>
      
      people:
      @foreach ($movie->people as $person)
          {{ $person->fullname }},
      @endforeach
    
    
    </li>
    <hr>

    @endforeach

  </ul>

</body>

</html>