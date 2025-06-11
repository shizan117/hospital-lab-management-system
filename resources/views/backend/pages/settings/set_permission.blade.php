@extends('backend.layouts.master')
@section('title', 'Assign Permissions to User')

@section('content')
    <div class="pc-container" style="padding: 20px;">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="pc-content">
            <div class="page-header mb-4">
                <h4 class="text-primary">Assign Roles to: {{ $user->name }}</h4>
            </div>

            <form method="POST" action="{{ route('admin.role.permission.save.for.user', $user->id) }}">
                @csrf
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            @foreach($roles as $role)
                                @php
                                    $assigned = in_array($role->id, json_decode($user->role_ids ?? '[]', true));
                                @endphp
                                <div class="col-md-4 mb-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="role_ids[]" id="role_{{ $role->id }}" value="{{ $role->id }}" {{ $assigned ? 'checked' : '' }}>
                                        <label class="form-check-label" for="role_{{ $role->id }}">{{ ucfirst($role->name) }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">Save Permissions</button>
                            <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Back to Users</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        setTimeout(() => {
            const successAlert = document.getElementById('success-alert');
            const errorAlert = document.getElementById('error-alert');

            if (successAlert) {
                // Start fade out by removing "show" class (Bootstrap does fade out)
                successAlert.classList.remove('show');

                // After 150ms (Bootstrap fade duration), remove from DOM
                setTimeout(() => successAlert.remove(), 100);
            }

            if (errorAlert) {
                errorAlert.classList.remove('show');
                setTimeout(() => errorAlert.remove(), 120);
            }
        }, 5000);
    </script>
@endpush


