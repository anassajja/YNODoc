<!-- resources/views/welcome.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome to YNODoc</div>

                    <div class="card-body">
                        <p>
                            YNODoc is a platform that simplifies the process of scheduling medical appointments online.
                            Connect with healthcare professionals seamlessly and improve your overall healthcare experience.
                        </p>

                        <p>
                            To get started, you can sign in if you have an account or register if you are a new user.
                        </p>

                        <div class="text-center">
                            <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
                            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
