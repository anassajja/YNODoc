<!-- resources/views/appointments/create.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Schedule Appointment') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('appointments.create') }}">
                        @csrf

                        <div class="form-group">
                            <label for="doctor_id">{{ __('Select Doctor') }}</label>
                            <select id="doctor_id" name="doctor_id" class="form-control" required>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }} ({{ $doctor->specialty }})</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="appointment_date">{{ __('Appointment Date') }}</label>
                            <input type="datetime-local" id="appointment_date" name="appointment_date" class="form-control" required>
                        </div>

                        <!-- Add other form fields as needed -->

                        <button type="submit" class="btn btn-primary">{{ __('Schedule Appointment') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
