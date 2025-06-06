@extends('frontend.layouts.master')
@section('title')
    Shareholders | Medicare Diagnostic Lab
@endsection

@section('content')
    <style>
        .shareholder-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .shareholder-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            text-align: center;
            padding: 25px 15px;
            height: 100%;
        }
        .shareholder-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }
        .shareholder-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #e9ecef;
            margin: 0 auto 15px;
        }
        .shareholder-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }
        .shareholder-role {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: #0d6efd;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>

    <!-- Shareholders Section -->
    <section class="shareholder-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Valued Shareholders</h2>
                <p class="lead text-muted">The partners who support our healthcare mission</p>
            </div>

            <div class="row">
                <!-- Shareholder 1 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="shareholder-card">
                        <img src="{{ asset('frontend_assets/img/patient3.jpg') }}" class="shareholder-img" alt="Dr. M. Rahman">
                        <h4 class="shareholder-name">Dr. M. Rahman</h4>
                        <p class="shareholder-role">Medical Professional</p>
                    </div>
                </div>

                <!-- Shareholder 2 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="shareholder-card">
                        <img src="{{ asset('frontend_assets/img/doctor6.jpg') }}" class="shareholder-img" alt="Mr. S. Ahmed">
                        <h4 class="shareholder-name">Mr. S. Ahmed</h4>
                        <p class="shareholder-role">Business Entrepreneur</p>
                    </div>
                </div>

                <!-- Shareholder 3 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="shareholder-card">
                        <img src="{{ asset('frontend_assets/img/patient2.jpg') }}" class="shareholder-img" alt="Ms. N. Khan">
                        <h4 class="shareholder-name">Ms. N. Khan</h4>
                        <p class="shareholder-role">Healthcare Group</p>
                    </div>
                </div>

                <!-- Shareholder 4 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="shareholder-card">
                        <img src="{{ asset('frontend_assets/img/doctor1.jpg') }}" class="shareholder-img" alt="Mr. A. Hossain">
                        <h4 class="shareholder-name">Mr. A. Hossain</h4>
                        <p class="shareholder-role">Community Leader</p>
                    </div>
                </div>

                <!-- Shareholder 5 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="shareholder-card">
                        <img src="{{ asset('frontend_assets/img/doctor2.jpg') }}" class="shareholder-img" alt="Dr. F. Begum">
                        <h4 class="shareholder-name">Dr. F. Begum</h4>
                        <p class="shareholder-role">Medical Director</p>
                    </div>
                </div>

                <!-- Shareholder 6 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="shareholder-card">
                        <img src="{{ asset('frontend_assets/img/patient1.jpg') }}" class="shareholder-img" alt="Mr. R. Islam">
                        <h4 class="shareholder-name">Mr. R. Islam</h4>
                        <p class="shareholder-role">Financial Advisor</p>
                    </div>
                </div>

                <!-- Add more shareholders as needed -->
            </div>
        </div>
    </section>
@endsection
