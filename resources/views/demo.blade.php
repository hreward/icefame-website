@extends("pagelayout")

@section("pagetitle", "Icefame Demo")

@section("pagecontent")
<section class="section-pt-space section-pb-space single-feature-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-sec">
                    <h4>Icefame</h4>
                    <h3>Demo</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-content wow fadeInRight about-content">
                    <div>
                        <h3 class="title"></h3>
                        <p>Icefame is a social contest platform that uses the power of competition to present the world's talents, creativity and precious life moment directly from their mobile phone.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center d-flex">
                <div class="feature-content wow fadeInRight about-content align-items-center">
                    <video controls style="max-height: 500px;">
                        <source src="assets/videos/icefame_demo2.mp4"/>
                    </video>
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
@endsection