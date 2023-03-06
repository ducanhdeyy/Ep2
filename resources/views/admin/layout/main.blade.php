<!doctype html>
<html lang="en">
<head>
    @include('admin.common.head')
</head>
<body class="sidebar-main-active right-column-fixed">
    <!-- loader Start -->
    <div id="loading" style="display:none;">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="index.php" class="header-logo">
                    <img src="{{url('view/images/logo.png')}}" class="img-fluid rounded-normal" alt="">
                    <div class="logo-title">
                        <span class="text-primary text-uppercase">Spotify</span>
                    </div>
                </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li>
                            <a href="{{route('admin.index')}}" class="iq-waves-effect"><i class="las la-house-damage"></i><span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{route('category.index')}}" class="iq-waves-effect"><i class="ri-function-line"></i><span>Category</span></a>
                        </li>
                        <li>
                            <a href="{{route('singer.index')}}" class="iq-waves-effect"><i class="las la-microphone-alt"></i><span>Singer</span></a>
                        </li>
                        <li>
                            <a href="{{route('album.index')}}" class="iq-waves-effect"><i class="ri-record-circle-line"></i><span>Album</span></a>
                        </li>
                        <li>
                            <a href="{{route('song.index')}}" class="iq-waves-effect"><i class="las la-play-circle"></i><span>Song</span></a>
                        </li>
                        <li>
                            <a href="{{route('user.index')}}" class="iq-waves-effect"><i class="las la-user"></i><span>User</span></a>
                        </li>
                        <li>
                            <a href="{{route('transaction.index')}}" class="iq-waves-effect"><i class="fa fa-download" aria-hidden="true"></i><span>Transaction</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar -->
        @include('admin.common.nav')
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iq-card">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('view/js/jquery.min.js')}}"></script>
    <script src="{{url('view/js/popper.min.js')}}"></script>
    <script src="{{url('view/js/bootstrap.min.js')}}"></script>

    <script src="{{url('view/js/form-validation/jquery.validate.min.js')}}"></script>
    <script src="{{url('view/js/additional-methods.js')}}"></script>
    <script src="{{url('view/js/validate.js')}}"></script>
    <!-- Appear JavaScript -->
    <script src="{{url('view/js/jquery.appear.js')}}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{url('view/js/countdown.min.js')}}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{url('view/js/waypoints.min.js')}}"></script>
    <script src="{{url('view/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow JavaScript -->
    <script src="{{url('view/js/wow.min.js')}}"></script>
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

    <!-- am core JavaScript -->
    <script src="{{url('view/js/core.js')}}"></script>
    <!-- am charts JavaScript -->
    <script src="{{url('view/js/charts.js')}}"></script>
    <!-- am animated JavaScript -->
    <script src="{{url('view/js/animated.js')}}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{url('view/js/kelly.js')}}"></script>
    <!-- am maps JavaScript -->
    <script src="{{url('view/js/maps.js')}}"></script>
    <!-- am worldLow JavaScript -->
    <script src="{{url('view/js/worldLow.js')}}"></script>
    <!-- Style Customizer -->
    <script src="{{url('view/js/style-customizer.js')}}"></script>
    <script src="{{url('view/js/chart-custom.js')}}"></script>
    <!-- music js -->
    <script src="{{url('view/js/music-player.js')}}"></script>
    <!-- music-player js -->
    <script src="{{url('view/js/music-player-dashboard.js')}}"></script>
    <!-- Custom JavaScript -->
    <script src="{{url('view/js/custom.js')}}"></script>
</body>

</html>