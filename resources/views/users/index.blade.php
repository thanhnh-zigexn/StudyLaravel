<!-- resources/views/users/index.blade.php -->


    <h1>Danh sách người dùng</h1>
    <a href="{{ route('users.create') }}">Tạo người dùng mới</a>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} - {{ $user->email }}
                <a href="{{ route('users.show', $user->id) }}">Xem</a>
                <a href="{{ route('users.edit', $user->id) }}">Sửa</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Xóa</button>
                </form>
            </li>
        @endforeach
    </ul>
{{ $users->links('vendor.pagination.custom') }}



