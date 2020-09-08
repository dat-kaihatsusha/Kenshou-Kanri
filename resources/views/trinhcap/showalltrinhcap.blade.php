<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show all trình cấp</title>
</head>
<body>
    <h2>Hi guys, welcome to Show all trình cấp!</h2>


    <table border="1" cellspacing='0px'>
        <tr>
            <td>ID</td>
            <td>Tên trình cấp</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        @foreach ($showalltrinhcap as $values)
            <tr>
                <td>{{$values['id']}}</td>
                <td>{{$values['tentrinhcap']}}</td>
                <td><a href="{{ URL::to('/getformedittrinhcap/'.$values['id']) }}">Edit</a></td>
                <td><a href="{{ URL::to('/getdeletetrinhcap/'.$values['id']) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>