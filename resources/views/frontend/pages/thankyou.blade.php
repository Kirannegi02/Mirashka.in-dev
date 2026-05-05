
@extends('frontend.layouts.app')

@section('title', 'Thank You')
@section('content')  


<section class="py-5 bg-white">
    <style>
        .thankyou-card {
            animation: fadeUp 0.8s ease-in-out;
            border-radius: 18px;
        }
        .thankyou-icon {
            width: 90px;
            height: 90px;
            background: #006039;
            border-radius: 50%;
            color: #fff;
            font-size: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -60px auto 20px;
            animation: pop 0.6s ease-in-out;
        }
        .btn-theme {
            background: #006039;
            color: #fff;
            border-radius: 50px;
            padding: 10px 30px;
            transition: all 0.3s ease;
        }
        .btn-theme:hover {
            background: #004d2e;
            transform: translateY(-2px);
            color: #fff;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pop {
            0% { transform: scale(0.6); }
            80% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>

    <div class="container d-flex justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card thankyou-card text-center p-4 pt-5 border-0 shadow">

                <div class="thankyou-icon">
                    ✓
                </div>

                <h2 class="fw-bold text-dark">Thank You!</h2>

                <p class="text-muted mt-2 mb-4">
                    We’ve received your details successfully.  
                    Our team will connect with you shortly.
                </p>

                <a href="/" class="btn btn-theme">
                    Back to Home
                </a>

            </div>
        </div>
    </div>
</section>
@endsection
