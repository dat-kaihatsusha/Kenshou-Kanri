<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get form edit Phòng bàn</title>
</head>
<body>
    <form action="{{ URL::to('/updatephongban/'.$editphongban->id) }}" method="POST">
        @csrf
        <input type="number" name="id" value="{{ $editphongban->id }}"><br>
        <input type="text" name="tenphongban" value="{{ $editphongban->tenphongban }}"><br>
        <input type="number" name="id_donvi" value="{{ $editphongban->id_donvi }}"><br>
        <input type="number" name="id_loaikhenthuong" value="{{ $editphongban->id_loaikhenthuong }}"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>