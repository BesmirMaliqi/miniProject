<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

body{
    font-family: 'Roboto', sans-serif;
    margin: 0px;
    background-color: rgb(236, 236, 236);
    
}
a{
    text-decoration: none;
}
header{
    /* width: 100%; */
    align-items: center;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    background-color: white;
    margin-bottom: 10px;
}
.li-absolute{
    position: absolute;
    font-size: 13px;
    top: 10px;
    right: 20px;
}
.box{
    position: relative;
    grid-column-gap: 30px;
    padding:  30px;
    background-color: white;
    display: grid;
    grid-template-columns: 200px 1fr;
    width: 100%;
    max-width: 1100px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    border-radius: 15px;
    box-shadow: 0px 3px 5px lightgray;
}
.details {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    
 

}
.buttons {
    
    display: flex;
    justify-content: right;
}
.image {
    width: 200px;
    border-radius: 50%;
    height: 200px;
    background-position:top;
    object-fit: cover;

}
ul{
    list-style: none;
    padding: 0px;
    margin: 0px;

}
ul li {
    padding: 5px 0px;
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
.btn-delete{
    border: 1px solid #E11D48;
    color: #E11D48;
}
.btn-delete:hover{
    background-color: #E11D48;
    color: white;
}
.btn-edit{
    border: 1px solid #008EF0;
    color: #008EF0;
}
.btn-edit:hover{
    background-color: #008EF0;
    color: white;
}
.btn-view{
    border: 1px solid black;
    color: black;
}
.btn-view:hover{
    background-color: black;
    color: white;
}
        .submit{
            background-color: white;
            cursor: pointer;
        }
</style>
</head>
<body>
    <header>
        <p>Besmir Maliqi Website</p>
        <a href="/post/create" class="btn btn-default">Register</a>
    </header>

    @foreach($posts as $post)

    <div class="box">
        <img src="{{$post->cover}}" class="image">
        <div class="details">
            <ul>
                <h2>{{$post->title}}</h2> 
                <li>Nationality: <strong>{{$post->title}}</strong></li>
                <li>City: <strong>{{$post->title}}</strong></li>
                <li>Date of Birth: <strong>{{$post->created_at}}</strong></li>
                <li class="li-absolute">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</li>
            </ul>
            <div class="buttons">
                <a href="/post/{{$post->id}}/edit" class="btn btn-edit"><i class="fas fa-user-edit"></i> Edit</a>
                <a href="/post/{{$post->id}}" class="btn btn-view"><i class="fas fa-eye"></i>SHOW</a>
                {{-- <a href="/" class="btn btn-delete"><i class="fas fa-trash-alt"></i> Delete</a> --}}
                <form method="POST" action="/post/{{$post->id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
            
                    <div class="form-group">
                        <input type="submit" class="btn btn-delete submit" value="Delete">
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    @endforeach
</body>
</html>