<!-- resources/views/doctors/index.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>Doctors List</h2>

    <ul>
        @foreach($doctors as $doctor)
            <li>
                <a href="{{ route('doctors.profile', $doctor->id) }}">{{ $doctor->name }} - {{ $doctor->specialty }}</a>
            </li>
        @endforeach
    </ul>
</div>

@endsection
