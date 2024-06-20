<!-- resources/views/users/edit.blade.php -->

    <h1>Sửa người dùng</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Tên:</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div>
           <label for="age">Age:</label>
           <input type="text" name="age" id="age" value="{{ $user->age}}">
        </div>
        <div>
            <label for="gender">Gioi tinh:</label>
            <select name="gender" id="gender">
                <option value="1" {{ $user->gender == 1 ? 'selected' : '' }}>Nam</option>
                <option value="2" {{ $user->gender == 2 ? 'selected' : '' }}>Nu</option>
            </select>
        </div>
        <button type="submit">Cập nhật</button>
        <a href="{{ route('users.index') }}">Quay lai</a>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    </form>

