@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register as a Media Practitioner</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('media_practitioners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" required>
        </div>
        <div class="form-group">
            <label for="media_house">Media House</label>
            <input type="text" class="form-control" name="media_house" required>
        </div>
        <div class="form-group">
            <label for="credentials">Upload Credentials</label>
            <input type="file" class="form-control" name="credentials" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
