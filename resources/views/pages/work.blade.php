@extends('layouts.app')

@section('content')

<!-- intro -->
<div class="" id="intro-work" data-aos="fade-up">
    <section id="intro" class="welcome"
        style="background: url({{ asset('img/about3.png') }}) center center/cover;background-position-x: initial;">
        <img src="{{ asset('img/Group 8.png') }}" alt="">

    </section>
</div>


<section id="work" class="py-5">
    <div class="container">
        <h4 class="section-title" data-aos="fade-up" style="font-weight: 600;">Our Craft</h4>
        <div class="row">
            <div class="col-12 mt-3" data-aos="fade-up" style="font-size: 1.6rem;">
                <p>

                    We deliver - creativity wrapped in good service and craftsmanship.
                </p>
                <p>

                    We are proud to be of Service to our beloved clients and partners.
                </p>
            </div>

        </div>
    </div>
</section>


<div>
    <div class="container">
        <h5 class="section-sub-title mt-3 mb-3 "><a href="{{ route('single_work', ['project'=>1]) }}"
                style="text-decoration: none; color: black;">
                Kili
                Half
                Marathon 2020: Tree Planting</a>
    </div>
    </h5>
    <div id="kili-img" class="container" style="height: 450px;">
        <img data-aos="fade-up" src="{{ asset('img/kilimara1.png') }}" alt="" class="img-fluid mt-2">
    </div>
</div>
<!-- works -->
<section id="works" class="py-5">
    <div class="container p-5">
        <div class="work mb-5">
            <div data-aos="fade-up">

                <p class="mb-5">Tanzania’s most favorable race, the Tigo Kili Half Marathon, Tigo launched an
                    initiative to plant
                    20,000 trees alongside Mount Kilimanjaro to help restore the melting ice on top of the mountain.
                    The brief is to create a TVC, and digital coverage for the series of pre and post marathon
                    activities. </p>


                <div class="work mb-4">
                    <div data-aos="fade-up">
                        <h5 class="section-sub-title"><a style="text-decoration: none;"
                                href="{{ route('single_work', ['project'=>1]) }}"> NMB
                                Capital
                                Launch</a></h5>
                    </div>
                    <img data-aos="fade-up" src="{{ asset('img/kilimara2.png') }}" alt="" class="img-fluid mb-4">
                </div>
                <p class="mb-5">National Microfinance Bank launches its Dodoma Capital Branch as a flagship branch
                    for Government
                    initiative to move to Dodoma. The Guest of honor was Late Tanzania President John Pombe
                    Magufuli. The task was to provide digital livestream and photography services. </p>

                <h5 class="section-sub-title mb-3"><a style="text-decoration: none;"
                        href="{{ route('single_work', ['project'=>1]) }}">
                        Tigopesa 10
                        years Anniversary</a></h5>
            </div>
            <img data-aos="fade-up" src="{{ asset('img/kilimara3.png') }}" alt="" class="img-fluid mb-4">
            <div data-aos="fade-up">
                <p class="mb-5">Mobile money service brand Tigo Pesa celebrates 10 year Anniversary, Caravan Media
                    was briefed to
                    come up with creative multi-visual concepts for ATL and digital. The creative theme being
                    “Celebration digitized cash” </p>

            </div>

            <!-- <img data-aos="fade-up" src="{{ asset('img/kili4.png') }}') }}" alt="" class="img-fluid "> -->

            <div class="work mb-5">
                <div class="work mt-4">
                    <div data-aos="fade-up">
                        <h5 class="section-sub-title mt-5"><a style="text-decoration: none;"
                                href="{{ route('single_work', ['project'=>1]) }}">
                                Tigopesa Tree Planting</a></h5>
                        <img data-aos="fade-up" src="{{ asset('img/kili4.png') }}" alt="" class="img-fluid mb-4">

                        <p>Tigo launched an
                            initiative to plant
                            20,000 trees alongside Mount Kilimanjaro to help restore the melting ice on top of the
                            mountain.
                            The brief is to create a TVC, and digital coverage for the series of pre and post
                            marathon
                            activities. </p>
                    </div>
                </div>
            </div>

</section>

<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection