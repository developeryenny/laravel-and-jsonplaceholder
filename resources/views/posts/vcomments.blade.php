<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example https://jsonplaceholder.typicode.com/comments</title>
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
        <h1>Comments</h1>
        @foreach($comments as $comment)
        <div class="panel panel-default">
           <div class="panel-body">
              postId: {{$comment->postId}} <br>
              id:  {{$comment->id}} <br>
              name: {{$comment->name}} <br>
              email: {{$comment->email}} <br>
              body:  {{$comment->body}} <br>
           </div>      
        </div>
        @endforeach
    </div>


</body>
</html>