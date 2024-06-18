<!-- resources/views/users/create.blade.php -->

    <h1>Tạo người dùng mới</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Tên:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email')}}">
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" value="{{ old('password')}}">
            @error('password')
            <div>{{ $message }}</div>
            @enderror
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" value="{{ old('confirm_password')}}">
            @error('confirm_password')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="age">Tuổi:</label>
            <input type="text" name="age" id="age" min=0 value="{{ old('age')}}">
            @error('age')
            <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="gender">Giới tính:</label>
            <select name="gender" id="gender">
        <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Nam</option>
        <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Nữ</option>
        </select>
        </div>
        <button type="submit">Tạo</button>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    </form>

    
   