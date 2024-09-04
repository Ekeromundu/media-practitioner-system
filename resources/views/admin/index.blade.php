@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pending Practitioner Approvals</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Media House</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($practitioners as $practitioner)
            <tr>
                <td>{{ $practitioner->name }}</td>
                <td>{{ $practitioner->email }}</td>
                <td>{{ $practitioner->phone }}</td>
                <td>{{ $practitioner->media_house }}</td>
                <td>
                    <form action="{{ route('admin.approve', $practitioner->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Approve</button>
                    </form>
                    <form action="{{ route('admin.reject', $practitioner->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
