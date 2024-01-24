<!-- resources/views/admin/surveys.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>Admin Panel - Survey Responses</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient ID</th>
                <th>Question 1</th>
                <th>Question 2</th>
                <!-- Add other survey questions as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($surveys as $survey)
                <tr>
                    <td>{{ $survey->id }}</td>
                    <td>{{ $survey->patient_id }}</td>
                    <td>{{ $survey->question1 }}</td>
                    <td>{{ $survey->question2 }}</td>
                    <!-- Add other survey questions as needed -->
                    <!-- Add admin actions for survey responses as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
