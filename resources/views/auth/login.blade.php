@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row"> 
    <div class="col-md-6">
        <div class="card">
         <form action="{{route('login_post')}}" method="post" class="box" id="registrationForm"> 
         @csrf
         <img src=  "{{ asset('images/GRN.PNG') }}">
         <h1>Login</h1>
         
         <p class="text-muted">
                 Please enter your login and password!</p>
                  <input type="text" name="email" placeholder="Username" required> 
                  @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email')}}</span>
                @endif
                  <input type="password" name="password" placeholder="Password" required>
                  @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password')}}</span>
                    @endif

                  <a class="forgot text-muted" href="#">Forgot password?</a>
                
                <button class="btn btn-dark" id="btnRegister">Login</button>

                     </form>
     </div> 
    </div>
</div>
</div>


<style>
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #fff;
}

.card{
    margin-bottom:10px;
    border: #BD3518
}

.box {
    width: 500px;
    padding: 10px ;
    position: absolute;
    top: 0%;
    left: 50%;
    background: #44BCDD;
    text-align: center;
    transition: 0.25s;
    margin-top: 10px;
    border:#BD3518;
}

.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
}

.forgot {
    text-decoration: underline
}

ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoGoogle:hover {
    background-color: #BD3518
}

.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i {
    color: #fff
}

a.socialIcon:hover,
.socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: #fff;
    transition: all 0.8s;
    transition: all 0.8s
}
.outlined-box {
    border-top: 2px solid black;
    border-right: 4px dashed red;
    border-bottom: 2px solid black;
    border-left: 4px dashed red;
}


</style>

@endsection
