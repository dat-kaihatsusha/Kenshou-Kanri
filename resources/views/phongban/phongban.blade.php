<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ URL::to('/savephongban') }}" method="post">
        @csrf
        <input type="text" name="tenphongban" placeholder="Tên phòng ban"><br>
        <input type="number" name="id_donvi" placeholder="ID đơn vị"><br>
        <input type="number" name="id_loaikhenthuong" placeholder="ID loại khen thưởng"><br>
        <input type="submit" name="sub" value="Save">
    </form>
</body>
</html>