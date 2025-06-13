@extends('backend.layouts.master')
@section('title', 'Edit Doctor')

@section('content')
    <div class="pc-container" style="padding: 20px;">
        <div class="pc-content">
            <div class="page-header" style="margin-bottom: 20px;">
                <div style="display: flex; justify-content: center; align-items: center; gap: 80px; flex-wrap: wrap;">
                    <a href="{{ route('admin.doctors') }}"
                       style="text-decoration: none; color: #6c757d; border: 1px solid #6c757d; padding: 5px 10px; border-radius: 4px; font-size: 14px;">
                        ← Back to List
                    </a>

                    <h4 style="color: #007bff; font-weight: bold; margin: 0;">Edit Doctor Profile</h4>
                </div>
            </div>


            <div style="border: 0; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div>

                </div>
                <div style="padding: 20px;">
                    @if ($errors->any())
                        <div style="background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; padding: 10px; margin-bottom: 15px; border-radius: 4px; position: relative;">
                            <ul style="margin: 0; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" style="position: absolute; top: 10px; right: 10px; width: 20px; height: 20px; border: none; background: transparent; font-size: 16px; line-height: 1; cursor: pointer;" data-bs-dismiss="alert" aria-label="Close">×</button>
                        </div>
                    @endif

                    @if (session('success'))
                        <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; margin-bottom: 15px; border-radius: 4px; position: relative;">
                            {{ session('success') }}
                            <button type="button" style="position: absolute; top: 10px; right: 10px; width: 20px; height: 20px; border: none; background: transparent; font-size: 16px; line-height: 1; cursor: pointer;" data-bs-dismiss="alert" aria-label="Close">×</button>
                        </div>
                    @endif

                    <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')

                        <div style="display: flex; align-items: flex-start; gap: 20px;">
                            <!-- Left Side (Profile Image, Name, Category) -->
                            <div style="flex: 0 0 200px; text-align: center;">
                                <div style="margin-bottom: 15px;">
                                    <label style="font-weight: 600; color: #6c757d;">Profile Image</label>
                                    @if($doctor->image)
                                        <img id="imagePreview" src="{{ asset('frontend_assets/img/' . $doctor->image) }}" alt="Doctor Image" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                    @else
                                        <div style="width: 200px; height: 200px; border-radius: 50%; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d;">
                                            No Image
                                        </div>
                                    @endif
                                </div>
                                <!-- Name -->
                                <div style="margin-bottom: 15px;">
                                    <label style="font-weight: 600; color: #6c757d;">Name <span style="color: #dc3545;">*</span></label>
                                    <input type="text" name="name" value="{{ old('name', $doctor->name) }}" style="width: 100%; padding: 8px; border: 1px solid #007bff; border-radius: 4px; @error('name') border-color: #dc3545; @enderror" required>
                                    @error('name')
                                    <div style="color: #dc3545; font-size: 12px;">{{ $message }}</div>
                                    @endif
                                </div>
                                <!-- Category -->
                                <div>
                                    <label style="font-weight: 600; color: #6c757d;">Category <span style="color: #dc3545;">*</span></label>
                                    <select name="category_id" style="width: 100%; padding: 8px; border: 1px solid #007bff; border-radius: 4px; @error('category_id') border-color: #dc3545; @enderror" required>
                                        <option value="">-- Select Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('doctors_category_id', $doctor->doctors_category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div style="color: #dc3545; font-size: 12px;">{{ $message }}</div>
                                    @endif
                                </div>
                            </div>

                            <!-- Form Fields (Right Side) -->
                            <div style="flex: 1;">
                                <div style="display: flex; flex-direction: column; gap: 15px;">
                                    <!-- Specialty -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Specialty <span style="color: #dc3545;">*</span></label>
                                        <input type="text" name="specialty" value="{{ old('specialty', $doctor->specialty) }}" style="width: 100%; padding: 8px; border: 1px solid #007bff; border-radius: 4px; @error('specialty') border-color: #dc3545; @enderror" required>
                                        @error('specialty')
                                        <div style="color: #dc3545; font-size: 12px;">{{ $message }}</div>
                                        @endif
                                    </div>

                                    <!-- Qualification -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Qualification <span style="color: #dc3545;">*</span></label>
                                        <input type="text" name="qualification" value="{{ old('qualification', $doctor->qualification) }}" style="width: 100%; padding: 8px; border: 1px solid #007bff; border-radius: 4px; @error('qualification') border-color: #dc3545; @enderror" required>
                                        @error('qualification')
                                        <div style="color: #dc3545; font-size: 12px;">{{ $message }}</div>
                                        @endif
                                    </div>



                                    <!-- Description -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Description <span style="color: #dc3545;">*</span></label>
                                        <textarea name="description" style="width: 100%; padding: 8px; border: 1px solid #007bff; border-radius: 4px; @error('description') border-color: #dc3545; @enderror" rows="4" required>{{ old('description', $doctor->description) }}</textarea>
                                        @error('description')
                                        <div style="color: #dc3545; font-size: 12px;">{{ $message }}</div>
                                        @endif
                                    </div>

                                    <!-- Change Image -->
                                    <div>
                                        <label style="font-weight: 600; color: #6c757d;">Change Image</label>
                                        <input type="file" name="image" style="width: 100%; padding: 8px; border: 1px solid #007bff; border-radius: 4px; @error('image') border-color: #dc3545; @enderror">
                                        @error('image')
                                        <div style="color: #dc3545; font-size: 12px;">{{ $message }}</div>
                                        @endif
                                        <small style="color: #6c757d; font-size: 12px;">Leave blank to keep the current image.</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; justify-content: space-between; margin-top: 20px; padding-top: 20px; border-top: 1px solid #dee2e6;">
                            <div>
                                <a href="{{ route('admin.doctors') }}" style="text-decoration: none; color: white; background-color: #dc3545; padding: 10px 20px; border-radius: 4px; margin-right: 10px;">Cancel</a>
                                <button type="submit" style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Update Doctor</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });

            // Image preview handler
            const imageInput = document.querySelector('input[name="image"]');
            const imagePreview = document.querySelector('#imagePreview');

            if (imageInput && imagePreview) {
                imageInput.addEventListener('change', function(event) {
                    const [file] = imageInput.files;
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = e => {
                            imagePreview.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        })();
    </script>

@endsection
