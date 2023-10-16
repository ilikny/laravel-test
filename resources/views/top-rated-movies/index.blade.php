<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top rated 50 movies</title>
</head>

<body>
  <h1>Top rated 50 movies</h1>

  <a href="/">Home</a><br>
  <a href="/awards">Awards</a><br>
  <a href="/top-rated-games">Top rated games</a>

  <ul>
    <?php foreach ($movies as $movie) : ?>

      <li>
        <?= $movie->name; ?>
      </li>

    <?php endforeach; ?>
  </ul>

</body>

</html>