<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
/* form{
            width: 500px;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            padding: 40px;
            display: grid;
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
        }

        .div-back{
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
            margin-top: 20px;
        } */

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
        </style>
</head>
<body>
    <header>
        <a href="/post" class="btn btn-default">Back</a>
        <p>Create</p>
    </header>
    {{-- <form action="{{ route('register-post') }} method='post'> --}}
        <center><h3>Register Form</h3></center>
        <form  class="box" method="POST" action="/post" enctype='multipart/form-data'>
        @csrf
        <div class="input-group">
            <label class="label">Title:</label>
        <input type="text" placeholder="Title" name="title" class="input-txt">
        </div>
        <div class="input-group">
            <label class="label">Content:</label>
            <textarea name="content" class="input-txt" cols="30" rows="10"></textarea>
        {{-- <input type="text" placeholder="Content" name="content" class="input-txt"> --}}
        </div>

        <div class="input-group">
            <label class="label">Cover:</label>
        <input type="file" placeholder="Cover" name="cover" class="input-txt">
        </div>
        <input type="submit" value="Register post" class="submit btn btn-default">
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