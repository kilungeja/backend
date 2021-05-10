@extends('layouts.app')

@section('content')

<!-- intro -->
<section id="intro">
    <div class="row">
        <div class="col-12 mt-5" id="intro-page">
            <div data-aos="fade-up">
                <div class="container">
                    <h1 class="pt-5 mb-0">We are caravan,</h1>
                    <p class="mb-5">A digital media production house.</p>
                </div>
            </div>
            <div class="w-75 mx-auto intro-page_img-container">
                <img src="{{ asset('img/shutterstock_1841800561 1 (1).png') }}" alt="" class="img-fluid">
                <!-- <img src="{{ asset('img/videocam.png') }}" alt="" class="play"> -->
            </div>
        </div>
    </div>
</section>

<!-- About us -->
<div class="container">
    <section id="about" class="py-5">
        <div class="container">
            <div class="row py-5" data-aos="fade-up">
                <div class="col-md-5 ">
                    <div>
                        <h4 class="mb-4 section-title" style="font-weight: 600;">About Us</h4>
                        <p class="text-bold" style="font-size: large;">Caravan Media is a multimedia brand which
                            offers authentic corporate
                            audio
                            -
                            visual content production in East Africa.</p>
                        <p style="font-size: large;" class="">Caravan Media is a subsidiary of Joey Group
                            International Limited; a full service creative and marketing agency incorporated in the
                            United
                            Republic of Tanzania with incorporation number 139745558. Caravan is the place where
                            creative
                            inspiration meets technological innovation.</p>
                    </div>



                    <div>
                        <button class=" btn btn-outline-dark mt-4"> Read More</button>
                    </div>
                </div>
                <div class="col-md-6 about-imgs mt-4 ml-auto">
                    <div class="about-img1"></div>
                    <div class="about-img2"></div>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- Services -->
<section id="services" class="">
    <div class="container">
        <h4 class="section-title mb-4" data-aos="fade-up" style="font-weight: 600;">Our Services</h4>
        <div class="row">
            <div class="col-md-5 d-flex flex-row mb-3" data-aos="fade-up">
                <div class="mr-2 p-1">
                    <div class="service-item "></div>
                </div>
                <div>
                    <h5 data-toggle="collapse" data-target="#serviceCollapse1" aria-expanded="false"
                        aria-controls="serviceCollapse1" class="d-flex justify-content-between align-items-center">
                        <strong>
                            Digital Coverage Photography
                        </strong>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse1">We produce instant sharable photos for fast digital
                        information and commercial purposes.
                        Being a fast paced digital market we have just the right team and technology to enable us to
                        deliver fast smart content. </p>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-row ml-auto mb-3 " data-aos="fade-up ">
                <div class="mr-2 p-1">
                    <div class="service-item"></div>
                </div>
                <div class="">
                    <h5 data-toggle="collapse" data-target="#serviceCollapse2" aria-expanded="false"
                        aria-controls="serviceCollapse2" class="d-flex justify-content-between align-items-center">
                        <strong>Product Photography</strong>
                        <i class="fas fa-angle-down rotate-icon "></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse2">We have a thing for products -- really, we love how a
                        good photograph of a product can help
                        change a customer's perspective on the product and influence a purchase decision. </p>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-row mb-3" data-aos="fade-up">
                <div class="mr-2 p-1">
                    <div class="service-item"></div>
                </div>
                <div>
                    <h5 data-toggle="collapse" data-target="#serviceCollapse3" aria-expanded="false"
                        aria-controls="serviceCollapse3" class="d-flex justify-content-between align-items-center">
                        <strong>Commercial Photography</strong>
                        <i class="fas fa-angle-down rotate-icon "></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse3">We have a pool of models aged from 1 - 50 who can fit
                        in a variety of photoshoots for
                        commercial and advertising purposes. We have executed briefs for small, medium and large
                        enterprises in East Africa.
                    </p>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-row ml-auto mb-3" data-aos="fade-up">
                <div class="mr-2 p-1">
                    <div class="service-item"></div>
                </div>
                <div>
                    <h5 data-toggle="collapse" data-target="#serviceCollapse4" aria-expanded="false"
                        aria-controls="serviceCollapse4" class="d-flex justify-content-between align-items-center">
                        <strong>Corporate Photography</strong>
                        <i class="fas fa-angle-down rotate-icon "></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse4">We have a physical and mobile photo studio that
                        enables
                        us to produce high-end executive
                        photography. Our team is very hands on with making sure the executives are comfortable
                        during shoots.. </p>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-row mb-3" data-aos="fade-up">
                <div class="mr-2 p-1">
                    <div class="service-item"></div>
                </div>
                <div>
                    <h5 data-toggle="collapse" data-target="#serviceCollapse5" aria-expanded="false"
                        aria-controls="serviceCollapse5" class="d-flex justify-content-between align-items-center">
                        <strong>Studio Photography</strong>
                        <i class="fas fa-angle-down rotate-icon "></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse5">Our Studio is well equipped with lighting and
                        photography equipment for internal use and
                        client purposes. We produce high quality images using a good deal of creativity and
                        teamwork. </p>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-row ml-auto mb-3" data-aos="fade-up">
                <div class="mr-2 p-1">
                    <div class="service-item"></div>
                </div>
                <div>
                    <h5 data-toggle="collapse" data-target="#serviceCollapse6" aria-expanded="false"
                        aria-controls="serviceCollapse6" class="d-flex justify-content-between align-items-center">
                        <strong>Commercial Advertisements</strong>
                        <i class="fas fa-angle-down rotate-icon "></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse6">We produce creative and high-end TVCs and digital
                        media
                        adverts for Corporates and brands.
                        Our Team is widely experienced in areas of casting, wardrobe, sound engineering,
                        videography, choreography, lighting, and visual effects. </p>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-row  mb-3" data-aos="fade-up">
                <div class="mr-2 p-1">
                    <div class="service-item"></div>
                </div>
                <div>
                    <h5 data-toggle="collapse" data-target="#serviceCollapse7" aria-expanded="false"
                        aria-controls="serviceCollapse7" class="d-flex justify-content-between align-items-center">
                        <strong>Digital Press Coverage</strong>
                        <i class="fas fa-angle-down rotate-icon "></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse7">Quick Turnaround Press conference videos can add great
                        value to your company by informing
                        your audience instantly using social media while you await for the PR strategy to take place
                        in news outlets. </p>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-row ml-auto" data-aos="fade-up">
                <div class="mr-2 p-1">
                    <div class="service-item"></div>
                </div>
                <div>
                    <h5 data-toggle="collapse" data-target="#serviceCollapse8" aria-expanded="false"
                        aria-controls="serviceCollapse8" class="d-flex justify-content-between align-items-center">
                        <strong>Digital Livestream</strong>
                        <i class="fas fa-angle-down  rotate-icon "></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse8">We can integrate a TV Style broadcast technology and
                        stream it on your company website,
                        facebook, twitter and instagram channels.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Projects -->
<section id="projects" class="py-5">
    <div class="container" data-aos="fade-up">
        <div class="carousel">
            <div class="project">

                <div class="project-content"
                    style="background: url({{ asset('img/project.png') }}) center center/cover;">
                    <div class=" project-info justify-content-centers">
                        <!-- <div class="project-circles">
                                <img src="{{ asset('img/logo2.png') }}" class="ml-auto w-25" alt="">
                            </div> -->
                        <h5 class="mt-4 section-sub-title mb-3">Kili Half Marathon 2020: Tree Planting</h5>
                        <p>
                            Tigo launched an initiative
                            to
                            plant 20,000 trees alongside Mount Kilimanjaro to help restore the melting ice on top of
                            the
                            mountain. The brief is to create a TVC, and digital
                            coverage for the series of pre and
                            post
                            marathon activities.

                        </p>
                        <a href="work.html"><button class="btn btn-dark mt-4">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="project">

                <div class="project-content"
                    style="background: url({{ asset('img/next.project.png') }}) center center/cover;">
                    <div class=" project-info  justify-content-center">
                        <!-- <div class="project-circles">
                                <img src="{{ asset('img/logo2.png') }}" class="ml-auto w-25" alt="">
                            </div> -->
                        <h5 class="mt-4 section-sub-title mb-3">NMB Capital Launch</h5>
                        <p>
                            National Microfinance Bank launches its Dodoma Capital Branch as a flagship branch for
                            Government initiative to move to Dodoma. The Guest of honor was Late Tanzania President
                            John Pombe Magufuli. The task was to provide digital livestream and photography
                            services.

                        </p>
                        <a href="work.html"><button class="btn btn-dark mt-4">Read More</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- team -->
<div class="container">
    <section id="team">
        <h4 class="section-title mb-4" style="font-weight: 600;">Meet The Team</h4>
        <div class="row">

            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ asset('img/rsz_caravan-1.jpg') }}) center top/cover;">
                    <div class="team-member_content">
                        <h5>Jason James</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>Group CEO</small><a href="https://www.linkedin.com/in/jason-james-37369975/"><i
                                    class=" text-white fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ asset('img/rsz_caravan-45\ -\ Copy.jpg') }}) center top/cover;">
                    <div class="team-member_content">
                        <h5>Moses Francis</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>Account Manager</small><a
                                href="https://www.linkedin.com/in/moses-francis-01b048197/"><i
                                    class=" text-white fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ asset('img/rsz_caravan-13.jpg') }}) center top/cover;">
                    <div class="team-member_content">
                        <h5>Hebron Geofrey</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>Production Manager</small><a
                                href="https://www.linkedin.com/in/hebron-geofrey-4361ab121/"><i
                                    class=" text-white fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ asset('img/rsz_caravan-9\ -\ Copy.jpg') }}) center top/cover;">
                    <div class="team-member_content">
                        <h5>Shareen Mphuru</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>Project Coordinator</small><a href=""><i class=" text-white fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ asset('img/rsz_caravan-11\ -\ Copy.jpg') }}) center top/cover;">
                    <div class="team-member_content justify-content-bottoms ">
                        <h5>Millen Kajanja</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>Props & Wardrobe </small><a
                                href="https://www.linkedin.com/in/millen-salvatory-484230156/" target="_blank"><i
                                    class=" text-white fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ asset('img/rsz_caravan-4\ -\ Copy.jpg') }}) center top/cover;">
                    <div class="team-member_content">
                        <h5>Karebu Panjobelo</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>Production Associate</small><i class=" text-white fab fa-linkedin"></i>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ asset('img/rsz_caravan-51.jpg') }}) center top/cover;">
                    <div class="team-member_content">
                        <h5>Richard Aswile</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>Production Associate</small><a
                                href="https://www.linkedin.com/in/aswile-richard-9b760613a/"><i
                                    class=" text-white fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ asset('img/rsz_caravan-57.jpg') }}) center top/cover;">
                    <div class="team-member_content">
                        <h5>Alex Hamis</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>Production Associate</small><a href="https://www.linkedin.com/in/alexhamistz/"><i
                                    class=" text-white fab fa-linkedin"></i></a>
                        </p>

                    </div>
                </div>

            </div>



        </div>
</div>
</section>
</div>
<!--clients  -->

<section id="clients" class="bg-black p-5 mt-5">
    <div class="container">
        <h4 class="section-title mb-4" style="font-size: 3rem; font-weight: 600;">Our Clients</h4>
        <p class="mb-4"></p>
        <div class="row mt-5 p-5">
            <div class="col-md-4"><img src="{{ asset('img/TIGO.png') }}" alt="" class="w-25 mx-auto d-block"></div>
            <div class="col-md-4"><img src="{{ asset('img/CRDB.png') }}" alt="" class="w-50 mx-auto d-block">
            </div>
            <div class="col-md-4"><img src="{{ asset('img/nmb.png') }}" alt="" class="w-25 mx-auto d-block">
            </div>
            <div class="col-md-4"><img src="{{ asset('img/claritus.png') }}" alt="" class="w-25 mt-5 mx-auto d-block">
            </div>
            <div class="col-md-4"><img src="{{ asset('img/Abba.png') }}" alt="" class="w-50 mt-5 mx-auto d-block">
            </div>
            <div class="col-md-4"><img src="{{ asset('img/oracle-symbol.jpg') }}" alt=""
                    class="w-50 mt-5 mx-auto d-block"></div>
            <div class="col-md-4"><img src="{{ asset('img/puma logo white-8.png') }}" alt=""
                    class="w-50 mt-5 mx-auto d-block">
            </div>

        </div>
    </div>
    <div class="container testimonials">
        @if ($testmonials->count())
        <div class="carousel">
            @foreach ($testmonials as $testmonial)
            <div class="d-flex justify-content-between align-items-center">
                <div class="p-5">
                    <blockquote class="quote-card">
                        <i class="d-block">
                            “{{ $testmonial->message }}”
                        </i>

                        <cite>
                            {{ $testmonial->name }}, {{ $testmonial->position }}, {{ $testmonial->company }}
                        </cite>
                    </blockquote>

                </div>
            </div>

            @endforeach

        </div>
        @endif

    </div>

</section>

@endsection