<!-- resources/views/doctors/profile.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>{{ $doctor->name }} - {{ $doctor->specialty }}</h2>

    <!-- Display other doctor information as needed -->
</div>

@endsection
