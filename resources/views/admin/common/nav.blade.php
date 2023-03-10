<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="index.php" class="header-logo">
                        <img src="{{url('view/images/logo.png')}}" class="img-fluid rounded-normal" alt="">
                        <div class="pt-2 pl-2 logo-title">
                            <span class="text-primary text-uppercase">Muzik</span>
                        </div>
                    </a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    <li class="nav-item nav-icon">
                        <div class="iq-search-bar">
                            <form action="#" class="searchbox">
                                <input type="text" name="search" class="text search-input" placeholder="Search Here..">
                                <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                                <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded"><span class="ripple rippleEffect "></span>
                            <i class="ri-search-line text-black"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                            <input type="text" class="text search-input" placeholder="Type here to search...">
                            <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                            <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                        </form>
                    </li>
                    <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                            <img src="{{url('uploads/img') .'/'. (Auth::user()->image?? 'user.png') }}" class="img-fluid rounded-circle" alt="user">
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">Hello</h5>
                                        <span class="text-white font-size-12">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                    </div>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="bg-primary iq-sign-btn" href="{{route('admin.logout')}}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- TOP Nav Bar END -->
@yield('nav')
