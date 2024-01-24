<!-- resources/views/surveys/index.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>Patient Feedback Survey</h2>

    <form method="POST" action="{{ route('surveys.submit') }}">
        @csrf

        <div class="form-group">
            <label for="question1">Question 1: How would you rate your overall experience?</label>
            <select id="question1" name="question1" class="form-control" required>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="average">Average</option>
                <option value="poor">Poor</option>
            </select>
        </div>

        <div class="form-group">
            <label for="question2">Question 2: Would you recommend our services to others?</label>
            <select id="question2" name="question2" class="form-control" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <!-- Add other survey questions as needed -->

        <button type="submit" class="btn btn-primary">Submit Survey</button>
    </form>
</div>

@endsection
