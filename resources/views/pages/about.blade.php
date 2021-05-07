@extends('layouts.app')

@section('content')

<!-- intro -->
<div class="" id="intro-about" data-aos="fade-up">
    <section id="intro" class="welcome"
        style="background: url({{ asset('img/about3.png') }}) center center/cover;background-position-x: initial;">
        <img src="{{ asset('img/Group 8.png') }}" alt="">

    </section>
</div>


<!-- about us -->
<div class=" container">
    <section class="py-5">


        <div class="col-md-12 p-5" data-aos="fade-up">
            <h4 class="mb-4 section-title" style="font-weight: bold;">Vision</h4>
            <p style="font-size: 2rem;">
                Reference point for authentic corporate media content. </p>
            <p>

            </p>
        </div>

    </section>
</div>

<!-- about us -->

<section id="caravan-logo" class="py-5 bg-black" data-aos="fade">
    <div class="container">
        <div class="p-5">
            <img src="{{ asset('img/Group 804.png') }}" alt="" class=" img-fluid w-75 mx-auto d-block">
        </div>
    </div>


</section>

<!-- Mission us -->
<section id="mission" class="py-5">
    <div class="container">
        <h4 class="section-title ml-4 mb-5" data-aos="fade-up" style="font-weight: 600;">Mission</h4>
        <div class="row  mb-4 justify-content-center" data-aos="fade-up">
            <div class="col-1">
                <div class="number bg-black text-white text-left">
                    <p class="ml-1">1</p>
                </div>
            </div>
            <div class="col-8 ml-4">
                <h5 class="section-sub-title">Integrity</h5>
                <p>
                    “I’m as proud of many of the things we haven’t done as the things we have done.” <br><i>
                        <strong> Steve
                            Jobs</i></strong>
                </p>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row text-right mb-4 justify-content-center" data-aos="fade-up">
            <div class="col-2 "></div>
            <div class="col-8 ">
                <h5 class="section-sub-title ">Service</h5>
                <p class="">"The best way to find yourself is to loose yourself in the service of
                    others"<br><i><strong>
                            Gandhi</i></strong>s

                </p>
            </div>
            <div class="col-1 ">
                <div class="number-right bg-black text-white">
                    <p>2</p>
                </div>
            </div>


        </div>
        <div class="row text-left justify-content-center" data-aos="fade-up">
            <div class="col-1">
                <div class="number bg-black text-white">
                    <p class="ml-1">3</p>
                </div>
            </div>
            <div class="col-8 ml-4">
                <h5 class="section-sub-title">Teamwork</h5>
                <p>
                    "If real development is to take place, the people have to be involved."<br><i><strong> Julius
                            Nyerere</strong> </i>

                </p>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>

<!-- Video -->
<div class="" data-aos="fade-up">
    <section id="video" class="py-5">
        <div class=iframe-container>
            <iframe width="1440" height="550" src="https://www.youtube-nocookie.com/embed/AoSYLlr2y8I"></iframe>
        </div>
    </section>

</div>


<!-- Our service -->
<section id="our-service" class="py-5">
    <div class="container">
        <h4 class="section-title" data-aos="fade-up" style="font-weight: 600;">Our Services</h4>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5 mb-4">
                <div class="row">
                    <div class="col-12 mb-5 d-flex flex-row" data-aos="fade-up">
                        <div class="mr-2 p-1">
                            <div class="service-item"></div>
                        </div>
                        <div>
                            <h5 class="section-sub-title">Photography </h5>
                            <p>We produce instant sharable photos for fast digital information and commercial
                                purposes. Being a fast paced digital market we have just the right team and
                                technology to enable us to deliver fast smart content.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 mb-5 d-flex flex-row" data-aos="fade-up">
                        <div class="mr-2 p-1">
                            <div class="service-item"></div>
                        </div>
                        <div>
                            <h5 class="section-sub-title">Videography</h5>
                            <p>We produce creative and high-end TVCs and digital media adverts for Corporates and
                                brands. Our Team is widely experienced in areas of casting, wardrobe, sound
                                engineering, videography, choreography, lighting, and visual effects. </p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-6 p-3 h-100 mb-4 ml-auto" data-aos="fade-up">
                <img src="{{ asset('img/about11.png') }}" alt="" class=" img-fluid">
            </div>
        </div>

    </div>
    </div>


</section>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection