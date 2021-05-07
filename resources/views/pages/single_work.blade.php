@extends('layouts.app')

@section('content')
<!-- intro -->
<div class="container" id="intro-single">
    <section id="intro-work-single" class="py-5">

        <h2 class="display-4 mb-5 text-left" data-aos="fade-up" style="font-weight: bold; font-size: 6rem;">TIGO
            Tree Planting</h2>

        <div class="row" data-aos="fade-up">
            <div class="col-2 pl-5 d-flex justify-content-center align-items-start flex-column bg-black ">
                <h4 class="section-sub-title mt-2">Roles</h4>
                <p>Filming <br> Video Editing <br> Production </p>
            </div>
            <div class="col-10 px-5">
                <h4 class="section-title mb-4" style="font-weight: 600;">Brief</h4>
                <p>Mobile money service brand Tigo Pesa celebrates 10 year Anniversary, Caravan Media was briefed to
                    come up with creative multi-visual concepts for ATL and digital. The creative theme being
                    “Celebration digitized cash” </p>
            </div>
    </section>
</div>
<div class=" container" data-aos="fade-up">
    <section id="video" class="py-5 mb-4" style="background: url({{ asset('img/kili4.png') }}) center center/cover;">
        <img src="{{ asset('img/videocam.png') }}" alt="" class="img-fluid mx-auto d-block">
    </section>

</div>


<!-- Images -->
<div class="container">
    <section id="single-work-images" data-aos="fade-up" style="height: 550px;">
        <div class="d-grid h-100">
            <div class=" h-100 mb-4">
                <img src="{{ asset('img/tree1.png') }}" class="img-fluid w-100 " alt="">


            </div>
            <div class=" h-100 mb-4">
                <img src="{{ asset('img/tree2.png') }}" class="img-fluid w-100 " alt="">
            </div>
        </div>
    </section>
</div>


<!-- Result -->
<div class="container">
    <section id="result" class="py-5">
        <div class="p-3 d-flex justify-content-center align-items-center flex-column">
            <h4 class="section-title mb-4" data-aos="fade-up" style="font-size: 2rem;">Result</h4>
            <p class="text-center w-75" data-aos="fade-up">
                This is an ongoing campaign aimed at restoring the snow atop the peaks of Mt. Kilimanjaro through
                returning the green around the mountain.

                By planting trees around the mountain and restoring the climate to its previous state, it will in
                turn restore the mountain to its earlier glory with plenty of snow at the peaks

            </p>
        </div>
    </section>
</div>


<!-- Next Page -->
<div class="container">
    <section id="next-page" class="py-5" data-aos="fade-up">

        <div class="d-flex justify-content-between align-items-center">
            <h4 class="section-sub-title">Next Project</h4>
            <!-- <img src="{{ asset('img/arrow-right.png') }}" alt="" class="img-fluid w-25"> -->
        </div>
        <div class="img-container" data-aos="zoom-in-ups" id="next-project" style="height: 400px;">
            <img src="{{ asset('img/nextp.png') }}" alt="" class="img-fluid ">
        </div>


    </section>
</div>

<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection