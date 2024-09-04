@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mb-3 mb-lg-5">
            <div class="overflow-hidden card table-nowrap table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Media Practitioners</h5>
                    <a href="#!" class="btn btn-light btn-sm">View All</a>
                </div>
                <div>
                    <input type="search" class="form-control rounded" placeholder="Search practitioners"
                        aria-label="Search" aria-describedby="search-addon" />
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="small text-uppercase bg-body text-muted">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Gender</th>
                                <th>Town/City</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($practitioners as $practitioner)
                            <tr class="align-middle">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- <img src="{{ $practitioner->avatar }}" class="avatar sm rounded-pill me-3 flex-shrink-0" alt="Practitioner"> -->
                                        <div class="d-flex justify-content-between w-100">
                                            <div class="h6 mb-0 lh-1">{{ $practitioner->user->name }}</div>
                                            <div class="text-end">
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#" class="btn p-1" aria-expanded="false">
                                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="#!" class="f">View Details</a>
                                                        <a href="#!" class="dropdown-item">Delete user</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $practitioner->user->email }}</td>
                                <td> <span class="d-inline-block align-middle">{{ $practitioner->user->contact_number }}</span></td>
                                <td><span>{{ $practitioner->gender }}</span></td>
                                <td>Swakopmund</td>
                                <td></td> <!-- No content here since actions are in the name column -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        margin-top: 20px;
        background: #eee;
    }

    .card {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .avatar.sm {
        width: 2.25rem;
        height: 2.25rem;
        font-size: .818125rem;
    }

    .table-nowrap .table td,
    .table-nowrap .table th {
        white-space: nowrap;
    }

    .table>:not(caption)>*>* {
        padding: 0.75rem 1.25rem;
        border-bottom-width: 1px;
    }

    table th {
        font-weight: 600;
        background-color: #eeecfd !important;
    }

    .dropdown-menu {
        min-width: 8rem;
    }
</style>
@endpush

@push('scripts')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
@endpush
