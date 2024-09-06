@extends('layouts.app')

@section('content')
<div class="container">
<div class="text-center">
<img src=  "{{ asset('images/GRN.PNG') }}" width="200px" height="200px">
    <h2>Register as a Media Practitioner</h2>
    </div>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('media_practitioners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row"> 
           
        <div class="form-group col-md-4">
            <label for="name">Surname</label>
            <input type="text" class="form-control" name="Surname" >
        </div>

        <div class="form-group col-md-4">
            <label for="madname">Maiden name</label>
            <input type="text" class="form-control" name="maiden_name" >
        </div>
        <div class="form-group col-md-4">
            <label for="firstname">First names</label>
            <input type="text" class="form-control" name="firstname" >
        </div>
        <div class="form-group col-md-4">
            <label for="fname">Date Of Birth</label>
            <input type="date" class="form-control" name="DOB" >
        </div>
        <div class="form-group col-md-4">
            <label for="fname">Place Of Birth</label>
            <input type="text" class="form-control" name="POB" >
        </div>
        <div class="form-group col-md-4">
            <label for="fname">Nationality</label>
            <input type="text" class="form-control" name="nationality" >
        </div>
        <div class="form-group col-md-4">
            <label for="fname">ID/Passport NO</label>
            <input type="text" class="form-control" name="ID" >
        </div>
        <div class="form-group col-md-4">
            <label for="fname">Sex</label>
            <input type="text" class="form-control" name="sex" >
        </div>

        <div class="form-group col-md-4">
            <label for="fname">Employer(if not a freelance)</label>
            <input type="text" class="form-control" name="employer" >
        </div>
        <div class="col-md-12">
        <div class="card">
        <h5 class="card-title">Business Address</h5>
       
        <div class="form-group col-md-8">
            <label for="email">Tel</label>
            <input type="text" class="form-control" name="baddress" required>
        </div>
        <div class="row"> 

        <div class="form-group col-md-4">
            <label for="email">Tel</label>
            <input type="email" class="form-control" name="tel" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Fax</label>
            <input type="email" class="form-control" name="fax" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        </div>


        
        </div>
        </div>

        <div class="col-md-12">
        <div class="card">
        <h5 class="card-title">Residential  Address</h5>
       
        <div class="form-group col-md-8">
            <label for="email">Tel</label>
            <input type="text" class="form-control" name="raddress" required>
        </div>
        <div class="row"> 

        <div class="form-group col-md-4">
            <label for="email">Tel</label>
            <input type="text" class="form-control" name="rtel" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Fax</label>
            <input type="text" class="form-control" name="rfax" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="remail" required>
        </div>
        </div>
        </div>
        </div>
        <div class="form-group col-md-10">
            <label for="capacity"> In which capacity are you employed (political corespondent , sports writing , photographer etc)</label>
            <input type="text" class="form-control" name="capacity" required>
        </div>


        <div class="col-md-12">
        <div class="card">
        <h5 class="card-title"> If freelancing or acting as a stringer provide the following information</h5>
       
        <div class="form-group col-md-8">
            <label for="email">Name of Institution</label>
            <input type="text" class="form-control" name="institutionaddress" required>
        </div>
        <div class="row"> 

        <div class="form-group col-md-4">
            <label for="email">Postal address</label>
            <input type="text" class="form-control" name="postadd" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">City/ Town</label>
            <input type="text" class="form-control" name="city" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Country</label>
            <input type="text" class="form-control" name="country" required>
        </div>

        <div class="form-group col-md-4">
            <label for="email">Contact Person</label>
            <input type="text" class="form-control" name="contact" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Tel</label>
            <input type="text" class="form-control" name="instutitionTel" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="instutitionEmail" required>
        </div>
        </div>
        </div>
        </div>

        <div class="col-md-12">
        <div class="card">
        <h5 class="card-title"> <b> Details of visa/residence/work permit : </b> to be completed by all media representatives who are not citizens of the Republic of Namibia
        <div class="row"> 
        <div class="form-group col-md-4">
            <label for="email"> Visa Number </label>
            <input type="text" class="form-control" name="visa" required>
        </div>
        

        <div class="form-group col-md-4">
            <label for="email">Issued at</label>
            <input type="text" class="form-control" name="issuedat" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email">Date issued</label>
            <input type="date" class="form-control" name="dateissued" required>
        </div>
        <div class="form-group col-md-4">
            <label for="email"> Expiry date</label>
            <input type="date" class="form-control" name="expirydate" required>
        </div>

             </div>
        </div>
        </div>
    
        <div class="form-group col-md-12">
            <label for="credentials">Upload profile picture </label>
            <input type="file" class="form-control" name="profile_photo" required>
        </div>
        <div class="form-group col-md-12">
        <p> I here by apply for media accreditation with the Ministry of Information and Communication Technology </p><br>

        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form>
</div>
@endsection
