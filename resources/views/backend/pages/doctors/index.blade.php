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

                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Specialty</th>
                            <th>Qualification</th>
                            <th>Experience</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>
                                    @if($doctor->image)
                                        <img src="{{ asset('frontend_assets/img/' . $doctor->image) }}"
                                             alt="Doctor Image"
                                             style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                    @else
                                        <span style="color: #888;">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->DoctorsCategory?->name ?? 'N/A' }}</td>
                                <td>{{ $doctor->specialty }}</td>
                                <td>{{ $doctor->qualification }}</td>
                                <td>{{ $doctor->experience }} yrs</td>
                                <td>
                                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-sm btn-info">Edit</a>

                                    <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
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
@endsection
