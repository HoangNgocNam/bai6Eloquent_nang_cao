<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhap ten" value="{{ $user->name }}">
    <input type="text" name="email" placeholder="Nhap Email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Nhap password" value="{{ $user->password }}">
    <button type="submit">Cập Nhật</button>
    <a href="{{ route("users.index") }}">Tro lai</a>
</form>
