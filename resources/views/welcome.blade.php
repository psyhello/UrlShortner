<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Url Shortner</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Welcome to my url shortener</h1>
<div class="container-fluid">
    <form action="/url" method="POST"> 
        @csrf
    <div class="container">
       <div class="form-group">
           <label for="url">Enter your Url</label>
           <input type="text" name="url" class="form-control">
        </div> 
        <input type="submit" value="Send" class="btn btn-primary">
    </div>   
</form>

    @if(!empty($shortUrl))
    <div class="alert alert-success" role="alert">Here is your Link: </br> 
    <a href="url/{{$shortUrl}}">{{$_SERVER['SERVER_NAME']."/url/".$shortUrl}}</a></div>
    @endif
    </div>
</body>
</html>
