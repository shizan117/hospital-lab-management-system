@extends('frontend.layouts.master')
@section('title')
    Contact Page
@endsection
@section('content')

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="mb-5">
                        <h2 class="section-title text-start">Our Location</h2>
                        <p class="text-muted">Visit our diagnostic center in Goalanda for your tests and consultations</p>
                    </div>

                    <!-- Google Map -->
                    <div class="map-container mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5189051263965!2d89.7557567!3d23.7288684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe3f1d6de80723%3A0xdee933c376d74123!2sMedicare%20Diagnostic%20Lab!5e0!3m2!1sen!2sbd!4v1744614798307!5m2!1sen!2sbd"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                    <!-- Contact Information -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card contact-info-card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                                        <div>
                                            <h5>Address</h5>
                                            <p class="text-muted mb-0">123 Main Road<br>Goalanda, Rajbari<br>Bangladesh</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card contact-info-card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-3"></i>
                                        <div>
                                            <h5>Phone</h5>
                                            <p class="text-muted mb-0">
                                                +880 1234 567890<br>
                                                +880 9876 543210 (Emergency)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card contact-info-card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                                        <div>
                                            <h5>Email</h5>
                                            <p class="text-muted mb-0">
                                                info@medicaregoalanda.com<br>
                                                support@medicaregoalanda.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card contact-info-card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-clock fa-2x text-primary me-3"></i>
                                        <div>
                                            <h5>Working Hours</h5>
                                            <p class="text-muted mb-0">
                                                Mon-Sat: 7:00 AM - 9:00 PM<br>
                                                Sun: 8:00 AM - 2:00 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <!-- Contact Form -->
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="section-title text-start mb-4">Send Us a Message</h2>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-4 py-2">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Appointment Section -->
                    <div id="appointment" class="mt-5">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h2 class="section-title text-start mb-4">Book an Appointment</h2>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="appointment-name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="appointment-name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="appointment-phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="appointment-phone" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="appointment-date" class="form-label">Preferred Date</label>
                                            <input type="date" class="form-control" id="appointment-date" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="appointment-time" class="form-label">Preferred Time</label>
                                            <input type="time" class="form-control" id="appointment-time" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="appointment-service" class="form-label">Service Required</label>
                                            <select class="form-select" id="appointment-service" required>
                                                <option value="" selected disabled>Select Service</option>
                                                <option>Pathology Tests</option>
                                                <option>X-ray</option>
                                                <option>Ultrasound</option>
                                                <option>ECG</option>
                                                <option>Doctor Consultation</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="home-collection">
                                                <label class="form-check-label" for="home-collection">
                                                    I need home sample collection service
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100 py-2">Book Appointment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="lead text-muted">Common questions about our services</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What are your lab operating hours?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our lab is open from 7:00 AM to 9:00 PM from Monday to Saturday, and from 8:00 AM to 2:00 PM on Sundays. Emergency services are available 24/7.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do I need an appointment for tests?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    For routine tests, appointments are not necessary - you can walk in during operating hours. However, for specialized tests and consultations with doctors, we recommend booking an appointment to minimize waiting time.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    How long does it take to get test results?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Most routine test results are available within 24 hours. Some specialized tests may take 2-3 days. You can collect your reports from our lab or receive them via email.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Do you offer home sample collection?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide home sample collection services for most tests. There is a nominal charge for this service. You can book a home collection by calling us or using the appointment form on this page.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    What payment methods do you accept?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We accept cash, credit/debit cards, mobile banking (bKash, Nagad), and most health insurance plans. Please check with our billing department for insurance coverage details.
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
        .contact-info-card {
            border-left: 3px solid var(--primary-color);
            transition: all 0.3s;
        }
        .contact-info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        #appointment {
            scroll-margin-top: 80px;
        }
    </style>

@endsection
