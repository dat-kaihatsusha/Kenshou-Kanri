<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hi guys, welcome to show all đơn vị</h2>
    <table border="1px" cellspacing = '0px'>
        <tr>
            <td>ID</td>
            <td>Mã đơn vị</td>
            <td>Tên đơn vị</td>
            <td>Địa chỉ</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>

        @foreach($showalldonvi as $key => $value) 
            <tr>
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['madonvi'] }}</td>
                <td>{{ $value['tendonvi'] }}</td>
                <td>{{ $value['diachi'] }}</td>
                <td><a href="{{ URL::to('/geteditdonvi/'.$value['id']) }}">Edit</a></td>
                <td><a href="{{ URL::to('/getdeletedonvi/'.$value['id']) }}">Delete</a></td>
            </tr>
        
        @endforeach
        
    </table>
</body>
</html>