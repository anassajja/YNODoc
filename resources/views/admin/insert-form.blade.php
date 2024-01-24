<!-- resources/views/admin/insert-form.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>Admin Panel - Insert Doctors and Therapists</h2>

    <form method="POST" action="{{ route('admin.insert-doctors') }}">
        @csrf

        <!-- Add form fields for inserting doctors as needed -->
        <!-- Example: <input type="text" name="doctor_name" placeholder="Doctor Name" required> -->

        <button type="submit" class="btn btn-primary">Insert Doctor</button>
    </form>

    <form method="POST" action="{{ route('admin.insert-therapists') }}">
        @csrf

        <!-- Add form fields for inserting therapists as needed -->
        <!-- Example: <input type="text" name="therapist_name" placeholder="Therapist Name" required> -->

        <button type="submit" class="btn btn-primary">Insert Therapist</button>
    </form>
</div>

@endsection
