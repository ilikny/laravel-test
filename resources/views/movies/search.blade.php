<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search for movie</title>
</head>

<body>
  <h1>Search for movie</h1>

  <a href="/">Home</a><br>
  <a href="/awards">Awards</a><br>
  <a href="/top-rated-movies">Top rated movies</a><br>

  <?php foreach ($searchMovie as $item) : ?>
    <li>
      <?= $item->name ?>
      (year:<?= $item->year ?>)
    </li>

  <?php endforeach; ?>

</body>

</html>