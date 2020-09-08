<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show all danh hiệu thi đua</title>
</head>
<body>
    <h2>What's popin guys!</h2>
    <h3>Welcome to showalldanhhieuthidua.blade.php</h3>
    <table border="1px" cellspacing='0px'>
        <tr>
            <td>ID</td>
            <td>Tên danh hiệu</td>
            <td>Năm đạt danh hiệu</td>
            <td>Mã số quyết định</td>
            <td>Nơi cấp</td>
            <td>id_nhân viên</td>
            <td>Ghi chú</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        @foreach ($showalldanhhieuthidua as $values)
            <tr>
                <td>{{ $values['id'] }}</td>
                <td>{{ $values['tendanhhieu'] }}</td>
                <td>{{ $values['namdatdanhhieu'] }}</td>
                <td>{{ $values['masoquyetdinh'] }}</td>
                <td>{{ $values['noicap'] }}</td>
                <td>{{ $values['id_nhanvien'] }}</td>
                <td>{{ $values['ghichu'] }}</td>
                <td><a href="{{ URL::to('/getformeditdanhhieuthidua/'.$values['id']) }}">Edit</a></td>
                <td><a href="{{ URL::to('/getdeletedanhhieuthidua/'.$values['id']) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>