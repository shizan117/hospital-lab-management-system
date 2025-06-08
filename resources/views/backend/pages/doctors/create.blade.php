@extends('backend.layouts.master')
@section('title', 'Add Doctor')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <h4>Add New Doctor</h4>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Category</label>
                            <select name="doctors_category_id" class="form-control">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group mb-3">
                            <label>Specialty</label>
                            <input type="text" name="specialty" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Qualification</label>
                            <input type="text" name="qualification" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Experience (in years)</label>
                            <input type="number" name="experience" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <button type="submit" class="btn btn-success">Save Doctor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
