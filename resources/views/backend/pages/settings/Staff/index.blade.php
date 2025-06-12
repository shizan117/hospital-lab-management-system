@extends('backend.layouts.master')
@section('title', 'Manage Staff')

@section('content')
    <div class="pc-container p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-primary">Staff List</h4>
            <a href="{{ route('admin.staff.create') }}" class="btn btn-success">➕ Add Staff</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->user_type }}</td>
                            <td>
                                <a href="{{ route('admin.staff.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.staff.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this staff?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
