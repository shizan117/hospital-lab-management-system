@extends('backend.layouts.master')
@section('title', 'Add Staff')

@section('content')
    <div class="pc-container p-4">
        <h4 class="text-primary mb-3">Add New Staff</h4>

        <form action="{{ route('admin.staff.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-success">Save</button>
            <a href="{{ route('admin.staff.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
