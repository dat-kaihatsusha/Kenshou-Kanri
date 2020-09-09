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
    <form action="{{ URL::to('/timkiememployees') }}" method="POST">
        @csrf
        <input type="text" name="hoten" placeholder="Nhập tên nhân viên tìm kiếm"><br>
        <input type="submit" name="Search">
    </form>


    @if (isset($getdanhhiethiduacuanhanvien))
    <table border="1" cellspacing='0px'>
        <tr>
            <td>Tên danh hiệu</td>
            <td>Năm đạt danh hiệu</td>
            <td>Mã số quyết định</td>
            <td>Nơi cấp</td>
            <td>ID nhân viên</td>
            <td>Ghi chú</td>
        </tr>
        <tr>
            <td>{{ $getdanhhiethiduacuanhanvien[0] }}</td>
            <td>{{ $getdanhhiethiduacuanhanvien[1] }}</td>
            <td>{{ $getdanhhiethiduacuanhanvien[2] }}</td>
            <td>{{ $getdanhhiethiduacuanhanvien[3] }}</td>
            <td>{{ $getdanhhiethiduacuanhanvien[4] }}</td>
            <td>{{ $getdanhhiethiduacuanhanvien[5] }}</td>
        </tr>
    </table>
    @endif
</body>
</html>