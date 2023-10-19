@extends('layouts.app')

@section('content')
            <!-- NAVBAR START -->
            <!-- START HERO -->
            <section class="hero-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="mt-md-4">
                                <div>
                                    <span class="badge bg-danger font-13 rounded-pill">New</span>
                                    <span class="text-white-50 ms-1">Welcome to new landing page</span>
                                </div>
                                <h2 class="text-white fw-normal mb-4 mt-3 lh-base">
                                    Responsive Web UI Kit & Dashboard Template
                                </h2>
    
                                <p class="mb-4 font-16 text-white-50">Hyper is a fully featured dashboard and admin template
                                    comes with tones of well designed UI elements, components, widgets and pages.</p>
    
                                <a href="{{ route('register') }}" class="btn btn-success">Get Started <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END HERO -->
@endsection
