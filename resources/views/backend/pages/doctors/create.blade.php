@extends('backend.layouts.master')
@section('title', 'Add Doctor')

@section('content')
    <div class="pc-container" style="padding: 20px;">
        <div class="pc-content">
            <div class="page-header" style="margin-bottom: 20px;">
                <div style="display: flex; justify-content: center; align-items: center; gap: 80px; flex-wrap: wrap;">
                    <a href="{{ route('admin.doctors') }}"
                       style="text-decoration: none; color: #6c757d; border: 1px solid #6c757d; padding: 5px 10px; border-radius: 4px; font-size: 14px;">
                        ← Back to List
                    </a>
                    <h4 style="color: #28a745; font-weight: bold; margin: 0;">Add New Doctor</h4>
                </div>
            </div>

            <div style="border: 0; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div style="padding: 20px;">
                    @if ($errors->any())
                        <div style="background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; padding: 10px; margin-bottom: 15px; border-radius: 4px;">
                            <ul style="margin: 0; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div style="display: flex; align-items: flex-start; gap: 20px;">
                            <!-- Left: Image + Name + Category -->
                            <div style="flex: 0 0 200px; text-align: center;">
                                <!-- Image Preview -->
                                <div style="margin-bottom: 15px;">
                                    <label style="font-weight: 600; color: #6c757d;">Profile Image</label>
                                    <div id="imageContainer" style="width: 200px; height: 200px; border-radius: 50%; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d;">
                                        No Image
                                    </div>
                                </div>

                                <!-- Name -->
                                <div style="margin-bottom: 15px;">
                                    <label style="font-weight: 600; color: #6c757d;">Name <span style="color: #dc3545;">*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}" style="width: 100%; padding: 8px; border: 1px solid #28a745; border-radius: 4px;" required>
                                </div>

                                <!-- Category -->
                                <div>
                                    <label style="font-weight: 600; color: #6c757d;">Category <span style="color: #dc3545;">*</span></label>
                                    <select name="doctors_category_id" style="width: 100%; padding: 8px; border: 1px solid #28a745; border-radius: 4px;" required>
                                        <option value="">-- Select Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('doctors_category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Right: Fields -->
                            <div style="flex: 1;">
                                <div style="display: flex; flex-direction: column; gap: 15px;">
                                    <!-- Specialty -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Specialty <span style="color: #dc3545;">*</span></label>
                                        <input type="text" name="specialty" value="{{ old('specialty') }}" style="width: 100%; padding: 8px; border: 1px solid #28a745; border-radius: 4px;" required>
                                    </div>

                                    <!-- Qualification -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Qualification <span style="color: #dc3545;">*</span></label>
                                        <input type="text" name="qualification" value="{{ old('qualification') }}" style="width: 100%; padding: 8px; border: 1px solid #28a745; border-radius: 4px;" required>
                                    </div>

                                    <!-- Experience -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Experience (years) <span style="color: #dc3545;">*</span></label>
                                        <input type="number" name="experience" value="{{ old('experience') }}" style="width: 100%; padding: 8px; border: 1px solid #28a745; border-radius: 4px;" required min="0">
                                    </div>

                                    <!-- Description -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Description <span style="color: #dc3545;">*</span></label>
                                        <textarea name="description" rows="4" style="width: 100%; padding: 8px; border: 1px solid #28a745; border-radius: 4px;" required>{{ old('description') }}</textarea>
                                    </div>

                                    <!-- Image Upload -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Upload Image</label>
                                        <input type="file" name="image" id="imageUpload" style="width: 100%; padding: 8px; border: 1px solid #28a745; border-radius: 4px;">
                                        <small style="color: #6c757d; font-size: 12px;">Only image formats allowed. Recommended square image.</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; justify-content: space-between; margin-top: 20px; padding-top: 20px; border-top: 1px solid #dee2e6;">
                            <a href="{{ route('admin.doctors') }}" style="text-decoration: none; color: white; background-color: #dc3545; padding: 10px 20px; border-radius: 4px;">Cancel</a>
                            <button type="submit" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Save Doctor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageUpload = document.getElementById('imageUpload');
            const imageContainer = document.getElementById('imageContainer');

            imageUpload.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imageContainer.innerHTML = `<img src="${e.target.result}" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">`;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection
