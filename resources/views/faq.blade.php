@extends("pagelayout")

@section("pagetitle", "Frequently Asked Questions")

@section("pagecontent")
<!-- faq section start -->
<style type="text/css">
    .accordion .card-body {
        color: #555555 !important;
        font-size: 12pt !important;
    }
    .accordion p {
        color: #555555;
        font-size: 12pt !important;
    }
</style>
<section class="section-pb-space section-pt-space help-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion theme-accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    What kind of contest can be created on icefame?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ol>
                                    <li>Talent contests such as Music, rap, dance, singing comedy magic tricks paintings, and any other performing arts</li>
                                    <li>Challenge contests such as lip-syncing, dancing, or mimicking famous movie scenes.</li>
                                    <li>Sports contests such as trick shots, parkour, or extreme sports.</li>
                                    <li>Beauty contests such as modeling, makeup, or fashion.</li>
                                    <li>Cooking contests such as recipes or creating their unique dishes.</li>
                                    <li>Travel contest: showcasing the most beautiful and interesting places they have visited.</li>
                                    <li>Pet competition: Users can submit videos of their pets doing funny or cute things.</li>
                                </ol>
                                <p>
                                    These are just a few examples of the types of contests you can create on your app. The possibilities are endless, and you can even create new and innovative contests that have never been done before. The key is to keep the contests engaging, fun, and challenging, and to offer attractive rewards to the winners.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How do I invite friends to vote?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Once you've entered a contest by uploading your short video, the submission period will come to an end. After that, you will be matched with an opponent. In the battle section where your video and your opponent's video are displayed, you can click on the share icon. By doing so, you will see various social platforms you can share with. So your friends can vote through the shared link.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How do I compete with other users?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                To engage in competition with fellow users, you have the option to browse the contest feed and participate in contests created by other users. Alternatively, you can create your own contest, inviting others to join the spirit of friendly rivalry.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    How do I vote?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                When two participants engage in a contest, you have the opportunity to cast your vote by clicking on the vote button. Through this button, you can decide the user whom you believe emerged as the winner in the contest.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    How do I withdraw my earnings?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Each user profile is equipped with a wallet to display your winnings. To withdraw your earning, simply click on the “withdraw money” option in the wallet section of your profile page. Enter the details of your preferred bank account for the transfer. And there you have it, your winnings will be on your bank account.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How do I create a contest?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                By clicking on the punch-like icon within the app, you gain the ability to create a contest. Upon clicking you will be directed to the contest creation section where you can customize and shape the contest according to your preferences. This grant you the flexibility to create both free and paid contests, catering to your desired format.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                                    aria-controls="collapseNine">
                                    How contest works?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                When a user creates a contest, there is a specific period during which other users interested in the contest must upload their video, this submission period is decided by the creator of the contest. After the submission period is over, icefame
                                 pairs the videos of all participants presenting tn pairs for other users to watch and vote. The more opponents you defeat, the higher you progress through the rounds until a winner is determined. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    Why are some merged videos showing “comments” instead of “vote”?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                The merged videos display the comments section instead of a voting option due to the contest being concluded and the voting period being over. However, if the contest is still ongoing you will find the voting option instead of the comment section. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    What are free and paid contests?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Free contests are contests created without any prize. While paid contests are contests with a prize.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- faq section end -->

<section class="section-pt-space section-pb-space single-feature-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-sec">
                    <h4>Still need more info?</h4>
                    <h3>Contact us</h3>
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
                        <h3 class="title">We're close to you</h3>
                        <p>Reach us here. Send us mail</p>
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