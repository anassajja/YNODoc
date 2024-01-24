<!-- resources/views/psychotherapies/therapists.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>Choose Your Therapist</h2>

    <form method="POST" action="{{ route('psychotherapies.subscribe') }}">
        @csrf

        <div class="form-group">
            <label for="therapist_id">Select Therapist:</label>
            <select id="therapist_id" name="therapist_id" class="form-control" required>
                @foreach($therapists as $therapist)
                    <option value="{{ $therapist->id }}">{{ $therapist->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="pack">Choose a Pack:</label>
            <select id="pack" name="pack" class="form-control" required>
                <option value="basic">Basic Pack</option>
                <option value="standard">Standard Pack</option>
                <option value="premium">Premium Pack</option>
            </select>
        </div>

        <!-- Add other form fields as needed -->

        <button type="submit" class="btn btn-primary">Proceed to Subscription</button>
    </form>
</div>

@endsection
