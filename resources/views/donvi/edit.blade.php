<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Đây là trang Edit đơn vị</h2>
    <form action="{{ URL::to('/updatedonvi/'.$editdonvi->id) }}" method="POST">
        @csrf
        <input type="number" value="{{ $editdonvi->id }}">                      <br>
        <input type="text" name="madonvi" value="{{ $editdonvi->madonvi }}">    <br>
        <input type="text" name="tendonvi" value="{{ $editdonvi->tendonvi }}">  <br>
        <input type="text" name="diachi" value="{{ $editdonvi->diachi }}">      <br>
        <input type="submit" value="Update">                 <br>
    </form>
</body>
</html>