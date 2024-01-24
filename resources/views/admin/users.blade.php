<!-- resources/views/admin/users.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>Admin Panel - Users</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Confirmed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->confirmed ? 'Yes' : 'No' }}</td>
                    <td>
                        <form action="{{ route('admin.users.confirm', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Confirm</button>
                        </form>

                        <form action="{{ route('admin.users.activate', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary">Activate</button>
                        </form>

                        <!-- Add other admin actions as needed -->

                        <a href="{{ route('admin.users.update', $user->id) }}" class="btn btn-warning">Update Info</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
