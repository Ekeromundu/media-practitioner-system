<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Bootstrap CSS (You can use the Bootstrap CDN or your compiled assets) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">

  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{asset('frontend/css/bootstrap-icons.css')}}" rel="stylesheet">

  <link href={{asset('frontend/css/vegas.min.css')}} rel="stylesheet">

  <link href="{{asset('frontend/css/tooplate-barista.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{asset('frontend/css/bootstrap-icons.css')}}" rel="stylesheet">

  <link href={{asset('frontend/css/vegas.min.css')}} rel="stylesheet">

  <link href="{{asset('frontend/css/bootstrap-grid.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/tooplate-barista.css')}}" rel="stylesheet">
  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>

  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/js/click-scroll.js')}}"></script>
  <script src="{{asset('frontend/js/vegas.min.js')}}"></script>
  <script src="{{asset('frontend/js/custom.js')}}"></script>

  <title>The jQuery Local Example</title>




  <style>
    /* Make the navbar background brown with transparency */
    .navbar {
      background-color: rgba(139, 69, 19, 0.8);
      /* Brown color with 80% opacity */
      border: none;
      /* Remove any border if present */
    }

    /* Optional: Adjust text color for better visibility */
    .navbar .nav-link {
      color: white;
      /* Adjust text color if needed */
    }

    /* Adjust the navbar brand icon if needed */
    .navbar-brand i {
      font-size: 1.5rem;
      /* Adjust icon size */
    }

    /* Ensure the body takes up full height */
    html,
    body {
      height: 100%;
      margin: 0;
    }

    /* Main content should push footer to bottom */
    .content {
      min-height: calc(100vh - 56px);
      /* Adjust based on the height of your navbar */
      /* If you use a different navbar height, adjust 56px accordingly */
    }

    /* Style the footer to be fixed at the bottom */
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #f1f1f1;
    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:fit-content">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fab fa-github fa-2x mx-3 ps-1"></i>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 40px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Media Practitioners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Public Relations Officers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


  <div class="container mt-4 content">
    @yield('content')
  </div>

  <!-- Bootstrap JS and dependencies (Optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <footer class="text-center text-white">
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MICT</a>
    </div>
  </footer>
</body>

</html>