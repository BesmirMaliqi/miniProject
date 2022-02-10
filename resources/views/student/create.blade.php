
<html>
<head>
    <title>Document</title>
    <style>
form{
            width: 500px;
            background-color: rgb(187, 55, 55);
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

        </style>
</head>
<body>
    {{-- <form action="{{ route('register-post') }} method='post'> --}}
        <form method="POST" action="/post" enctype='multipart/form-data'>
       
        <div class="input-group">
            <label class="label">Title:</label>
        <input type="text" placeholder="Title" name="title" class="input-txt">
        </div>
        <div class="input-group">
            <label class="label">Cover:</label>
        <input type="file" placeholder="Cover" name="cover" class="input-txt">
        </div>

        <div class="input-group">
            <label class="label">Content:</label>
        <input type="text" placeholder="Content" name="content" class="input-txt">
        </div>

        <input type="submit" value="Register post" class="submit btn btn-default">
    </form>

   
</body>
</html>