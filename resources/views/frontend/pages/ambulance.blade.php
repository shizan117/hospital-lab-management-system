@extends('frontend.layouts.master')
@section('title')
    Ambulance | Medicare Diagnostic Lab
@endsection

@section('content')
    <!-- Ambulance Service Section -->
    <section class="ambulance-section">
        <div class="container">
            <div class="row g-4">
                <!-- Left Column: Ambulance Info -->
                <div class="col-lg-7">
                    <div class="ambulance-content">
                        <h2 class="ambulance-title">Ambulance Service in Goalanda, Rajbari | Call Us Now</h2>
                        <div class="emergency-number">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+8801924452373" class="call-link">+8801924452373</a> |
                            <a href="tel:+8801715133114" class="call-link">+8801715133114</a>
                        </div>
                        <img src="{{ asset('frontend_assets/img/ambulance.jpg') }}" class="ambulance-image" alt="Ambulance">
                        <p class="mt-3">
                            Goalanda is a upazila in Rajbari, known for its strategic location along the Dhaka-Khulna Highway. We provide reliable ambulance services to ensure timely medical transportation for the residents of Goalanda and surrounding areas. Call us for an ambulance to connect with you
                        </p>
                    </div>
                </div>

                <!-- Right Column: Request Form -->
                <div class="col-lg-5">
                    <div class="request-form">
                        <h4>Request an Ambulance</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="from" class="form-label">From</label>
                                <input type="text" class="form-control" id="from" name="from" placeholder="Example: Goalanda" required>
                            </div>
                            <div class="mb-3">
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text" class="form-control" id="destination" name="destination" placeholder="Example: Medicare Diagnostic Lab Hospital" required>
                            </div>
                            <div class="mb-3">
                                <label for="ambulance_type" class="form-label">Ambulance Type</label>
                                <select class="form-control" id="ambulance_type" name="ambulance_type" required>
                                    <option value="">Select</option>
                                    <option value="basic">Basic Life Support</option>
                                    <option value="advanced">Advanced Life Support</option>
                                    <option value="icu">ICU Ambulance</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="round_trip" name="round_trip">
                                <label class="form-check-label" for="round_trip">I need a round trip</label>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text">+880</span>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="1234567890" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Ambulance Request</button>
                            <p class="form-note text-center">
                                <i class="fas fa-info-circle"></i> One of our agents will get back to you within 30 minutes with the ambulance update.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('style')
    <style>
        .ambulance-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .ambulance-title {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .emergency-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: #dc3545; /* Red for emphasis */
            margin-bottom: 20px;
        }
        .emergency-number i {
            margin-right: 10px;
        }
        .ambulance-content {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 30px;
        }
        .ambulance-content p {
            color: #6c757d;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        .ambulance-image {
            max-width: 100%;
            border-radius: 10px;
        }
        .request-form {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 20px;
        }
        .request-form h4 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .request-form .form-label {
            color: #6c757d;
            font-size: 0.9rem;
        }
        .request-form .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 0.9rem;
        }
        .request-form .form-check-label {
            color: #6c757d;
            font-size: 0.9rem;
        }
        .request-form .btn-primary {
            background: #0d6efd;
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 5px;
            width: 100%;
            transition: all 0.3s ease;
        }
        .request-form .btn-primary:hover {
            background: #0b5ed7;
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
        }
        .form-note {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 10px;
        }
        .form-note i {
            color: #0d6efd;
            margin-right: 5px;
        }
        .call-link {
            color: #dc3545;
            text-decoration: none;
            font-weight: 600;
            margin-right: 15px;
        }
        .call-link:hover {
            text-decoration: underline;
        }
    </style>
@endsection
