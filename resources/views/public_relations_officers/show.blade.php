@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $pro->name }}'s Profile</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pro->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $pro->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $pro->phone }}</p>
            <p class="card-text"><strong>Department:</strong> {{ $pro->department }}</p>
            <p class="card-text"><strong>Professional History:</strong> {{ $pro->professional_history }}</p>
            @if($pro->credentials)
            <p class="card-text"><a href="{{ asset('storage/' . $pro->credentials) }}" target="_blank">View Credentials</a></p>
            @endif
        </div>
    </div>
</div>
@endsection
