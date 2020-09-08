<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit employees</title>
</head>
<body>
    <h2>What's popin guys, welcome to editemloyees.blade.php</h2>
    <form action="{{ URL::to('/updateemployees/'.$editemployees->id) }}" method="POST">
        @csrf
        <input type="number" name="id" value="{{ $editemployees->id }}"><br>
        <input type="text" name="manhanvien" value="{{ $editemployees->manhanvien }}"><br>
        <input type="text" name="hoten" value="{{ $editemployees->hoten }}"><br>
        <input type="text" name="chucvu" value="{{ $editemployees->chucvu }}"><br>
        <input type="number" name="namsinh" value="{{ $editemployees->namsinh }}"><br>
        <input type="number" name="id_phongban" value="{{ $editemployees->id_phongban }}"><br>
        <input type="number" name="id_loaikhenthuong" value="{{ $editemployees->id_loaikhenthuong }}"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>