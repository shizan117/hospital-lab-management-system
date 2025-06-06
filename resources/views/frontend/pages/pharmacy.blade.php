@extends('frontend.layouts.master')

@section('title')
    Pharmacy | Medicare Diagnostic Lab
@endsection

@section('content')
    <!-- Pharmacy Section -->
    <section class="pharmacy-section py-4 bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- Left Column: Pharmacy Info -->
                <div class="col-lg-7">
                    <div class="pharmacy-content p-4 shadow rounded bg-white">
                        <h2 class="mb-3">Pharmacy Services in Goalanda, Rajbari</h2>
                        <p class="text-muted">
                            Medicare Diagnostic Lab provides an in-house pharmacy to ensure patients receive prescribed medications conveniently and affordably. Our pharmacy maintains a wide stock of authentic medicines.
                        </p>
                        <img src="{{ asset('frontend_assets/img/pharmacy.jpg') }}" class="img-fluid rounded my-2" alt="Pharmacy" style="height: 300px; width: 100%; object-fit: cover;">
                        <p>
                            We are open 7 days a week and serve both in-house patients and walk-in customers. Our trained pharmacists are available to provide guidance on medication usage, dosage, and storage.
                        </p>
                        <ul class="mt-3">
                            <li>Branded and generic medicines</li>
                            <li>Prescription & OTC drugs</li>
                            <li>Health supplements & devices</li>
                            <li>Free consultation with pharmacists</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column: Additional Info -->
                <div class="col-lg-5">
                    <div class="additional-info p-4 shadow rounded bg-white">
                        <h4 class="mb-3">Why Choose Our Pharmacy?</h4>
                        <p>
                            Our pharmacy is staffed by certified professionals who are committed to your health and safety. Whether you're managing a chronic condition or recovering from illness, we make your treatment journey easier.
                        </p>
                        <h5 class="mt-4">Our Commitment:</h5>
                        <ul>
                            <li>Authentic and approved medicines</li>
                            <li>Affordable pricing</li>
                            <li>Fast and friendly service</li>
                            <li>Home delivery available (coming soon)</li>
                        </ul>
                        <p class="mt-3 text-muted">
                            Have a question about a medicine? Visit us or speak to one of our experienced pharmacists today.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
