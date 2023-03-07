<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Muzik - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('view/images/favicon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('view/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{url('view/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{url('view/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('view/css/responsive.css')}}">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-md-6 col-sm-12 col-12 align-self-center">
                    <div class="sign-user_card ">
                        <div class="d-flex justify-content-center">
                            <div class="sign-user_logo">
                                <img src="{{url('view/images/login/music-icon.jpg')}}" class=" img-fluid" alt="Logo">
                            </div>
                        </div>
                        <div class="sign-in-page-data">
                            <div class="sign-in-from w-100 m-auto pt-5">
                                <h1 class="mb-3 text-center">Sign Up</h1>
                                <x-alert/>
                                <form class="mt-4 form-validate" method="post" action="{{route('admin.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Your Full Name</label>
                                        <input type="text" name="name" class="form-control mb-0" id="exampleInputEmail2" placeholder="Your Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail3" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Phone number</label>
                                        <input type="text" name="phone_number" class="form-control mb-0" id="exampleInputEmail3" placeholder="Enter phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Password</label>
                                        <input type="password" name="password" class="form-control mb-0" id="password" placeholder="Password">
                                    </div>
                                    <div class="sign-info text-danger">
                                    </div>
                                    <div class="sign-info mt-3">
                                        <button type="submit" class="btn btn-primary mb-2">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex justify-content-center links">
                                    Already have an account ? <a href="{{route('login')}}" class="ml-2">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- color-customizer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('view/js/jquery.min.js')}}"></script>
    <script src="{{url('view/js/popper.min.js')}}"></script>
    <script src="{{url('view/js/bootstrap.min.js')}}"></script>
    <!-- Appear JavaScript -->
    <script src="{{url('view/js/jquery.appear.js')}}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{url('view/js/countdown.min.js')}}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{url('view/js/waypoints.min.js')}}"></script>
    <script src="{{url('view/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow JavaScript -->
    <script src="{{url('view//js/wow.min.js')}}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{url('view/js/apexcharts.js')}}"></script>

    <!-- Slick JavaScript -->
    <script src="{{url('view/js/slick.min.js')}}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{url('view/js/select2.min.js')}}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{url('view/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{url('view/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{url('view/js/smooth-scrollbar.js')}}"></script>
    <!-- Style Customizer -->
    <script src="{{url('view/js/style-customizer.js')}}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{url('view/js/chart-custom.js')}}"></script>
    <!-- Custom JavaScript -->
    <script src="{{url('view/js/custom.js')}}"></script>
</body>

</html>