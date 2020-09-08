<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>What's the popin guys!</h2>
    <h3>Welcome to the danhhieuthidua.blade.php</h3>
    <form action="{{ URL::to('/savedanhhieuthidua') }}" method="POST">
        @csrf
        <input type="text"      name="tendanhhieu"      placeholder="Tên danh hiệu"><br>
        <input type="text"      name="namdatdanhhieu"   placeholder="Năm đạt danh hiệu"><br>
        <input type="text"      name="masoquyetdinh"    placeholder="Mã số quyết định"><br>
        <input type="text"      name="noicap"           placeholder="Nơi cấp"><br>
        <input type="number"    name="id_nhanvien"      placeholder="ID nhân viên"><br>
        <input type="text"      name="ghichu"           placeholder="Ghi chú"><br>
        <input type="submit"    value="Save">
    </form>
</body>
</html>