@extends('backend.layouts.master')
@section('title', 'Admin Settings')

@section('content')
    <div class="pc-container" style="padding: 20px;">
        <div class="pc-content">

            <div class="page-header mb-4">
                <h4 style="color: #007bff; font-weight: bold;">Admin Settings</h4>
            </div>

            {{-- Settings Dashboard Cards --}}
            <div class="row">
                {{-- Setup Role Permission Card --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">Setup Role Permission</h5>
                            <p class="card-text text-muted">
                                Assign roles and permissions to users.
                            </p>
                            <a href="{{ route('admin.user.index') }}" class="btn btn-primary mt-auto">
                                Manage Role Permissions
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Setup Staff Card --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">Add New Staff</h5>
                            <p class="card-text text-muted">
                                Create and manage staff accounts.
                            </p>
                            <a href="{{ route('admin.staff.index') }}" class="btn btn-success mt-auto">
                                Manage Staff
                            </a>
                        </div>
                    </div>
                </div>

                {{-- More cards like Website Settings, User Setup, etc. will go here --}}
            </div>

        </div>
    </div>
@endsection
