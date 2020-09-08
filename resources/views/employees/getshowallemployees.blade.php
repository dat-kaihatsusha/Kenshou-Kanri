<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>What's popin guys, welcome to getshowallemployees.blade.php</h2>
    <table border="1" cellspacing='0px'>
        <tr>
            <td>ID</td>
            <td>Mã nhân viên</td>
            <td>Họ tên</td>
            <td>Chức vụ</td>
            <td>Năm sinh</td>
            <td>ID phòng ban</td>
            <td>ID loại khen thưởng</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        @foreach ($showallemployees as $values)
            <tr>
                <td>{{ $values['id'] }}</td>
                <td>{{ $values['manhanvien'] }}</td>
                <td>{{ $values['hoten'] }}</td>
                <td>{{ $values['chucvu'] }}</td>
                <td>{{ $values['namsinh'] }}</td>
                <td>{{ $values['id_phongban'] }}</td>
                <td>{{ $values['id_loaikhenthuong'] }}</td>
                <td><a href="{{ URL::to('/getformeditemployees/'.$values['id']) }}">Edit</a></td>
                <td><a href="{{ URL::to('/getdeleteemployees/'.$values['id']) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>