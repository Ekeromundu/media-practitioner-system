@extends('layouts.app')

@section('content')

<!-- <script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!-- <script src="{{asset('frontend/js/slick.min.js')}}"></script> -->
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- <script src="{{asset('js/sweetalert2/sweetalert2.min.js') }}"></script> -->
<script>
    var all = false;
    $(document).ready(function() {
        console.log('all', all);
        console.log('jQuery version:', $.fn.jquery);
        $(".all").hide();

        $('.rate').click(function(e) {
            console.log('clicked')
            e.preventDefault();
            //$("#overlay").fadeIn(300);
            var officer_id = $(this).attr('officer_id');
            // var deposit_amount = $(this).attr('deposit_amount');
            // var deposit = $(this).attr('quotation_id');
            $.ajax({
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                url: "{{route('feedback.create')}}",
                dataType: 'json',
                data: {
                    officer_id: officer_id
                },
                // success: function(response) {
                //    // $("#overlay").fadeOut(300);
                //     if (response.code == 200) {
                //         window.location.href = response.data.payment_link_url;
                //     } else {
                //         alert(response.message)
                //     }
                // }
            });
        });

        $('.view_all').click(function(e) {
            $(".paginated").hide();
            $(".all").show();
            console.log('Button clicked');
            e.preventDefault();
            all = true;
            console.log('Button clicked', all);
        });

        $('#modalAssign').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget); // Button that triggered the modal
            var officer = button.data('officer');
            console.log('prac', officer)
            console.log('reco', officer.award / recognitions)
            console.log('loc', officer.location)
            //console.log('reco', practitioner.user.date_of_birth)
            var name = button.data('name'); // Extract data from data-* attributes
            var email = button.data('email');
            var contact = button.data('contact');
            var gender = button.data('gender');
            var city = button.data('city');
            var image = button.data('image') || 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'; // Default image
            var gender = button.data('gender');
            var city = button.data('city');
            var city = button.data('city');

            // Update the modal's content
            var modal = $(this);
            modal.find('#officerName').text(name);
            modal.find('#officerEmail').text(email);
            modal.find('#inputName').val(name);
            modal.find('#inputEmail').val(email);
            modal.find('#inputContact').val(contact);
            modal.find('#inputGender').val(gender);
            modal.find('#inputCity').val(city);
            modal.find('#officerImage').attr('src', image);
            modal.find('#mobile').val(officer.user.contact_number);
            modal.find('#surname').val(officer.user.surname);
            modal.find('#organization').val(officer.organization);
            // modal.find('#location').val(officer.location.name);
            modal.find('#recognitions').val(officer.award / recognitions);

            modal.find('#specialization').val(officer.specialization);
            modal.find('#experience_level').val(officer.experience_level);
            modal.find('#date').val(formatDate(officer.user.date_of_birth));
            modal.find('#gender').val(officer.user.gender);
            modal.find('#oragnization').val(officer.organization);
            modal.find('#description').val(officer.description);
            // modal.find('#recognitions').val(officer.award/recognitions);

        });
    });

    function formatDate(dateString) {
        const date = new Date(dateString);
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based
        const year = date.getFullYear();
        return `${day}/${month}/${year}`; // Format as DD/MM/YYYY
    }


    function myFunction() {
        var input, filter, tables, i, j, tr, td, txtValue;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        tables = document.querySelectorAll(".table tbody"); // Target all tbody elements

        tables.forEach(function(table) {
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Assuming you want to search by the first column (Name)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-12 mb-3 mb-lg-5">
            <div class="overflow-hidden card table-nowrap table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Public Relations Officers</h5>
                    <a href="#!" class="btn btn-light btn-sm  view_all">View All</a>
                </div>
                <div>
                    <input type="search" class="form-control rounded" id="myInput" onkeyup="myFunction()" placeholder="Search PRO's" aria-label="Search" aria-describedby="search-addon" />
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
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="all" v-if="all" class="all">
                            @foreach($allOfficers as $officer)
                            <tr class="align-middle">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-between w-100">
                                            <div class="h6 mb-0 lh-1">{{ $officer->user->name }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $officer->user->email }}</td>
                                <td><span class="d-inline-block align-middle">{{ $officer->user->contact_number }}</span></td>
                                <td><span>{{ $officer->user->gender }}</span></td>
                                <td>{{ $officer->location->name }}</td>
                                <td>
                                    <div>

                                    <a href="{{ url('feedback/media/1/'.$officer.'/create')}}"
 
                                            officer_id="{{ $officer->id }}"
                                            data-backdrop="static"
                                            class="btn btn-primary rounded pull-right "
                                            style="margin-right:30px">
                                            <i class="fa fa-star"></i> Rate
                                        </a>
                                        <a

                                            href="#modalAssign"
                                            data-toggle="modal"
                                            data-officer="{{$officer}}"
                                            data-name="{{ $officer->user->name }}"
                                            data-email="{{ $officer->user->email }}"
                                            data-contact="{{ $officer->user->contact_number }}"
                                            data-gender="{{ $officer->user->gender }}"
                                            data-city="Swakopmund"
                                            class="btn btn-primary rounded pull-right"
                                            style="margin-right:30px">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tbody id="paginated" v-else class="paginated">
                            @foreach($officers as $officer)
                            <tr class="align-middle">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-between w-100">
                                            <div class="h6 mb-0 lh-1">{{ $officer->user->name }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $officer->user->email }}</td>
                                <td><span class="d-inline-block align-middle">{{ $officer->user->contact_number }}</span></td>
                                <td><span>{{ $officer->user->gender }}</span></td>
                                <td>{{ $officer->location->name }}</td>
                                <td>
                                    <div>
                                    <!-- feedback/media/{pro_id}/create -->
                                        <a href="{{ url('feedback/media/1/'.$officer.'/create')}}"

                                            officer_id="{{ $officer->id }}"
                                            data-backdrop="static"
                                            class="btn btn-primary rounded pull-right "
                                            style="margin-right:30px">
                                            <i class="fa fa-star"></i> Rate
                                        </a>
                                        <a

                                            href="#modalAssign"
                                            data-toggle="modal"
                                            data-officer="{{$officer}}"
                                            data-name="{{ $officer->user->name }}"
                                            data-email="{{ $officer->user->email }}"
                                            data-contact="{{ $officer->user->contact_number }}"
                                            data-gender="{{ $officer->user->gender }}"
                                            data-city="Swakopmund"
                                            class="btn btn-primary rounded pull-right"
                                            style="margin-right:30px">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                    <div class="modal fade bd-example-modal-lg" id="modalAssign" tabindex="-1" role="dialog" aria-labelledby="myLargemodalAssignLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalAssignLabel">Officer Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container rounded bg-white mt-5 mb-5">
                                        <div class="row">
                                            <div class="col-md-3 border-right">
                                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                    <img id="officerImage" class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                                    <span id="officerName" class="font-weight-bold"></span>
                                                    <span id="officerEmail" class="text-black-50"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 border-right">
                                                <div class="p-3 py-5">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h4 class="text-right">Profile</h4>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6"><label class="labels">Name</label><input id="inputName" type="text" class="form-control" value=""></div>
                                                        <div class="col-md-6"><label class="labels">Surname</label><input id="surname" type="text" class="form-control" value=""></div>

                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12"><label class="labels">Mobile Number</label><input id="mobile" type="number" class="form-control" value=""></div>
                                                        <div class="col-md-12" style="margin-top: 15px;"><label class="labels">Email Address</label><input id="inputEmail" type="email" class="form-control" value=""></div>
                                                        <div class="col-md-12" style="margin-top: 15px;"><label class="labels">Gender</label><input id="gender" type="text" class="form-control" value=""></div>
                                                        <div class="col-md-12" style="margin-top: 15px;"><label class="labels">Date Of Birth</label><input id="date" type="text" class="form-control" value=""></div>
                                                        <!-- <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control"  value=""></div> -->
                                                        <!-- <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" value=""></div> -->
                                                        <!-- <div class="col-md-12"><label class="labels">Area</label><input id="location" type="text" class="form-control"  value=""></div> -->

                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-md-12"><label class="labels">Area</label><input id="location" type="text" class="form-control" value=""></div>
                                                        <!-- <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div> -->
                                                    </div>

                                                    <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div> -->


                                                    <!-- <div class="row mt-2">
                                                        <div class="col-md-6"><label class="labels">Name</label><input id="inputName" type="text" class="form-control" value="" disabled></div>
                                                        <div class="col-md-6"><label class="labels">Contact</label><input id="inputContact" type="text" class="form-control" value="" disabled></div>
                                                        <div class="col-md-6"><label class="labels">Email</label><input id="inputEmail" type="text" class="form-control" value="" disabled></div>
                                                        <div class="col-md-6"><label class="labels">Gender</label><input id="inputGender" type="text" class="form-control" value="" disabled></div>
                                                        <div class="col-md-6"><label class="labels">City</label><input id="inputCity" type="text" class="form-control" value="" disabled></div>
                                                    </div> -->
                                                    <!-- Add more fields as needed -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="p-3 py-5" style="margin-top: 30px;">
                                                    <div class="col-md-12" hidden><span>Edit Experience</span><span class="form-control"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                                                    <div class="col-md-12"><label class="labels">Organization</label><input id="organization" type="text" class="form-control" value=""></div>

                                                    <div class="col-md-12" style="margin-top: 15px;"><label class="labels">Experience Level</label><input id="experience_level" type="text" class="form-control" value=""></div>
                                                    <div class="col-md-12" style="margin-top: 15px;"><label class="labels">Recognitions</label><input id="recognitions" type="text" class="form-control" value=""></div>
                                                    <div class="col-md-12" style="margin-top: 15px;"><label class="labels">Note</label><input id="description" type="text" class="form-control" value=""></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

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

    .star-rating {
        direction: rtl;
        display: inline-block;
        padding: 20px;
    }

    .star-rating input[type="radio"] {
        display: none;
    }

    .star-rating label {
        color: #bbb;
        font-size: 20px;
        padding: 0;
        cursor: pointer;
    }

    .star-rating label:before {
        content: '★';
    }

    .star-rating input[type="radio"]:checked~label {
        color: #f2b600;
    }

    .star-rating input[type="radio"]:checked~label~label {
        color: #bbb;
    }

    body {
        background: rgb(99, 39, 120)
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>

@push('scripts')

<!-- <script src="{{asset('frontend/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/sweetalert2/sweetalert2.min.js') }}"></script> -->

<link rel="stylesheet" href="{{ asset('js/sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
@endpush



<!-- <script>
    $(document).ready(function() {
        $('.rate').click(function(e) {
            console.log('clicked')
            e.preventDefault();
            //$("#overlay").fadeIn(300);
            var practitioner_id = $(this).attr('practitioner_id');
           // var deposit_amount = $(this).attr('deposit_amount');
           // var deposit = $(this).attr('quotation_id');
            $.ajax({
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                 url: "{{route('feedback.create')}}",
                dataType: 'json',
                data: {
                    practitioner_id: practitioner_id
                },
                // success: function(response) {
                //    // $("#overlay").fadeOut(300);
                //     if (response.code == 200) {
                //         window.location.href = response.data.payment_link_url;
                //     } else {
                //         alert(response.message)
                //     }
                // }
            });
        });
    });
</script> -->
@endpush