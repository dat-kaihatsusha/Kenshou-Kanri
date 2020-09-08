<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ URL::to('/saveemployees') }}" method="post">
        @csrf
        <input type="text" name="manhanvien" placeholder="Mã nhân viên"><br>
        <input type="text" name="hoten" placeholder="Họ tên"><br>
        <input type="text" name="chucvu" placeholder="Chức vụ"><br>
        <input type="text" name="namsinh" placeholder="Năm sinh"><br>
        <input type="number" name="id_phongban" placeholder="ID phòng ban"><br>
        <input type="number" name="id_loaikhenthuong" placeholder="ID loại khen thưởng"><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>