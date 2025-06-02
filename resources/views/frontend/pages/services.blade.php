@extends('frontend.layouts.master')
@section('title')
    Services Page
@endsection
@section('content')

    <!-- Pathology Services -->
    <section id="pathology" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Pathology Services</h2>
                <p class="lead text-muted">Accurate laboratory testing for better diagnosis</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <h3>Hematology</h3>
                            <ul class="text-muted">
                                <li>Complete Blood Count (CBC)</li>
                                <li>Hemoglobin & Hematocrit</li>
                                <li>ESR (Erythrocyte Sedimentation Rate)</li>
                                <li>Peripheral Smear Examination</li>
                                <li>Platelet Count</li>
                                <li>Reticulocyte Count</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-vial"></i>
                            </div>
                            <h3>Biochemistry</h3>
                            <ul class="text-muted">
                                <li>Blood Glucose (Fasting & PP)</li>
                                <li>Lipid Profile</li>
                                <li>Liver Function Tests</li>
                                <li>Kidney Function Tests</li>
                                <li>Thyroid Function Tests</li>
                                <li>Electrolytes & Minerals</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h3>Microbiology</h3>
                            <ul class="text-muted">
                                <li>Culture & Sensitivity</li>
                                <li>Urine Routine & Microscopy</li>
                                <li>Stool Routine & Microscopy</li>
                                <li>Gram Staining</li>
                                <li>AFB Staining</li>
                                <li>Widal Test</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <h3>Serology</h3>
                            <ul class="text-muted">
                                <li>HIV Screening</li>
                                <li>HBsAg (Hepatitis B)</li>
                                <li>HCV (Hepatitis C)</li>
                                <li>VDRL/RPR (Syphilis)</li>
                                <li>Dengue NS1 Antigen</li>
                                <li>Malaria Antigen</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-baby"></i>
                            </div>
                            <h3>Hormonal Assays</h3>
                            <ul class="text-muted">
                                <li>Thyroid Profile (T3, T4, TSH)</li>
                                <li>Testosterone</li>
                                <li>Estrogen & Progesterone</li>
                                <li>Prolactin</li>
                                <li>LH & FSH</li>
                                <li>Growth Hormone</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-allergies"></i>
                            </div>
                            <h3>Immunology</h3>
                            <ul class="text-muted">
                                <li>RA Factor</li>
                                <li>ASO Titre</li>
                                <li>CRP (Quantitative)</li>
                                <li>ANA (Anti Nuclear Antibody)</li>
                                <li>Anti CCP</li>
                                <li>Allergy Testing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Radiology Services -->
    <section id="radiology" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Radiology Services</h2>
                <p class="lead text-muted">Advanced imaging for precise diagnosis</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-x-ray"></i>
                            </div>
                            <h3>Digital X-ray</h3>
                            <ul class="text-muted">
                                <li>Chest X-ray (PA/Lateral)</li>
                                <li>Abdomen X-ray (KUB)</li>
                                <li>Extremities X-ray</li>
                                <li>Spine X-ray</li>
                                <li>Skull X-ray</li>
                                <li>Pelvis X-ray</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-procedures"></i>
                            </div>
                            <h3>Ultrasound</h3>
                            <ul class="text-muted">
                                <li>Abdominal Ultrasound</li>
                                <li>Pelvic Ultrasound</li>
                                <li>Obstetric Ultrasound</li>
                                <li>Thyroid Ultrasound</li>
                                <li>Breast Ultrasound</li>
                                <li>Doppler Studies</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h3>ECG & Echo</h3>
                            <ul class="text-muted">
                                <li>12-Lead ECG</li>
                                <li>Stress ECG (TMT)</li>
                                <li>Holter Monitoring</li>
                                <li>2D Echo Cardiography</li>
                                <li>Color Doppler</li>
                                <li>Fetal Echo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialized Tests -->
    <section id="specialized" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Specialized Tests</h2>
                <p class="lead text-muted">Advanced diagnostic solutions</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <h3>Molecular Diagnostics</h3>
                            <ul class="text-muted">
                                <li>PCR Tests</li>
                                <li>COVID-19 RT-PCR</li>
                                <li>TB GeneXpert</li>
                                <li>HPV DNA Testing</li>
                                <li>Hepatitis Viral Load</li>
                                <li>HIV Viral Load</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h3>Histopathology</h3>
                            <ul class="text-muted">
                                <li>FNAC (Fine Needle Aspiration Cytology)</li>
                                <li>Biopsy Examination</li>
                                <li>Pap Smear Test</li>
                                <li>Immunohistochemistry</li>
                                <li>Special Stains</li>
                                <li>Frozen Section</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="service-icon">
                                <i class="fas fa-baby"></i>
                            </div>
                            <h3>Prenatal Testing</h3>
                            <ul class="text-muted">
                                <li>Double Marker Test</li>
                                <li>Triple Marker Test</li>
                                <li>Quadruple Marker Test</li>
                                <li>NIPT (Non-Invasive Prenatal Testing)</li>
                                <li>Amniocentesis</li>
                                <li>Chorionic Villus Sampling</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Home Collection -->
    <section id="home-collection" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Home Collection Service</h2>
                <p class="lead text-muted">Convenient sample collection at your doorstep</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{asset('frontend_assets')}}/img/home-collection.jpg" alt="Home Collection" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3>How It Works</h3>
                    <div class="d-flex mb-3">
                        <div class="me-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">1</div>
                        </div>
                        <div>
                            <h5>Book Your Test</h5>
                            <p class="text-muted">Call us or book online to schedule a home collection.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="me-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">2</div>
                        </div>
                        <div>
                            <h5>Sample Collection</h5>
                            <p class="text-muted">Our trained phlebotomist visits your home at the scheduled time.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="me-4">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">3</div>
                        </div>
                        <div>
                            <h5>Get Results</h5>
                            <p class="text-muted">Receive your test reports via email or collect from our lab.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="contact.html#appointment" class="btn btn-primary me-2">Book Home Collection</a>
                        <a href="tel:+91XXXXXXXXXX" class="btn btn-outline-primary">Call for Home Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Test Price List -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Test Price List</h2>
                <p class="lead text-muted">Affordable pricing for quality diagnostics</p>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                    <tr>
                        <th>Test Name</th>
                        <th>Category</th>
                        <th>Price (Taka)</th>
                        <th>Reporting Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Complete Blood Count (CBC)</td>
                        <td>Hematology</td>
                        <td>300</td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td>Blood Glucose (Fasting)</td>
                        <td>Biochemistry</td>
                        <td>100</td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td>Lipid Profile</td>
                        <td>Biochemistry</td>
                        <td>500</td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td>Liver Function Test (LFT)</td>
                        <td>Biochemistry</td>
                        <td>600</td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td>Thyroid Profile (T3, T4, TSH)</td>
                        <td>Hormonal</td>
                        <td>700</td>
                        <td>Next Day</td>
                    </tr>
                    <tr>
                        <td>Chest X-ray</td>
                        <td>Radiology</td>
                        <td>400</td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td>Abdominal Ultrasound</td>
                        <td>Radiology</td>
                        <td>800</td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td>ECG</td>
                        <td>Cardiology</td>
                        <td>300</td>
                        <td>Same Day</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-4">
                <p class="text-muted">*Prices are subject to change. Please confirm before booking.</p>
                <a href="contact.html" class="btn btn-primary">Contact for More Tests</a>
            </div>
        </div>
    </section>

@endsection
