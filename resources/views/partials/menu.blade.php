<!-- header section start -->
<header class="no-sticky sticky bg-transparentxx home-landing">
    <div class="container container-fluid custom-padding">
        <div class="header-section">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="{{ route('index') }}" class=""><img style="max-width: 20vh;" src="assets/images/icon/logo-color.png" alt="logo" class="img-fluid blur-up lazyload"></a>
                </div>
            </div>
            <div class="header-right">
                <nav class="navbar navbar-expand-lg pe-0">
                    <div class="overlay-bg"></div>
                    <button class="navbar-toggler p-0" type="button">
                        <i-feather name="menu" class="icon iw-22 ih-22 icon-light"></i-feather>
                    </button>
                    <div class="navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item d-block d-lg-none back-btn">
                                <a class="nav-link" href="javascript:void(0)">back</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}" >Home</a>
                            </li>
                            <li class="nav-item" routerLinkActive="active">
                                <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                            </li>
                            <li class="nav-item" routerLinkActive="active">
                                <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
                            </li>
                            <li class="nav-item" routerLinkActive="active">
                                <a class="nav-link" href="{{ route('demo') }}">Demo</a>
                            </li>
                            <li class="nav-item d-none" routerLinkActive="active">
                                <a class="nav-link" href="{{ route('career') }}">career</a>
                            </li>
                            <li class="nav-item" routerLinkActive="active">
                                <a class="nav-link" href="{{ route('faq') }}">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center btn btn-white" href="{{ route('download') }}"><i-feather class="me-2 iw-18 ih-18" name="log-in"></i-feather>Get App</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center btn btn-white" href="{{ route('app') }}"><i-feather class="me-2 iw-18 ih-18" name="log-in"></i-feather>Sign in</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- header section end -->