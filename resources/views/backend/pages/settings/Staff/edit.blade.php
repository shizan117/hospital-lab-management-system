@extends('backend.layouts.master')
@section('title', 'Edit Staff')

@section('content')
    <div class="pc-container p-4">
        <h4 class="text-primary mb-3">Edit Staff: {{ $user->name }}</h4>

        <form action="{{ route('admin.staff.update', $user->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email <span class="text-danger">*</span></label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>New Password <small>(leave blank to keep existing)</small></label>
                <input type="password" name="password" class="form-control">
            </div>
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('admin.staff.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
