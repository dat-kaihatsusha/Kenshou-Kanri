<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>What's the poppin gyus!</h2>
    <h3>Welcome to creat new "donvi"</h3>
    <form action="{{ URL::to('/savedonvi') }}" method="post">
        @csrf
        <input type="text" name="madonvi" placeholder="Mã đơn vị"><br>
        <input type="text" name="tendonvi" placeholder="Tên đơn vị"><br>
        <input type="text" name="diachi" placeholder="Địa chỉ"><br>
        <input type="submit" name="sub" value="Save">
    </form>
</body>
</html>