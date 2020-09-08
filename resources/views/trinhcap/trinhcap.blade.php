<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ URL::to('/savetrinhcap') }}" method="post">
        @csrf
        <input type="text" name="tentrinhcap" placeholder="Tên trình cấp"><br>
        <input type="submit" name="sub" value="Save">
    </form>
</body>
</html>