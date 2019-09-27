<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example https://jsonplaceholder.typicode.com/posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/app.cs">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   @include("layouts/menu")
    <div class="container">
        <h1>Publicaciones</h1>
        @foreach($posts as $post)
        <div class="panel panel-default">
           <div class="panel-body">
             userId:  {{$post->userId}} <br>
             id:      {{$post->id}} <br>
             Title:   {{$post->title}} <br>
             body:    {{$post->body}} <br>
           </div>
                 
        </div>
        @endforeach
        

    </div>


</body>
</html>