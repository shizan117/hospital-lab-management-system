@extends('backend.layouts.master')
@section('title', 'Doctor List')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header d-flex justify-content-between align-items-center">
                <h4>Doctors List</h4>
                <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary">Add Doctor</a>
            </div>

            <div class="card">
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Doctor</th>
                                <th>Category</th>
                                <th>Specialty</th>
                                <th class="mobile-zero-padding">Qualification</th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($doctors as $doctor)
                                <tr class="{{ $doctor->status ? '' : 'table-danger' }}">
                                    <td>
                                        <div class="d-flex align-items-center flex-column flex-md-row text-center text-md-start">
                                            @if($doctor->image)
                                                <img src="{{ asset('frontend_assets/img/' . $doctor->image) }}"
                                                     alt="Doctor Image"
                                                     class="me-md-2 mb-2 mb-md-0"
                                                     style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                                <span class="fw-bold">{{ $doctor->name }}</span>

                                        </div>
                                    </td>

                                    <td>{{ $doctor->Category?->name ?? 'N/A' }}</td>
                                    <td>{{ $doctor->specialty }}</td>
                                    <td class="text-truncate" style="max-width: 1px; padding: 0px" title="{{ $doctor->qualification }}">
                                        {{ $doctor->qualification }}
                                    </td>




                                    <td>
                                        <a href="{{ route('admin.doctors.edit', $doctor->id) }}"
                                           class="btn btn-info btn-md me-1 px-2 d-block d-md-inline-block mb-2 mb-md-0">
                                            Edit
                                        </a>

                                        <form action="{{ route('admin.doctors.toggleStatus', $doctor->id) }}" method="POST"
                                              style="display:inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                    class="btn btn-md {{ $doctor->status ? 'btn-success' : 'btn-secondary' }} me-1 px-2 d-block d-md-inline-block mb-2 mb-md-0">
                                                {{ $doctor->status ? 'Active' : 'Inactive' }}
                                            </button>
                                        </form>

                                        <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST"
                                              style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-danger btn-md px-2 d-block d-md-inline-block mt-2  mb-md-0"
                                                    onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection


@section('style')
    <style>
        @media (max-width: 768px) {
            .mobile-zero-padding {
                padding: 0 !important;
            }
        }
    </style>
@endsection
