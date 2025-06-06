<footer>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h3 class="text-white mb-4">
                    <i class="fas fa-flask me-2"></i>Medicare Diagnostic Lab
                </h3>
                <p>Goalanda's trusted diagnostic center providing accurate and reliable testing services since 2021.</p>
                <div class="mt-4">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{route('home')}}" class="text-white-50 text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="{{route('about')}}" class="text-white-50 text-decoration-none">About</a></li>
                    <li class="mb-2"><a href="{{route('services')}}" class="text-white-50 text-decoration-none">Services</a></li>
                    <li class="mb-2"><a href="{{route('doctors')}}" class="text-white-50 text-decoration-none">Doctors</a></li>
                    <li class="mb-2"><a href="{{route('contact')}}" class="text-white-50 text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <h5 class="text-white mb-4">Our Services</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{route('services')}}" class="text-white-50 text-decoration-none">Pathology Tests</a></li>
                    <li class="mb-2"><a href="{{route('services')}}" class="text-white-50 text-decoration-none">Radiology</a></li>
                    <li class="mb-2"><a href="{{route('services')}}" class="text-white-50 text-decoration-none">Specialized Tests</a></li>
                    <li class="mb-2"><a href="{{route('services')}}" class="text-white-50 text-decoration-none">Home Collection</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5 class="text-white mb-4">Contact Info</h5>
                <ul class="list-unstyled text-white-50">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Main Dhaka - Khulna High Way, Rajbari 7710</li>
                    <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> 01316-****</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@medicaregoalanda.com</li>
                </ul>
            </div>
        </div>
        <hr class="mt-4 mb-3 bg-white-10">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-white-50">© 2025 Medicare Diagnostic Lab Goalanda. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="https://savageoff.com/" target="#">SavageOff</a>
            </div>
        </div>
    </div>

    <style>
        @media (max-width: 767.98px) {
            .col-6 {
                flex: 0 0 50%;
                max-width: 50%;
                padding-left: 8px;
                padding-right: 8px;
            }
            .col-6 h5 {
                font-size: 1rem;
                margin-bottom: 1.5rem;
            }
            .col-6 ul li {
                font-size: 0.9rem;
            }
            .col-6 ul li a {
                font-size: 0.9rem;
            }
        }
    </style>
</footer>
