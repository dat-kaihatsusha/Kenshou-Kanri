<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hi guys, welcome to getshowallphongban.php</h2>
    <h3>What's popin guys!</h3>
    <table border="1" cellspacing='0px'>
        <tr>
            <td>ID</td>
            <td>Tên phòng ban</td>
            <td>ID đơn vị</td>
            <td>ID loại khen thưởng</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        @foreach ($showallphongban as $values)
            <tr>
                <td>{{ $values['id'] }}</td>
                <td>{{ $values['tenphongban'] }}</td>
                <td>{{ $values['id_donvi'] }}</td>
                <td>{{ $values['id_loaikhenthuong'] }}</td>
                <td><a href="{{ URL::to('/getformeditphongban/'.$values['id']) }}">Edit</a></td>
                <td><a href="{{ URL::to('/getdeletephongban/'.$values['id']) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>