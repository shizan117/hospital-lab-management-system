@extends('frontend.layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
<!-- Hero Section -->
<section class="hero-section text-white position-relative" style="background: linear-gradient(120deg, #0ea5e9, #0284c7); overflow: hidden; padding: 60px 0;">
    <div style="position: absolute; top: -100px; left: -100px; width: 300px; height: 300px; background: rgba(0, 0, 0, 0.05); border-radius: 50%; z-index: 0;"></div>
    <div style="position: absolute; bottom: -100px; right: -100px; width: 300px; height: 300px; background: rgba(0, 0, 0, 0.05); border-radius: 50%; z-index: 0;"></div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row align-items-center justify-content-between flex-wrap-reverse">

            <!-- Left Column: Contact Info -->
            <div class="col-lg-5 mb-5 mb-lg-0"style="
            margin-top: 9px;
        ">
                <div class="bg-white text-dark rounded-4 p-4 shadow-sm">
                    <h5 class="fw-bold mb-3 text-center">যোগাযোগ করুন</h5>
                    <p class="mb-2"><strong>📍 ঠিকানা:</strong> মেডিকেয়ার ডায়াগনস্টিক ল্যাব, গোয়ালন্দ, রাজবাড়ী</p>
                    <p class="mb-2"><strong>📞 ফোন:</strong> <a href="tel:+8801316131328" class="text-decoration-none text-primary">01316-****</a></p>
                    <p class="mb-2"><strong>📧 ইমেইল:</strong> <a href="mailto:info@medicarebd.com" class="text-decoration-none text-primary">info@medicarebd.com</a></p>
                    <p class="mb-0"><strong>🔗 ফেসবুক:</strong> <a href="https://www.facebook.com/jannatul.maliha.568" target="_blank" class="text-decoration-none text-primary">গোয়ালন্দ মেডিকেয়ার ডায়াগনস্টিক ল্যাব</a></p>
                </div>
            </div>

            <!-- Right Column: Hero Text -->
            <div class="col-lg-6 text-center text-lg-start">
                <h5 class="mb-3 fw-semibold mb-5">গোয়ালন্দে মানসম্মত ডায়াগনস্টিক সেবা</h5>
                <h3 class="mb-4" style="font-size: 1.2rem; color: rgba(255,255,255,0.9);">স্বাস্থ্য সেবায় আপনার আস্থায়</h3>
                <h1 class="display-5 fw-bold mb-5" style="color: white;">গোয়ালন্দ মেডিকেয়ার ডায়াগনস্টিক ল্যাব</h1>
                <p class="lead mb-4" style="opacity: 0.95;">আধুনিক প্রযুক্তি ও দক্ষ প্যাথলজিস্ট দ্বারা পরিচালিত</p>

                <div class="d-flex justify-content-center justify-content-lg-start gap-3 flex-wrap">
                    <a href="services.html" class="btn btn-light btn-lg px-4 shadow-sm">Our Services</a>
                    <a href="contact.html#appointment" class="btn btn-outline-light btn-lg px-4">Book Test</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Diagnostic Services</h2>
            <p class="lead text-muted">Comprehensive testing for accurate diagnosis</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center p-4 h-100">
                    <div class="service-icon">
                        <i class="fas fa-vial"></i>
                    </div>
                    <h3>Pathology Tests</h3>
                    <p class="text-muted">Complete blood tests, urine analysis, biochemistry, and microbiology services.</p>
                    <a href="services.html#pathology" class="btn btn-outline-primary mt-auto">Learn More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-4 h-100">
                    <div class="service-icon">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <h3>Radiology</h3>
                    <p class="text-muted">Digital X-ray, ultrasound, and other imaging services with expert radiologists.</p>
                    <a href="services.html#radiology" class="btn btn-outline-primary mt-auto">Learn More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-4 h-100">
                    <div class="service-icon">
                        <i class="fas fa-dna"></i>
                    </div>
                    <h3>Specialized Tests</h3>
                    <p class="text-muted">Advanced testing including hormonal assays, tumor markers, and genetic tests.</p>
                    <a href="services.html#specialized" class="btn btn-outline-primary mt-auto">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title text-start">Why Choose Medicare Diagnostic Lab</h2>
                <p class="lead">Trusted by thousands in Goalanda for accurate and timely diagnostic services.</p>
                <ul class="list-unstyled">

                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> State-of-the-art equipment</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Experienced pathologists</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Fast and accurate results</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Affordable pricing</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> Home sample collection available</li>
                </ul>
                <a href="about.html" class="btn btn-primary mt-3">Learn More About Us</a>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('frontend_assets')}}/img/lab-interior.jpg" alt="Lab Interior" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">What Our Patients Say</h2>
            <p class="lead text-muted">Trusted by the community of Goalanda</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <img src="{{asset('frontend_assets')}}/img/patient1.jpg" class="testimonial-img mx-auto" alt="Patient">
                    <div class="mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <p class="mb-4">"The most reliable diagnostic center in Goalanda. I always get my tests done here. The staff is very professional and helpful."</p>
                    <h5>Rahul Sharma</h5>
                    <p class="text-muted small">Regular Patient</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <img src="{{asset('frontend_assets')}}/img/patient2.jpg" class="testimonial-img mx-auto" alt="Patient">
                    <div class="mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                    <p class="mb-4">"Accurate results and quick reporting. The home sample collection service is a lifesaver for elderly patients like me."</p>
                    <h5>Sunita Devi</h5>
                    <p class="text-muted small">Senior Citizen</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <img src="{{asset('frontend_assets')}}/img/patient3.jpg" class="testimonial-img mx-auto" alt="Patient">
                    <div class="mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i>
                    </div>
                    <p class="mb-4">"The doctors explained my test reports in detail. I appreciate their transparency and commitment to patient care."</p>
                    <h5>Amit Kumar</h5>
                    <p class="text-muted small">Diabetes Patient</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment CTA Section -->
<section class="appointment-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold mb-4">Need Diagnostic Tests?</h2>
                <p class="lead mb-4">Book your tests today and get accurate results with quick turnaround time.</p>
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-phone-alt fa-2x me-3"></i>
                    <div>
                        <h5 class="mb-0">Call Us</h5>
                        <p class="mb-0"> 01316-***</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-clock fa-2x me-3"></i>
                    <div>
                        <h5 class="mb-0">Working Hours</h5>
                        <p class="mb-0">EveryDay : 7:00 AM - 12:00 PM</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Book a Test</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" required>
                                        <option value="" selected disabled>Select Test</option>
                                        <option>Blood Test</option>
                                        <option>Urine Test</option>
                                        <option>X-ray</option>
                                        <option>Ultrasound</option>
                                        <option>ECG</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-light w-100 py-2">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
