<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit trình cấp</title>
</head>
<body>
    <form action="{{ URL::to('/updatetrinhcap/'.$edittrinhcap->id) }}" method="POST">
        @csrf
        <input type="number" value="{{ $edittrinhcap->id }}"><br>
        <input type="text" name="tentrinhcap" value="{{ $edittrinhcap->tentrinhcap }}"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>