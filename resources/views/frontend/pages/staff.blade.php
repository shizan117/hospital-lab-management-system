@extends('frontend.layouts.master')
@section('title')
    Staff Page
@endsection
@section('content')
    <!-- Staff Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="lead text-muted">Skilled professionals committed to your healthcare needs</p>
            </div>

            <!-- Department Filter -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <button class="btn btn-outline-primary active" data-filter="all">All Departments</button>
                        <button class="btn btn-outline-primary" data-filter="pathology">Pathology</button>
                        <button class="btn btn-outline-primary" data-filter="radiology">Radiology</button>
                        <button class="btn btn-outline-primary" data-filter="microbiology">Microbiology</button>
                        <button class="btn btn-outline-primary" data-filter="reception">Reception</button>
                        <button class="btn btn-outline-primary" data-filter="phlebotomy">Phlebotomy</button>
                    </div>
                </div>
            </div>

            <!-- Staff Grid -->
            <div class="staff-grid">
                <!-- Staff Member 1 -->
                <div class="card staff-card" data-department="pathology">
                    <img src="../assets/img/staff-1.jpg" class="card-img-top staff-img" alt="Pathology Technician">
                    <div class="card-body text-center">
                        <span class="department-badge mb-2">Pathology</span>
                        <h5 class="card-title mb-1">Mr. A. Hossain</h5>
                        <p class="card-text text-muted small">Senior Lab Technician</p>
                    </div>
                </div>

                <!-- Staff Member 2 -->
                <div class="card staff-card" data-department="radiology">
                    <img src="../assets/img/staff-2.jpg" class="card-img-top staff-img" alt="Radiology Technician">
                    <div class="card-body text-center">
                        <span class="department-badge mb-2">Radiology</span>
                        <h5 class="card-title mb-1">Ms. R. Akter</h5>
                        <p class="card-text text-muted small">Radiology Technician</p>
                    </div>
                </div>

                <!-- Staff Member 3 -->
                <div class="card staff-card" data-department="microbiology">
                    <img src="../assets/img/staff-3.jpg" class="card-img-top staff-img" alt="Microbiology Technician">
                    <div class="card-body text-center">
                        <span class="department-badge mb-2">Microbiology</span>
                        <h5 class="card-title mb-1">Ms. S. Islam</h5>
                        <p class="card-text text-muted small">Microbiology Specialist</p>
                    </div>
                </div>

                <!-- Staff Member 4 -->
                <div class="card staff-card" data-department="reception">
                    <img src="../assets/img/staff-4.jpg" class="card-img-top staff-img" alt="Reception Staff">
                    <div class="card-body text-center">
                        <span class="department-badge mb-2">Reception</span>
                        <h5 class="card-title mb-1">Ms. F. Khan</h5>
                        <p class="card-text text-muted small">Front Desk Coordinator</p>
                    </div>
                </div>

                <!-- Staff Member 5 -->
                <div class="card staff-card" data-department="phlebotomy">
                    <img src="../assets/img/staff-5.jpg" class="card-img-top staff-img" alt="Phlebotomist">
                    <div class="card-body text-center">
                        <span class="department-badge mb-2">Phlebotomy</span>
                        <h5 class="card-title mb-1">Mr. K. Rahman</h5>
                        <p class="card-text text-muted small">Senior Phlebotomist</p>
                    </div>
                </div>

                <!-- Staff Member 6 -->
                <div class="card staff-card" data-department="pathology">
                    <img src="../assets/img/staff-6.jpg" class="card-img-top staff-img" alt="Lab Technician">
                    <div class="card-body text-center">
                        <span class="department-badge mb-2">Pathology</span>
                        <h5 class="card-title mb-1">Ms. M. Sultana</h5>
                        <p class="card-text text-muted small">Lab Technician</p>
                    </div>
                </div>

                <!-- Staff Member 7 -->
                <div class="card staff-card" data-department="radiology">
                    <img src="../assets/img/staff-7.jpg" class="card-img-top staff-img" alt="Ultrasound Technician">
                    <div class="card-body text-center">
                        <span class="department-badge mb-2">Radiology</span>
                        <h5 class="card-title mb-1">Mr. S. Ali</h5>
                        <p class="card-text text-muted small">Ultrasound Technician</p>
                    </div>
                </div>

                <!-- Staff Member 8 -->
                <div class="card staff-card" data-department="reception">
                    <img src="../assets/img/staff-8.jpg" class="card-img-top staff-img" alt="Customer Service">
                    <div class="card-body text-center">
                        <span class="department-badge mb-2">Reception</span>
                        <h5 class="card-title mb-1">Ms. T. Jahan</h5>
                        <p class="card-text text-muted small">Customer Service</p>
                    </div>
                </div>
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
