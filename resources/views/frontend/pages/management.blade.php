@extends('frontend.layouts.master')
@section('title')
    Management Page
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Executive Management</h2>
                <p class="lead text-muted">Visionary leaders shaping the future of healthcare diagnostics</p>
            </div>

            <div class="row g-4">
                <!-- CEO -->
                <div class="col-md-6 col-lg-4">
                    <div class="card management-card h-100">
                        <img src="../assets/img/management-1.jpg" class="card-img-top management-img" alt="CEO">
                        <div class="card-body text-center">
                            <span class="position-badge mb-2">Chief Executive Officer</span>
                            <h4 class="card-title mt-3">Dr. A. Rahman</h4>
                            <p class="card-text text-muted">MD, MBA Healthcare Management</p>
                            <p class="card-text">With over 20 years of experience in healthcare leadership, Dr. Rahman has been instrumental in establishing Medicare as a trusted diagnostic center.</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medical Director -->
                <div class="col-md-6 col-lg-4">
                    <div class="card management-card h-100">
                        <img src="../assets/img/management-2.jpg" class="card-img-top management-img" alt="Medical Director">
                        <div class="card-body text-center">
                            <span class="position-badge mb-2">Medical Director</span>
                            <h4 class="card-title mt-3">Dr. S. Khan</h4>
                            <p class="card-text text-muted">PhD Pathology, Fellowship in Laboratory Medicine</p>
                            <p class="card-text">Oversees all medical operations and ensures the highest standards of diagnostic accuracy and patient care.</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Operations Manager -->
                <div class="col-md-6 col-lg-4">
                    <div class="card management-card h-100">
                        <img src="../assets/img/management-3.jpg" class="card-img-top management-img" alt="Operations Manager">
                        <div class="card-body text-center">
                            <span class="position-badge mb-2">Operations Manager</span>
                            <h4 class="card-title mt-3">Ms. F. Begum</h4>
                            <p class="card-text text-muted">MSc Healthcare Administration</p>
                            <p class="card-text">Ensures smooth day-to-day operations and implements quality control measures across all departments.</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Department Heads -->
            <div class="text-center mt-5 mb-5">
                <h2 class="section-title">Department Heads</h2>
                <p class="lead text-muted">Specialists leading our key diagnostic departments</p>
            </div>

            <div class="row g-4">
                <!-- Pathology -->
                <div class="col-md-6 col-lg-3">
                    <div class="card management-card h-100">
                        <img src="../assets/img/management-4.jpg" class="card-img-top management-img" alt="Pathology Head">
                        <div class="card-body text-center">
                            <span class="position-badge mb-2">Pathology Department</span>
                            <h4 class="card-title mt-3">Dr. M. Chowdhury</h4>
                            <p class="card-text text-muted">MD Pathology</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Radiology -->
                <div class="col-md-6 col-lg-3">
                    <div class="card management-card h-100">
                        <img src="../assets/img/management-5.jpg" class="card-img-top management-img" alt="Radiology Head">
                        <div class="card-body text-center">
                            <span class="position-badge mb-2">Radiology Department</span>
                            <h4 class="card-title mt-3">Dr. R. Ahmed</h4>
                            <p class="card-text text-muted">DMRD, Fellowship in Radiology</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Microbiology -->
                <div class="col-md-6 col-lg-3">
                    <div class="card management-card h-100">
                        <img src="../assets/img/management-6.jpg" class="card-img-top management-img" alt="Microbiology Head">
                        <div class="card-body text-center">
                            <span class="position-badge mb-2">Microbiology Department</span>
                            <h4 class="card-title mt-3">Dr. N. Akhtar</h4>
                            <p class="card-text text-muted">PhD Microbiology</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Biochemistry -->
                <div class="col-md-6 col-lg-3">
                    <div class="card management-card h-100">
                        <img src="../assets/img/management-7.jpg" class="card-img-top management-img" alt="Biochemistry Head">
                        <div class="card-body text-center">
                            <span class="position-badge mb-2">Biochemistry Department</span>
                            <h4 class="card-title mt-3">Dr. P. Das</h4>
                            <p class="card-text text-muted">MSc Biochemistry, PhD</p>
                            <div class="social-links mt-3">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
