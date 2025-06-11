@extends('frontend.layouts.master')

@section('title')
    Doctors Page
@endsection

@section('content')
    <style>
        .doctor-tabs {
            position: sticky;
            top: 100px;
        }
        .doctor-tabs .nav-link {
            text-align: left;
            padding: 12px 20px;
            margin-bottom: 5px;
            border-radius: 5px;
            color: var(--dark-color);
            border-left: 3px solid transparent;
        }
        .doctor-tabs .nav-link:hover {
            background-color: rgba(13, 110, 253, 0.1);
        }
        .doctor-tabs .nav-link.active {
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
            border-left: 3px solid var(--primary-color);
            font-weight: 600;
        }
        .doctor-card {
            transition: all 0.3s ease;
        }
        .doctor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .specialty-badge {
            background-color: var(--primary-color);
            color: white;
        }
        .appointment-cta-bounce {
            animation: bounceInfinite 2.5s infinite;
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 123, 255, 0.2);
            transition: transform 0.3s ease;
        }

        @keyframes bounceInfinite {
            0%, 100% {
                transform: translateY(0);
            }
            30% {
                transform: translateY(-10px);
            }
            50% {
                transform: translateY(0);
            }
            70% {
                transform: translateY(-5px);
            }
        }
    </style>

    <!-- Doctors Section -->
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-1 order-2">
                    <div class="mb-4">
                        <h2 class="section-title text-start">Our Medical Team</h2>
                        <p class="text-muted">Select a category to filter doctors by specialty</p>
                    </div>

                    <!-- All Doctors (Default Tab) -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all-doctors">
                            <div class="row g-3">
                                <!-- Dynamic Doctor Cards -->
                                @foreach ($doctors as $doctor)
                                    <div class="col-md-6 col-lg-4" data-category="{{ $doctor->category ? strtolower(str_replace(' ', '-', $doctor->category->name)) : 'uncategorized' }}">
                                        <div class="card doctor-card h-100 border rounded shadow-sm" style="font-size: 14px;">
                                            <img src="{{ asset('frontend_assets/img/' . ($doctor->image ?: 'doctor1.jpg')) }}" class="card-img-top doctor-img" alt="{{ $doctor->name }}" style=" object-fit: cover;">
                                            <div class="card-body py-2 px-3">
                                                <h6 class="card-title mb-1">
                                                    <strong>{{ $doctor->name }}</strong>
{{--                                                    <span class="badge bg-success ms-2" style="font-size: 11px;">{{ $doctor->experience }} yrs exp</span>--}}
{{--                                              --}}
                                                </h6>
                                                <span class="badge specialty-badge mb-1 d-block" style="font-size: 12px; display: inline-block; max-width: 100%; word-break: break-word; white-space: normal;">{{ $doctor->specialty }}</span>
                                                <p class="card-text mb-1" style="font-size: 13px;">{{ $doctor->qualification }}</p>
                                                <p class="card-text mb-2" style="font-size: 13px; font-weight: 900;">{{ $doctor->description }}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="#" class="btn btn-sm btn-outline-primary px-2 py-1" style="font-size: 12px;">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div> <!-- /.row -->
                        </div> <!-- /.tab-pane -->
                    </div> <!-- /.tab-content -->
                </div>

                <!-- Doctor Categories Sidebar -->
                <div class="col-lg-3 order-lg-2 order-1 mb-4 mb-lg-0">
                    <div class="doctor-tabs">
                        <div class="card shadow-sm">
                            <!-- Appointment CTA -->
                            <div class="card shadow-sm">
                                <div class="card-body text-center appointment-cta-bounce">
                                    <i class="fas fa-calendar-check fa-3x text-primary mb-3"></i>
                                    <h5 class="mb-1">Book an Appointment</h5>
                                    <p class="text-muted small mb-3">Consult with our specialists</p>
                                    <a href="{{ route('contact') }}#appointment" class="btn btn-primary w-100 fw-bold">Book Now</a>
                                </div>
                            </div>

                            <div class="card-header bg-white">
                                <h5 class="mb-0">Doctor Categories</h5>
                            </div>
                            <div class="card-body p-0">
                                <ul class="row g-2 px-3 py-3" id="doctorCategories" style="list-style: none; margin: 0;">
                                    <li class="col-6 col-md-12">
                                        <a class="nav-link active border rounded text-center py-2" href="#" data-filter="all">All Doctors</a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li class="col-6 col-md-12">
                                            <a class="nav-link border rounded text-center py-2" href="#" data-filter="{{ strtolower(str_replace(' ', '-', $category->name)) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('style')

    <style>
        .doctor-tabs {
            position: sticky;
            top: 100px;
        }
        .doctor-tabs .nav-link {
            text-align: left;
            padding: 12px 20px;
            margin-bottom: 5px;
            border-radius: 5px;
            color: var(--dark-color);
            border-left: 3px solid transparent;
        }
        .doctor-tabs .nav-link:hover {
            background-color: rgba(13, 110, 253, 0.1);
        }
        .doctor-tabs .nav-link.active {
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
            border-left: 3px solid var(--primary-color);
            font-weight: 600;
        }
        .doctor-card {
            transition: all 0.3s ease;
        }
        .doctor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .specialty-badge {
            background-color: var(--primary-color);
            color: white;
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: normal; /* Allow text to wrap */
            word-break: break-word; /* Break long words */
            max-width: 100%; /* Ensure it stays within the card */
            margin-bottom: 0.5rem; /* Space below the badge */
        }
        .appointment-cta-bounce {
            animation: bounceInfinite 2.5s infinite;
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 123, 255, 0.2);
            transition: transform 0.3s ease;
        }

        @keyframes bounceInfinite {
            0%, 100% { transform: translateY(0); }
            30% { transform: translateY(-10px); }
            50% { transform: translateY(0); }
            70% { transform: translateY(-5px); }
        }
    </style>
@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryLinks = document.querySelectorAll('#doctorCategories .nav-link');

            categoryLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Update active tab
                    categoryLinks.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');

                    // Get filter value
                    const filter = this.getAttribute('data-filter');

                    // Filter doctors
                    const doctorCards = document.querySelectorAll('[data-category]');
                    doctorCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category').toLowerCase().replace(' ', '-');
                        if (filter === 'all' || cardCategory === filter) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
@endsection
