@extends('frontend.layouts.master')
@section('title')
    Shareholders | Medicare Diagnostic Lab
@endsection

@section('content')


    <!-- Under Construction Section -->
    <section class="shareholder-section">
        <div class="container">
            <div class="under-construction">
                <div class="construction-icon">🚧</div>
                <h2>Page Under Construction</h2>
                <p>We are currently working on this page to bring you the best experience. Please check back later for updates.</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </section>
@endsection

@section('style')
    <style>
        .shareholder-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 40px;
            font-size: 2.5rem;
            color: #2c3e50;
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background: #0d6efd;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
        }
        .under-construction {
            text-align: center;
            padding: 50px 30px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        .under-construction h2 {
            color: #2c3e50;
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .under-construction p {
            color: #6c757d;
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .under-construction .construction-icon {
            font-size: 4rem;
            color: #0d6efd;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }
        .under-construction .btn-primary {
            background: linear-gradient(90deg, #0d6efd, #4dabf7);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .under-construction .btn-primary:hover {
            background: linear-gradient(90deg, #4dabf7, #0d6efd);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
@endsection
