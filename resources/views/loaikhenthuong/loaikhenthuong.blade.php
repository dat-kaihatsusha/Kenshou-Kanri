<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ URL::to('/saveloaikhenthuong') }}" method="post">
        @csrf
        <input type="text" name="tenloaikhenthuong" placeholder="Tên loại khen thưởng"><br>
        <input type="number" name="sotienthuong" placeholder="Số tiền thưởng"><br>
        <input type="number" name="id_trinhcap" placeholder="Id trình cấp"><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>