@extends('admin.layouts.layout')
@section('content')

<div class="container">
    <h4 class="text-secondary">CHỈNH SỬA NGƯỜI DÙNG</h4>
    
    <form action="{{ route('admin.users.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Vai trò</label>
            <select class="form-select" id="role" name="role" required>
                <option value="admin" {{ (isset($user) && $user->role == 'admin') ? 'selected' : '' }}>Quản trị viên</option>
                <option value="user" {{ (isset($user) && $user->role == 'user') ? 'selected' : '' }}>Người dùng</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>

@endsection
