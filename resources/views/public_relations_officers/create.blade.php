@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register as a Public Relations Officer</h2>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('public_relations_officers.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="department">Department</label>
            <input type="text" class="form-control" name="department" required>
        </div>
        <div class="form-group">
            <label for="credentials">Upload Credentials</label>
            <input type="file" class="form-control" name="credentials" required>
        </div>
        <div class="form-group">
            <label for="professional_history">Professional History</label>
            <textarea class="form-control" name="professional_history"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
