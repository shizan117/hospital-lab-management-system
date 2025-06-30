@extends('frontend.layouts.master')
@section('title')
    Staff Page
@endsection
@section('content')
    <!-- Staff Section -->
    <section class="py-2">
        <div class="container">
            <div class="text-center mb-1">
                <h2 class="section-title" style="margin-bottom: 20px">Meet Our Team</h2>
                <p class="lead text-muted">Skilled professionals committed to your healthcare needs</p>
            </div>

            <!-- Department Filter -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <button class="btn btn-outline-primary active" data-filter="all">All Departments</button>
                        @foreach ($categories as $category)
                            <button class="btn btn-outline-primary" data-filter="{{ strtolower(str_replace(' ', '-', $category->name)) }}">
                                {{ $category->name }}
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Staff Grid -->
            <div class="staff-grid">
                @forelse ($staff as $item)
                    <div class="card staff-card" data-department="{{ strtolower(str_replace(' ', '-', $item->category->name ?? 'uncategorized')) }}">
                        <img src="{{ $item->image ? asset('frontend_assets/img/' . $item->image) : asset('frontend_assets/img/default.jpg') }}"
                             class="card-img-top staff-img"
                             alt="{{ $item->name }}"
                             style="height: 200px; object-fit: cover; width: 100%;">

                        <div class="card-body text-center">
                            <span class="department-badge mb-2">{{ $item->category->name ?? 'Uncategorized' }}</span>
                            <h5 class="card-title mb-1">{{ $item->name }}</h5>
                            <p class="card-text text-muted small">{{ $item->position }}</p>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning text-center" role="alert">
                        No staff members found.
                    </div>
                @endforelse
            </div>
            <!-- Staff Statistics -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="text-center mb-4">Our Staff at a Glance</h3>
                            <div class="row text-center">
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <h2 class="text-primary">25+</h2>
                                    <p class="mb-0">Medical Professionals</p>
                                </div>
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <h2 class="text-primary">15+</h2>
                                    <p class="mb-0">Years Average Experience</p>
                                </div>
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <h2 class="text-primary">100%</h2>
                                    <p class="mb-0">Certified Technicians</p>
                                </div>
                                <div class="col-md-3">
                                    <h2 class="text-primary">24/7</h2>
                                    <p class="mb-0">Emergency Support</p>
                                </div>
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
        .staff-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
        }
        .staff-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }
        .staff-img {
            height: 200px;
            object-fit: cover;
            object-position: top;
        }
        .department-badge {
            background-color: #f8f9fa;
            color: #0d6efd;
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid #dee2e6;
        }
        .staff-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
    </style>

@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('[data-filter]');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');
                    const staffCards = document.querySelectorAll('.staff-card');

                    staffCards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-department') === filterValue) {
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
