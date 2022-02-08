<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
form{
            width: 500px;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            padding: 40px;
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
            background-color: rgb(236, 236, 236);
        }

        .submit{
            min-width: 200px;
            text-align: center;
            justify-self: center;
            border: none;
            /* border-radius:0px !important; */
        }

        .div-back{
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
            margin-top: 20px;
        }
        </style>
</head>
<body>
    
        <form method="POST" action="/post/{{$post->id}}" enctype='multipart/form-data'>
        {{-- @csrf --}}
        {{ csrf_field() }}
                    {{ method_field('PUT') }}
        <div class="input-group">
            <label class="label">Title:</label>
        <input type="text" placeholder="Title" name="title" class="input-txt" value="{{$post->title}}">
        </div>
        <div class="input-group">
            <label class="label">Cover:</label>
        <input type="file" placeholder="Cover" name="cover" class="input-txt">
        </div>

        <div class="input-group">
            <label class="label">Content:</label>
        <input type="text" placeholder="Content" name="content" class="input-txt" value="{{$post->content}}">
        </div>

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