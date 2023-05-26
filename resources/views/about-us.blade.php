@extends("pagelayout")
<!-- register section start -->

@section("pagetitle", "About Us")

@section("pagecontent")
<section class="section-pt-space section-pb-space single-feature-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-sec">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vector-section about-image">
                    <img src="assets/images/about.jpg" class="img-fluid blur-up lazyload wow zoomIn"
                        data-wow-delay="0.20s" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-content wow fadeInRight about-content">
                    <div>
                        <h3 class="title"></h3>
                        <p>Icefame is a video-sharing app that allows users (entertainers) around the world to compete with other users for money and fame using short videos.</p>

                        <h3 class="title"></h3>
                        <p>Icefame is built on the belief that there are millions of talents out there in the world that either lacks the opportunity to express themselves or restrained from expressing it due to social or economic factors.</p>
                        <ul class="feature-lisiting">
                            <li>
                                <i-feather class="" name="check-square"></i-feather>
                                Simple, fun and engaging.
                            </li>
                            <li>
                                <i-feather class="" name="check-square"></i-feather>
                                You determine the winner of a contest by your votes.
                            </li>
                            <li>
                                <i-feather class="" name="check-square"></i-feather>
                                Register in a minute by your Email ID
                            </li>
                        </ul>
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
<!-- register section end -->

@include("partials.team")

@endsection

