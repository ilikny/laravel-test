<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top rated 50 games</title>
</head>

<body>
  <h1>Top rated 50 games</h1>

  <a href="/">Home</a><br>
  <a href="/awards">Awards</a><br>
  <a href="/top-rated-movies">Top rated movies</a><br>

  <ul>
    <?php foreach ($games as $game) : ?>

      <li>
        <?= $game->name; ?>
      </li>

    <?php endforeach; ?>
  </ul>

</body>

</html>