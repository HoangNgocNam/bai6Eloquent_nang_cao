<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <input type="text" name="title" placeholder="Tiêu Đề">
    <input type="text" name="content" placeholder="Nội Dung">
    <input type="text" name="user_id" placeholder="ID" value="1">
    <hr>
    <h3>Danh sách thể loại</h3>
    @foreach($categories as $category)
    <input type="checkbox" name="category[]" value="{{ $category->id }}"> {{ $category->name }} <br>
    @endforeach

    <button type="submit">Add New</button>
    <a href="{{ route("posts.index") }}">Quay lai</a>
</form>
</body>
</html>
