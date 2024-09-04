@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Public Relations Officers</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Department</th>
                <th>View Profile</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pros as $pro)
            <tr>
                <td>{{ $pro->name }}</td>
                <td>{{ $pro->email }}</td>
                <td>{{ $pro->phone }}</td>
                <td>{{ $pro->department }}</td>
                <td><a href="{{ route('public_relations_officers.show', $pro->id) }}" class="btn btn-info">View Profile</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
