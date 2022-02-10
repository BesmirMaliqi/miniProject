<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
header{
    /* width: 100%; */
    align-items: center;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    background-color: white;
    margin-bottom: 10px;
}
.btn {
    padding: 10px 20px;
    margin: 5px;
    border-radius: 10px;
    /* background-color:#488CF0; */
    transition: all .3;
    font-size: 15px;

}
.btn-default{
    background-color: #008EF0;
    color: white;
}
body{
    background-color: rgb(245, 245, 245);
}
        </style>
</head>
<body>
    <header>
        <a href="/post" class="btn btn-default">Back</a>
    </header>

    <Center><h1>Post</h1></Center>
    <div class="card-deck col-md-3" style="margin:0 auto 0 auto">
        <div class="card">
          <img class="card-img-top" src="{{$post->cover}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</small>
          </div>
        </div>
      </div>
</body>
</html>