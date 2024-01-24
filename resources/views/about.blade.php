<!-- resources/views/about.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">About YNODoc</div>

                    <div class="card-body">
                        <p>
                            YNODoc is a revolutionary platform that transforms the way healthcare appointments are managed.
                            We aim to provide a seamless and user-friendly experience for both patients and healthcare professionals.
                        </p>

                        <h4>Key Features:</h4>
                        <ul>
                            <li>Effortless online scheduling of medical appointments.</li>
                            <li>Connection between patients and healthcare professionals through an intuitive interface.</li>
                            <li>Reduced waiting times and optimized management of medical schedules.</li>
                            <li>Innovative services, including psychotherapy registration and patient feedback surveys.</li>
                        </ul>

                        <h4>Our Mission:</h4>
                        <p>
                            Our mission at YNODoc is to improve access to healthcare services, enhance the patient experience,
                            and facilitate efficient communication between patients and healthcare providers.
                        </p>

                        <h4>Contact Us:</h4>
                        <p>
                            If you have any questions or feedback, feel free to reach out to us at <a href="mailto:info@ynodoc.com">info@ynodoc.com</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
