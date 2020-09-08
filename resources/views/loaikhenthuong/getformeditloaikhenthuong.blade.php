<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ URL::to('/updateloaikhenthuong/'.$editloaikhenthuong->id) }}" method="POST">
        @csrf
        <input type="number" value="{{ $editloaikhenthuong->id }}"><br>
        <input type="text"   name="tenloaikhenthuong"   value="{{ $editloaikhenthuong->tenloaikhenthuong }}"><br>
        <input type="number" name="sotienthuong"        value="{{ $editloaikhenthuong->sotienthuong }}"><br>
        <input type="number" name="id_trinhcap"         value="{{ $editloaikhenthuong->id_trinhcap }}"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>