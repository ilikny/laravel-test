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
     

      Type: {{ $movie->movieType->slug }}
      <br>
      
      Genres:
      @foreach ($movie->genres as $genre)
          {{ $genre->name }},
      @endforeach
      <br>
      Languages:
      @foreach ($movie->languages as $language)
          {{ $language->name }},
      @endforeach
      <br>
      
        Certification: {{ $movie->certification ? $movie->certification->slug : '--' }}
      <br> 
      Origin country: {{ $movie->originCountry ? $movie->originCountry : '--' }}
      <br>   
      Movie status: {{ $movie->movieStatus ? $movie->movieStatus : '--' }}
     
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