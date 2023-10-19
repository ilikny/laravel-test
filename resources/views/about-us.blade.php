<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About Us</title>
</head>
<body>
  <h1>About us</h1>
  @foreach ($authors as $author)
  {{-- @dd($author); --}}


  <div class="about-us__person">

    <h2 class="about-us__person-name">{{ $author['name'] }}</h2>
    
    @if ($author['position'] !== 'CEO')
    <div class="about-us__person-age">Age:{{ $author['age'] }}</div>
    @endif
    <div class="about-us__person-position">Position:{{ $author['position'] }}</div>

</div>
      
  @endforeach
  
</body>
</html>