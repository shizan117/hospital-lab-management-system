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


{{--                Copy Permissions From Another User--}}
                <div class="row align-items-center mb-4">
                    <div class="col-md-6">
                        <h4 class="text-primary mb-0">Assign Roles to: {{ $user->name }}</h4>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <label for="copy_from_user" class="form-label fw-semibold text-primary mb-1">

                        </label>
                        <select id="copy_from_user" class="form-select shadow-sm border border-primary-subtle">
                            <option value="">🔁 Copy Permissions From Another User</option>
                            @foreach($allUsers as $templateUser)
                                <option value="{{ $templateUser->id }}"
                                        data-roles='@json(json_decode($templateUser->role_ids ?? "[]"))'>
                                    {{ $templateUser->name }} ({{ $templateUser->email }})
                                </option>
                            @endforeach
                        </select>
                    </div>
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
    <script>
        document.getElementById('copy_from_user').addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const roles = JSON.parse(selectedOption.getAttribute('data-roles') || '[]');

            // Uncheck all checkboxes first
            document.querySelectorAll('input[name="role_ids[]"]').forEach(cb => {
                cb.checked = false;
            });

            // Check only those roles in the selected user's role list
            roles.forEach(roleId => {
                const checkbox = document.getElementById(`role_${roleId}`);
                if (checkbox) checkbox.checked = true;
            });
        });
    </script>


@endpush
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


