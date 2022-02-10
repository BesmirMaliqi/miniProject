<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        header{
            align-items: center;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            background-color: white;
            margin-bottom: 10px;

        }
        body{
            font-family: 'Roboto', sans-serif;
            margin: 0px;
            background-color: rgb(236, 236, 236);
             }
    form{
            width: 400px;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            padding: 30px;
            display: grid;
            /* grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr; */
            grid-row-gap: 20px;
        }
        .input-group{
            display: grid;
        }
        .label{
            font-size: 18px;
        }
        .input-txt{
            border: 0px;
            padding: 10px 20px;
            background-color: rgb(238, 238, 238);
        }

        .submit{
            min-width: 100px;
            text-align: center;
            justify-self: center;
            border: none;
            /* border-radius:0px !important; */
        }

        .btn-default{
            padding: 10px;
            border-radius: 10px;
            background-color: #008EF0;
            color: white;
        }
        .btn-default:hover{
        background-color: #9000f0;
        color: white;
}
        .box{
            
            width: 100%;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            border-radius: 15px;
            box-shadow: 0px 3px 5px rgb(151, 140, 140);
        }
        .btn {
    padding: 10px 20px;
    margin: 5px;
    border-radius: 10px;
    /* background-color:#488CF0; */
    transition: all 1s;
    font-size: 15px;

}
.btn-default{
    background-color: #008EF0;
    color: white;
}
a{
    text-decoration: none;
}
        </style>
</head>
<body>
    <header>
        <a href="/post" class="btn btn-default">Back</a>
        <p>Edit</p>
    </header>
        <form class="box" method="POST" action="/post/{{$post->id}}" enctype='multipart/form-data'>
        {{-- @csrf --}}
        {{ csrf_field() }}
                    {{ method_field('PUT') }}
        <div class="input-group">
            <label class="label">Title:</label>
        <input type="text" placeholder="Title" name="title" class="input-txt" value="{{$post->title}}">
        </div>
        <div class="input-group">
            <label class="label">Content:</label>
            <textarea name="content" class="input-txt" cols="30" rows="10">{{$post->content}}</textarea>
        {{-- <input type="text" placeholder="Content" name="content" class="input-txt"> --}}
        </div>
        <div class="input-group">
            <label class="label">Cover:</label>
        <input type="file" placeholder="Cover" name="cover" class="input-txt">
        </div>

        {{-- <div class="input-group">
            <label class="label">Content:</label>
        <input type="text" placeholder="Content" name="content" class="input-txt" value="{{$post->content}}">
        </div> --}}

        <input type="submit" value="Update Post" class="submit btn btn-default">
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
</body>
</html>