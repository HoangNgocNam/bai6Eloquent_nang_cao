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
<table border="1px">
    <a href="{{ route("posts.create") }}"> Thêm Mới</a>
    <thead>
    <tr>
        <th>Id</th>
        <th>Tiêu Để</th>
        <th>Nội Dung</th>
        <th>Thể Loại</th>
        <th>User</th>
        <th colspan="2">Action</th>

    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                @if(count($post->categories) > 0)
                    @foreach($post->categories as $category)
                        <p>{{ $category->name }}</p>
                    @endforeach
                @else
                    <p>Chưa Phân loại</p>
                @endif
            </td>
            <td>{{ $post->user->name }}</td>
            <td><a href="{{ route("posts.update", $post->id) }}">Update</a></td>
            <td><a onclick="return confirm('Mày chắc chưa???')" href="{{ route("posts.delete", $post->id) }}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
