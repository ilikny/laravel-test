<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail of {{ $movie->name }}</title>
</head>

<body>
  
  <a href="/">Home</a><br>
  <a href="/awards">Awards</a><br>
  <a href="/top-rated-movies">Top rated movies</a><br>
  
  <h1>Detail of {{ $movie->name }}</h1>
      

    <div class="year">
        {{ $movie->year }}
    </div>





</body>

</html>