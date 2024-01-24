<!-- resources/views/emails/contact.blade.php -->
@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>Contact</h2>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <p>Name: {{ $request->input('name') }}</p>
    <p>Email: {{ $request->input('email') }}</p>
    <p>Message: {{ $request->input('message') }}</p>
</div>
@endsection
