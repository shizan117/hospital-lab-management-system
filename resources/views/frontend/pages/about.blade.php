@extends('frontend.layouts.master')
@section('title')
    About Page
@endsection
@section('content')

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{asset('frontend_assets')}}/img/hero.jpg" alt="Our Lab" class="img-fluid about-img">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title text-start">Our Story</h2>
                    <p>Medicare Diagnostic Lab was established in 2021 with a vision to provide accurate and affordable diagnostic services to the people of Goalanda and surrounding areas. What started as a small pathology lab has now grown into a full-fledged diagnostic center with state-of-the-art equipment and expert staff.</p>
                    <p>Medicare Diagnostic Lab was established in 2021 with a vision to provide accurate and affordable diagnostic services to the people of Goalanda and surrounding areas. What started as a small pathology lab has now grown into a full-fledged diagnostic center with state-of-the-art equipment and expert staff.</p>
                    <p>Over the years, we have earned the trust of thousands of patients through our commitment to quality, accuracy, and patient care. Our lab is NABL accredited, ensuring that all tests are performed according to international quality standards.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-award fa-2x text-primary me-3"></i>
                                <div>
                                    <h5 class="mb-0">Trusted Quality</h5>
                                    <p class="mb-0">Reliable and accurate reports</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-user-md fa-2x text-primary me-3"></i>
                                <div>
                                    <h5 class="mb-0">Expert Team</h5>
                                    <p class="mb-0">Qualified pathologists</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-flask fa-2x text-primary me-3"></i>
                                <div>
                                    <h5 class="mb-0">Modern Equipment</h5>
                                    <p class="mb-0">Advanced technology</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-home fa-2x text-primary me-3"></i>
                                <div>
                                    <h5 class="mb-0">Home Collection</h5>
                                    <p class="mb-0">At your convenience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Vision Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                            <h3>Our Mission</h3>
                            <p>To provide accurate, reliable, and timely diagnostic services using advanced technology and skilled professionals, making quality healthcare accessible to all sections of society at affordable prices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-eye fa-3x text-primary mb-3"></i>
                            <h3>Our Vision</h3>
                            <p>To become the most trusted diagnostic center in the region by continuously improving our services, adopting new technologies, and maintaining the highest standards of quality and patient care.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Preview Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Meet Our Experts</h2>
                <p class="lead text-muted">Qualified professionals dedicated to your health</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{asset('frontend_assets')}}/img/doctor1.jpg" class="card-img-top doctor-img" alt="Dr. Rahman">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. A. Rahman</h5>
                            <p class="card-text specialty">Pathologist</p>
                            <p class="card-text text-muted">MD Pathology, 15 years experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{asset('frontend_assets')}}/img/doctor2.jpg" class="card-img-top doctor-img" alt="Dr. Khan">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. S. Khan</h5>
                            <p class="card-text specialty">Radiologist</p>
                            <p class="card-text text-muted">DMRD, 12 years experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{asset('frontend_assets')}}/img/doctor3.jpg" class="card-img-top doctor-img" alt="Dr. Chowdhury">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. M. Chowdhury</h5>
                            <p class="card-text specialty">Microbiologist</p>
                            <p class="card-text text-muted">PhD Microbiology, 10 years experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="{{asset('frontend_assets')}}/img/doctor4.jpg" class="card-img-top doctor-img" alt="Dr. Akhtar">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. N. Akhtar</h5>
                            <p class="card-text specialty">Biochemist</p>
                            <p class="card-text text-muted">MSc Biochemistry, 8 years experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{route('doctors')}}" class="btn btn-primary">View All Doctors</a>
            </div>
        </div>
    </section>


@endsection
