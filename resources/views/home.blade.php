@extends("homelayout")

@section("pagecontent")
<!-- home section start -->
<section class="home-section overflow-hidden">
    <img src="assets/images/company-landing/home-bg.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
    <div class="home-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-2">
                    <div class="content-screen">
                        <div class="main-screen">
                            <img src="assets/images/company-landing/home-laptop.png" alt=""
                                class="img-fluid blur-up lazyload wow zoomIn" data-wow-delay="0.20s">
                        </div>
                        <div class="home-effect">
                            <img src="assets/images/company-landing/home-effect/1.png" alt="" class="img-fluid blur-up lazyload user wow zoomIn" data-wow-delay="0.60s">
                            <img src="assets/images/company-landing/home-effect/2.png" alt="" class="img-fluid blur-up lazyload user-round wow zoomIn" data-wow-delay="0.50s">
                            <img src="assets/images/company-landing/home-effect/3.png" alt="" class="img-fluid blur-up lazyload heart wow zoomIn" data-wow-delay="0.40s">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1">
                    <div class="content">
                        <div>
                            <h1>Home of <span>World's talents</span></h1>
                            <p>Icefame is a video-sharing app that allows users (entertainers) around the world to compete with other users for money and fame using short videos.</p>
                            <a href="#" class="btn btn-solid btn-lg">get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="animation-home">
        <div class="cross"></div>
        <div class="cross cross1"></div>
        <div class="tringle"></div>
        <div class="tringle tringle1"></div>
        <div class="circle"></div>
        <div class="circle circle1"></div>
    </div>
</section>
<!-- home section end -->




    
    <!-- active user section start -->
    <section class="d-none section-pb-space section-pt-space single-feature-section landing-bg overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-sec">
                        <h4>Waiting List</h4>
                        <h3>100+ on the waiting list already</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="vector-section">
                        <img src="assets/images/company-landing/active-user.svg"
                            class="img-fluid blur-up lazyload active-img wow zoomIn" data-wow-delay="0.20s" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature-content wow fadeInRight" data-wow-delay="0.25s">
                        <div>
                            <h3 class="title">Get on board and enjoy</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum blanditiis atque cum
                                iure nihil, ipsa commodi veniam, nemo ipsam sed aliquam aliquid modi totam. Quia
                                architecto nesciunt facere consectetur laudantium.</p>
                            <ul class="feature-lisiting">
                                <li>
                                    <i-feather class="" name="check-square"></i-feather>
                                    Easy to Register with your Device.
                                </li>
                                <li>
                                    <i-feather class="" name="check-square"></i-feather>
                                    Register in a minute by your Email
                                </li>
                            </ul>
                            <a [routerLink]="['download']" class="btn btn-solid btn-md">Get app now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation-home">
            <div class="cross"></div>
            <div class="cross cross1"></div>
            <div class="tringle"></div>
            <div class="tringle tringle1"></div>
            <div class="circle"></div>
            <div class="circle circle1"></div>
        </div>
    </section>
    <!-- active user section end -->

    <!-- testimonial section start -->
<section class="testimonial-section section-pb-space section-pt-space single-feature-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-sec">
                    <h3>More Than An App</h3>
                </div>
            </div>
        </div>
        <div class="row testimonial-space">
            <div class="col-lg-6 order-lg-2">
                <div class="testimonial-vector">
                    <div class="round">
                        <span></span>
                        <img src="assets/images/company-landing/logo.png" style="height: auto; width: 50px;" class="img-fluid blur-up lazyload"
                            alt="">
                    </div>
                    <div class="users-sec">
                        <div class="user-box wow zoomIn" data-wow-delay="0.10s">
                            <div class="content">
                                <h6>Simple and fun</h6>
                            </div>
                            <div class="img">
                                <img src="assets/images/user-sm/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>
                        <div class="user-box user2 wow zoomIn" data-wow-delay="0.15s">
                            <div class="img">
                                <img src="assets/images/user-sm/2.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="content bottom">
                                <h6>cool app</h6>
                            </div>
                        </div>
                        <div class="user-box user3 wow zoomIn" data-wow-delay="0.20s">
                            <div class="img">
                                <img src="assets/images/user-sm/3.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="content bottom">
                                <h6>Fun and entertaining</h6>
                            </div>
                        </div>
                        <div class="user-box user4 wow zoomIn" data-wow-delay="0.25s">
                            <div class="content">
                                <h6>Love to use</h6>
                            </div>
                            <div class="img">
                                <img src="assets/images/user-sm/4.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>
                        <div class="user-box user5 wow zoomIn" data-wow-delay="0.30s">
                            <div class="content">
                                <h6>Very engaging</h6>
                            </div>
                            <div class="img">
                                <img src="assets/images/user-sm/5.jpg" class="img-flui" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="feature-content">
                    <div>
                        <h3 class="title"></h3>
                        <p>Icefame is more than just an app. It is a community of creative and talented people from diverse backgrounds across the world who loves to express themselves through short videos with the power of competition.
                        </p>
                        <br>
                        <p>Whether you are into comedy, dance, fashion, music, rap, and any other form of entertainment. You can find your niche and audience on icefame.
                        </p>
                        <div class="user-section d-none">
                            <ul>
                                <li>
                                    <img src="assets/images/user-sm/1.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </li>
                                <li>
                                    <img src="assets/images/user-sm/2.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </li>
                                <li>
                                    <img src="assets/images/user-sm/3.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </li>
                                <li>
                                    <img src="assets/images/user-sm/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </li>
                                <li>
                                    <img src="assets/images/user-sm/5.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </li>
                                <li>
                                    <img src="assets/images/user-sm/6.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="count-status d-none">
                            <ul>
                                <li>
                                    <h4>1M+</h4>
                                    <h6>total users</h6>
                                </li>
                                <li>
                                    <h4>50+</h4>
                                    <h6>unique features</h6>
                                </li>
                                <li>
                                    <h4>10K+</h4>
                                    <h6>user reviews</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="animation-home">
        <div class="cross"></div>
        <div class="cross cross1"></div>
        <div class="tringle"></div>
        <div class="tringle tringle1"></div>
        <div class="circle"></div>
    </div>
</section>
<!-- testimonial section end -->

    @include("partials.features-list")

    @include("partials.download-app")


@endsection