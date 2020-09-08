<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit danh hiệu thi đua</title>
</head>
<body>
    <h2>What's the popin guys!</h2>
    <h3>Welcome to editdanhhieuthidua.blade.php</h3>
    <form action="{{ URL::to('/updatedanhhieuthidua/'.$editdanhhieuthidua->id) }}" method="POST">
        @csrf
        <input type="number" value="{{ $editdanhhieuthidua->id }}">                      <br>
        <input type="text" name="tendanhhieu" value="{{ $editdanhhieuthidua->tendanhhieu }}">    <br>
        <input type="text" name="namdatdanhhieu" value="{{ $editdanhhieuthidua->namdatdanhhieu }}">  <br>
        <input type="text" name="masoquyetdinh" value="{{ $editdanhhieuthidua->masoquyetdinh }}">      <br>
        <input type="text" name="noicap" value="{{ $editdanhhieuthidua->noicap }}">      <br>
        <input type="text" name="id_nhanvien" value="{{ $editdanhhieuthidua->id_nhanvien }}">      <br>
        <input type="text" name="ghichu" value="{{ $editdanhhieuthidua->ghichu }}">      <br>
        <input type="submit" value="Update">                 <br>
    </form>
</body>
</html>