<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home for movie site</title>
</head>

<body>

  <h1>Home for movie site</h1>

  <a href="/awards">Awards</a><br>
  <a href="/top-rated-movies">Top rated movies</a><br>
  <a href="/top-rated-games">Top rated games</a><br>

  {{-- <form action="/search" method="POST">
  <input name="search" placeholder="Search for movie">
  <button>Search</button>

  </form> --}}
   <form action="/search" method="get">
        <input type="text" name="search">
        <button>Search</button>
    </form>




</body>

</html>