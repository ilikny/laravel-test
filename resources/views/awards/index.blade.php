<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of awards</title>
</head>

<body>

  <h1>List of movie awards</h1>
  <a href="/">Home</a><br>
  <a href="/top-rated-movies">Top rated movies</a><br>
  <a href="/top-rated-games">Top rated games</a>

  <h1>Hello, <?= $greeting ?></h1>

  <ul>
    <?php foreach ($awards as $item) : ?>
      <li>
        <?= $item; ?>
      </li>
    <?php endforeach; ?>
  </ul>


</body>

</html>