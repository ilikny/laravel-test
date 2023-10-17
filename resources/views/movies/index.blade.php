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

    <li>
      {{ $movie->name }}
      <br>
      type: {{$movie->movieType->name}}
      <br>
      genres:
      @foreach ($movie->genres as $genre)
          {{$genre->name}}
      @endforeach
    
    
    </li>

    @endforeach

  </ul>

</body>

</html>