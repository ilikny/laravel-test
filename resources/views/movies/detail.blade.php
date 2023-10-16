<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail of Shawshank redemption</title>
</head>

<body>
  <h1>Detail of Shawshank redemption</h1>

  <a href="/">Home</a><br>
  <a href="/awards">Awards</a><br>
  <a href="/top-rated-movies">Top rated movies</a><br>

  <?php foreach ($detailMovie as $item) : ?>
    <h2><?= $item->name; ?></h2>
  <?php endforeach; ?>

  <?php foreach ($detail as $item) : ?>
    <p><?= $item->position ?> - <?= $item->fullname; ?></p>
  <?php endforeach; ?>


</body>

</html>