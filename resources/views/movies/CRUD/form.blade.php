<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  @include('components.messages')


  @if ($movie->id)
  <h2>Edit movie</h2>

      <form action="{{ route('movies.update', $movie->id) }}" method="post">
        @method('PUT')
   @else 
   <h2>Add new movie</h2>

        <form action="{{ route('movies.store') }}" method="post">
      
  @endif

  @csrf

        <label>Title:</label>
        <br>
        <input name="name" value="{{ old('name', $movie->name) }}"/>
        <br>

        <label>Year:</label>
        <br>
        <input name="year" value="{{ old('year', $movie->year) }}"/>
        <br>
        <button>Save</button>

        </form><br>


    @if ($movie->id)
    <form action=" {{ route('movies.destroy', $movie->id) }}" method="post">
      @method('DELETE')
      @csrf
      <button>Delete</button>
    </form>


    @endif
  
</body>
</html>