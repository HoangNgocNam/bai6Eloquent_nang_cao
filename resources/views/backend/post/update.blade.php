<form action="" method="post">
    @csrf
    <input type="text" name="title" placeholder="Tiêu Đề" value="{{ $post -> title }}">
    <input type="text" name="content" placeholder="Nội Dung" value="{{ $post -> content }}">
    <input type="text" name="user_id" placeholder="ID" value="1">
    <hr>
    <h3>Danh sách thể loại</h3>
    @foreach($categories as $category)
        <input type="checkbox" {{$post->checkCategory($category->id) ? "checked":"" }} name="category[]"
               value="{{ $category->id }}"> {{ $category->name }} <br>
    @endforeach

    <button type="submit">Sửa Lại</button>
    <a href="{{ route("posts.index") }}">Quay lai</a>
</form>

