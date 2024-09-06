<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barista Cafe HTML CSS Template</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href={{asset('frontend/css/vegas.min.css')}} rel="stylesheet">

    <link href="{{asset('frontend/css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/tooplate-barista.css')}}" rel="stylesheet">

    <!--

Tooplate 2137 Barista Cafe

https://www.tooplate.com/view/2137-barista-cafe

Bootstrap 5 HTML CSS Template

-->
</head>

<style>
    .purple-box {
        background: #6a1b9a;
        /* Deep Purple */
    }

    .btn-more:hover {
        background-color: #077a86;
        /* Darker shade for hover effect */
    }

    .curvy-box p {
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #666;
        line-height: 1.6;
    }

    .btn-more {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #09a8b5;
        /* Button background color */
        color: #ffffff;
        /* Button text color */
        border-radius: 5px;
        text-decoration: none;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 600;
    }

    .curvy-box:hover {
        transform: translateY(-10px);
        /* Lift the box on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        /* Enhance shadow on hover */
    }

    .curvy-box h4 {
        margin-bottom: 15px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 600;
        color: #333;
    }

    .curvy-boxes-section {
        padding: 60px 0;
        background-color: #f8f9fa;
        /* Light background color */
    }

    .curvy-box {
        background: #ffffff;
        /* Box background color */
        border-radius: 20px;
        /* Curvy corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
        padding: 20px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
        /* For positioning the button */
    }

    .curvy-box p {
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: #666;
        line-height: 1.6;
    }

    .curvy-box:hover {
        transform: translateY(-10px);
        /* Lift the box on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        /* Enhance shadow on hover */
    }

    .curvy-box h4 {
        margin-bottom: 15px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 600;
        color: #333;
    }

    .curvy-boxes-section {
        padding: 60px 0;
        background-color: #f8f9fa;
        /* Light background color */
    }

    .curvy-box {
        background: #ffffff;
        /* Box background color */
        border-radius: 20px;
        /* Curvy corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
        padding: 20px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .container-inline {
        display: flex;
        flex-direction: row;
        overflow-x: auto;
        /* Allows horizontal scrolling if needed */
        gap: 20px;
        /* Space between sections */
    }

    .section {
        flex: 1;
        min-width: 300px;
        /* Adjust based on desired section width */
        box-sizing: border-box;
        /* Includes padding and border in the width calculation */
    }

    /* Optional: Make sure images and videos fit within their containers */
    .section img,
    .section video {
        max-width: 100%;
        height: auto;
        /* Maintain aspect ratio */
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.5);
        /* 0.5 is the opacity level, adjust as needed */
        backdrop-filter: blur(10px);
        /* Optional: Adds a blur effect for better visual appeal */
    }

    main {
        padding-top: 70px;
        /* Adjust based on the height of your navbar */
        height: calc(100vh - 70px);
        /* Optional: Adjust height of the main block if you want it to occupy the remaining viewport height */
        box-sizing: border-box;
        /* Ensure padding is included in the height calculation */
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>


<body>

    <main>
        <nav class="navbar navbar-expand-lg " style="width:auto">
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


        <section class="hero-section d-flex justify-content-center align-items-center" style="background-color: #844705" id="section_1">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12 mx-auto">
                        <em class="small-text">Welcome to </em>

                        <h1>MICT - Media Practitioners</h1>

                        <p class="text-white mb-4 pb-lg-2">
                            Online <em>Registration</em> Portal.
                        </p>

                        <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="#section_2">
                            Login
                        </a>

                        <a class="btn custom-btn smoothscroll me-2 mb-2" href="#section_3"><strong>Register</strong></a>
                    </div>

                </div>
            </div>

            <div class="hero-slides"></div>
        </section>
        <!-- <div class="row"> -->
        <!-- <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
        <div class="item-wrapper">
          <div class="card-box align-left">
            <div class="iconfont-wrapper">
              <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
            </div>
            <h5 class="card-title mbr-fonts-style display-5"><strong>Public users</strong></h5>
            <p class="card-text mbr-fonts-style display-7">
              A publicly accessible and searchable register of certified media practitioners is now available. Users can submit feedback and rate Public Relations Officers (PROs) from all Ministries, Agencies, and Organizations (OMA) based on their performance and professionalism.The public can report issues related to any OMA, allowing MICT to monitor responses from PROs.<br></p>

            <div class="mbr-section-btn item-footer">
              <a href="{{ route('media_practitioners.index') }}" class="btn item-btn btn-primary display-7">Learn More</a>
            </div>
          </div>
        </div>
      </div> -->
        <!-- <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
        <div class="item-wrapper">
          <div class="card-box align-left">
            <div class="iconfont-wrapper">
              <span class="mbr-iconfont mobi-mbri-user-2 mobi-mbri"></span>
            </div>
            <h5 class="card-title mbr-fonts-style display-5"><strong>Media Practitioner</strong></h5>
            <p class="card-text mbr-fonts-style display-7">&nbsp;Media practitioners can now securely submit their credentials through an online portal to obtain certification.&nbsp;A robust verification system is in place to ensure the authenticity of all registrations.&nbsp;After registration, you can choose to collect your media card at the MICT office or have it delivered via courier</p>

            <div class="mbr-section-btn item-footer">
              <a href="{{ route('media_practitioners.create') }}" class="btn item-btn btn-primary display-7">Learn More</a>
            </div>
          </div>
        </div>
      </div> -->
        <!-- <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
        <div class="item-wrapper">
          <div class="card-box align-left">
            <div class="iconfont-wrapper">
              <span class="mbr-iconfont mbri-edit"></span>
            </div>
            <h5 class="card-title mbr-fonts-style display-5"><strong>Public Relations Officers (PRO)&nbsp;</strong></h5>
            <p class="card-text mbr-fonts-style display-7">
               A publicly accessible register of Public Relations Officers is available, where you can view their profiles, credentials, and professional history. The system will track engagement rates of PROs both on social media and through government websites.
            </p>

            <div class="mbr-section-btn item-footer">
              <a href="{{ route('public_relations_officers.index') }}" class="btn item-btn btn-primary display-7">Learn More</a>
            </div>
          </div>
        </div>
      </div> -->
        <!-- </div> -->
        <section class="curvy-boxes-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="curvy-box purple-box">
                            <h4>Public Users</h4>
                            <p>A searchable register of certified media practitioners is available. Users can submit feedback, rate PROs, and report issues to MICT for better monitoring and response.</p>
                            <a href="{{ url('media-practitioners')}}" class="btn-more">More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="curvy-box">
                            <h4>Media Practitioners</h4>
                            <p>Media practitioners can securely submit their credentials online for certification. Verification is robust, and you can choose between picking up your media card or having it delivered.</p>
                            <a href="#" class="btn-more">More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="curvy-box">
                            <h4>Public Relations Officers (PRO)</h4>
                            <p>View profiles, credentials, and history of Public Relations Officers. The system tracks engagement rates on social media and government sites.</p>
                            <a href="{{ url('public-relations-officers')}}" class="btn-more">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- <div class="container-inline">
            <section class="about-section section-padding section" id="section_2" style="padding: 60px 0; background-color: transparent;">
                <div class="section-overlay"></div>
                <div class="ratio ratio-1x1" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <img src="{{asset('frontend/css/star.png')}}" alt="Star Icon" style="width: 80px; height: 80px; margin-bottom: 20px;">
                    <div class="about-video-info d-flex flex-column" style="padding: 20px; background: #09a8b5; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <h4 class="mt-auto" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 600; color: #2c3e50; margin-bottom: 15px;">Public Relations Officers (PRO)</h4>
                        <p style="font-family: 'Plus Jakarta Sans', sans-serif; color: #34495e; line-height: 1.6;">A publicly accessible register of Public Relations Officers is available, where you can view their profiles, credentials, and professional history. The system will track engagement rates of PROs both on social media and through government websites.</p>
                    </div>
                </div>
            </section>

            <section class="about-section section-padding section" id="section_2" style="padding: 60px 0;">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="ratio ratio-1x1" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                <video autoplay="" loop="" muted="" class="custom-video" poster="" style="width: 100%; height: auto;">
                                    <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="about-video-info d-flex flex-column" style="padding: 20px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    <h4 class="mt-auto" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 600; color: #333; margin-bottom: 15px;">We Started Since 2009.</h4>
                                    <h4 style="font-family: 'Plus Jakarta Sans', sans-serif; color: #333;">Best Cafe in Klang.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-section section-padding section" id="section_3" style="padding: 60px 0; background-color: #422a07;">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="ratio ratio-1x1" style="text-align: center;">
                                <video autoplay="" loop="" muted="" class="custom-video" poster="" style="width: 100%; height: auto;">
                                    <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <img src="{{asset('frontend/css/star.png')}}" alt="Star Icon" style="width: 100px; height: 100px; display: block; margin: 20px auto;">
                                <div class="about-video-info d-flex flex-column" style="padding: 20px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    <h4 class="mt-auto" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 600; color: #333; margin-bottom: 15px;">Public Relations Officers (PRO)</h4>
                                    <p style="font-family: 'Plus Jakarta Sans', sans-serif; color: #666; line-height: 1.6;">A publicly accessible register of Public Relations Officers is available, where you can view their profiles, credentials, and professional history. The system will track engagement rates of PROs both on social media and through government websites.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div> -->


        <!-- <section class="barista-section section-padding section-bg" id="barista-team">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                                <em class="text-white">Creative Baristas</em>

                                <h2 class="text-white">Meet People</h2>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Steve</h4>

                                            <p class="badge ms-4"><em>Boss</em></p>
                                        </div>

                                        <p class="text-white mb-0">your favourite coffee daily lives tempor.</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/team/portrait-elegant-old-man-wearing-suit.jpg" class="team-block-image img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Sandra</h4>

                                            <p class="badge ms-4"><em>Manager</em></p>
                                        </div>

                                        <p class="text-white mb-0">your favourite coffee daily lives.</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/team/cute-korean-barista-girl-pouring-coffee-prepare-filter-batch-brew-pour-working-cafe.jpg" class="team-block-image img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Jackson</h4>

                                            <p class="badge ms-4"><em>Senior</em></p>
                                        </div>

                                        <p class="text-white mb-0">your favourite coffee daily lives.</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/team/small-business-owner-drinking-coffee.jpg" class="team-block-image img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Michelle</h4>

                                            <p class="badge ms-4"><em>Barista</em></p>
                                        </div>

                                        <p class="text-white mb-0">your favourite coffee daily consectetur.</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/team/smiley-business-woman-working-cashier.jpg" class="team-block-image img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> -->


        <!-- <section class="menu-section section-padding" id="section_3">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                <div class="menu-block-wrap">
                                    <div class="text-center mb-4 pb-lg-2">
                                        <em class="text-white">Delicious Menu</em>
                                        <h4 class="text-white">Breakfast</h4>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Pancakes</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$12.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h6>
                                                Toasted Waffle
                                            </h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="text-white ms-auto"><del>$16.50</del></strong>

                                            <strong class="ms-2">$12.00</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Fried Chips
                                                <span class="badge ms-3">Recommend</span>
                                            </h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$15.0</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Rich Milk and Foam</small>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h6>Pancakes</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$12.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Banana Cakes</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$18.0</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Rich Milk and Foam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="menu-block-wrap">
                                    <div class="text-center mb-4 pb-lg-2">
                                        <em class="text-white">Favourite Menu</em>
                                        <h4 class="text-white">Coffee</h4>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Latte</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="text-white ms-auto"><del>$12.50</del></strong>

                                            <strong class="ms-2">$7.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h6>
                                                White Coffee
                                                <span class="badge ms-3">Recommend</span>
                                            </h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$5.90</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Chocolate Milk</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$5.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Rich Milk and Foam</small>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h6>Greentea</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$7.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Dark Chocolate</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$7.25</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Rich Milk and Foam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> -->


        <!-- <section class="reviews-section section-padding section-bg" id="section_4">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                                <em class="text-white">Reviews by Customers</em>

                                <h2 class="text-white">Testimonials</h2>
                            </div>

                            <div class="timeline">
                                <div class="timeline-container timeline-container-left">
                                    <div class="timeline-content">
                                        <div class="reviews-block">
                                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                                <img src="images/reviews/young-woman-with-round-glasses-yellow-sweater.jpg" class="reviews-block-image img-fluid" alt="">

                                                <div class="">
                                                    <h6 class="text-white mb-0">Sandra</h6>
                                                    <em class="text-white"> Customers</em>
                                                </div>
                                            </div>

                                            <div class="reviews-block-info">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                                <div class="d-flex border-top pt-3 mt-4">
                                                    <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                                    <div class="reviews-group ms-auto">
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-container timeline-container-right">
                                    <div class="timeline-content">
                                        <div class="reviews-block">
                                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                                <img src="images/reviews/senior-man-white-sweater-eyeglasses.jpg" class="reviews-block-image img-fluid" alt="">

                                                <div class="">
                                                    <h6 class="text-white mb-0">Don</h6>
                                                    <em class="text-white"> Customers</em>
                                                </div>
                                            </div>

                                            <div class="reviews-block-info">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                                <div class="d-flex border-top pt-3 mt-4">
                                                    <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                                    <div class="reviews-group ms-auto">
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-container timeline-container-left">
                                    <div class="timeline-content">
                                        <div class="reviews-block">
                                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                                <img src="images/reviews/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg" class="reviews-block-image img-fluid" alt="">

                                                <div class="">
                                                    <h6 class="text-white mb-0">Olivia</h6>
                                                    <em class="text-white"> Customers</em>
                                                </div>
                                            </div>

                                            <div class="reviews-block-info">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                                <div class="d-flex border-top pt-3 mt-4">
                                                    <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                                    <div class="reviews-group ms-auto">
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star-fill"></i>
                                                        <i class="bi-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> -->

        <!-- 
                <section class="contact-section section-padding" id="section_5">
                    <div class="container">
                        <div class="row">   

                            <div class="col-lg-12 col-12">
                                <em class="text-white">Say Hello</em>
                                <h2 class="text-white mb-4 pb-lg-2">Contact</h2>
                            </div>

                            <div class="col-lg-6 col-12">
                                <form action="#" method="post" class="custom-form contact-form" role="form">

                                <div class="row">
                                    
                                    <div class="col-lg-6 col-12">
                                        <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Jackson" required="">
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label for="email" class="form-label">Email Address</label>

                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jack@gmail.com" required="">
                                    </div>

                                    <div class="col-12">
                                        <label for="message" class="form-label">How can we help?</label>

                                        <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                        
                                    </div>
                                </div>

                                <div class="col-lg-5 col-12 mx-auto mt-3">
                                    <button type="submit" class="form-control">Send Message</button>
                                </div>
                            </form>
                            </div>

                            <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5039.668141741662!2d72.81814769288509!3d19.043340656729775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c994f34a7355%3A0x2680d63a6f7e33c2!2sLover%20Point!5e1!3m2!1sen!2sth!4v1692722771770!5m2!1sen!2sth" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                            </div>

                        </div>
                    </div>
                </section> -->


        <footer class="text-center text-white">
            <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2024 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MICT</a>
            </div>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('frontend/js/click-scroll.js')}}"></script>
    <script src="{{asset('frontend/js/vegas.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>

    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}assets/smoothscroll/smooth-scroll.js"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}assets/ytplayer/index.js"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}assets/theme/js/script.js"></script>

</body>

</html>