<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhap ten">
    <input type="text" name="email" placeholder="Nhap Email">
    <input type="password" name="password" placeholder="Nhap password">
    <button type="submit">Add New</button>
    <a href="{{ route("users.index") }}">Tro lai</a>
</form>
