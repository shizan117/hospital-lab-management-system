@extends('backend.layouts.master')
@section('title', 'Select User')

@section('content')
    <div class="pc-container" style="padding: 20px;">
        <div class="pc-content">
            <div class="page-header mb-4">
                <h4 class="text-primary">Select a User to Assign Permissions</h4>
            </div>

            <div class="row">
                @foreach($users as $user)
                    <div class="col-md-4 mb-3">
                        <div class="card shadow-sm h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">{{ $user->name }}</h5>
                                <p class="text-muted">{{ $user->email }}</p>
                                <a href="{{ route('admin.role.permission.for.user', $user->id) }}" class="btn btn-outline-primary btn-sm">
                                    Assign Permissions
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
