<!-- resources/views/users/show.blade.php -->

    <h1>Chi tiết người dùng</h1>
    <p>Tên: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Age: {{ $user->age }}</p>
    <p>Gender: {{ $user->gender == 1 ? 'Nam' : 'Nu' }}</p>
    <button><a href="{{ route('users.edit', $user->id) }}">Sửa</a></button>
    <a href="{{ route('users.index') }}">Quay lại danh sách</a>

