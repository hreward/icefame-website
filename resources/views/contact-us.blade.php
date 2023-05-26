@extends("pagelayout")

@section("pagetitle", "Contact Us")

@section("pagecontent")

<!-- register section start -->
<section class="section-pt-space section-pb-space single-feature-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
            <div class="col-lg-3 text-center"></div>
            <div class="col-lg-6 text-center">
                <div class="feature-content wow fadeInRight about-content" style="display: inline;">
                    <div class=" text-center">
                        <h3 class="title">We're close to you</h3>
                        <p>Send us mail</p>
                        <ul class="feature-lisiting">
                            <li>
                                <a href="mailto:hi@icefame.com">
                                    <i class="fa fa-envelope"></i>
                                    hi@icefame.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center"></div>
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