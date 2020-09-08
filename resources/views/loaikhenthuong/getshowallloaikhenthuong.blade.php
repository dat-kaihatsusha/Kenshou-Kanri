<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hi guys, welcome to getshowallloaikhenthuong.php</h2>
    <h3>What's up guys!</h3>
    <table border="1" cellspacing='0px'>
        <tr>
            <td>ID</td>
            <td>Tên loại khen thưởng</td>
            <td>Số tiền thưởng</td>
            <td>ID trình cấp</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        @foreach ($showallkhenthuong as $values)
            <tr>
                <td>{{ $values['id'] }}</td>
                <td>{{ $values['tenloaikhenthuong'] }}</td>
                <td>{{ $values['sotienthuong'] }}</td>
                <td>{{ $values['id_trinhcap'] }}</td>
                <td><a href="{{ URL::to('/getformeditloaikhenthuong/'.$values['id']) }}">Edit</a></td>
                <td><a href="{{ URL::to('/getdeleteloaikhenthuong/'.$values['id']) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>