<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register in System</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="post" action="">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="email" />
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="password" />
        </div>
        <div>
            <input type="submit" value="Register" />
        </div>
    </form>
</body>
</html>

