<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <h1>Test</h1>
    <form action="">
        <input type="text" value="{{ $name }}">
        <input type="text" value="{{ $surname }}">
    </form>



    <h3>Back to <a href="{{ route('home') }}">Home Page</a></h3>
</body>
</html>