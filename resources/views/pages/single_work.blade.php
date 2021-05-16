@extends('layouts.app')

@section('content')
<!-- intro -->
<div class="container" id="intro-single">
    <section id="intro-work-single" class="py-5">

        <h2 class="display-4 mb-5 text-left" data-aos="fade-up" style="font-weight: bold; font-size: 6rem;">
            {{ $project->project_title }}</h2>

        <div class="row" data-aos="fade-up">
            <div class="col-2 pl-5 d-flex justify-content-center align-items-start flex-column bg-black ">
                <h4 class="section-sub-title mt-2">Roles</h4>
                <p>Filming <br> Video Editing <br> Production </p>
            </div>
            <div class="col-10 px-5">
                <h4 class="section-title mb-4" style="font-weight: 600;">Brief</h4>
                <p> {{ $project->brief }} </p>
            </div>
    </section>
</div>
<div class=" container" data-aos="fade-up">
    <section id="video" class="py-5 mb-4"
        style="background: url({{ $project->images[$project->images->count() - 1]->image_url }}) center center/cover;">
        {{-- <img src="{{ asset('img/videocam.png') }}" alt="" class="img-fluid mx-auto d-block"> --}}
    </section>

</div>


<!-- Images -->
<div class="container">
    <section id="single-work-images" data-aos="fade-up">

        <div class="row align-items-stretch images">

            @foreach ($project->images as $image)
            <div class="col-6 col-md-6 col-lg-3 " data-aos="fade-up">
                <a class="fancybox" rel="gallery1" href="{{ $image->image_url }}" title="{{ $project->project_title }}">
                    <img class="img-fluid" src="{{ $image->image_url }}" alt="" />
                </a>
            </div>
            @endforeach
        </div>



    </section>
</div>


<!-- Result -->
<div class="container">
    <section id="result" class="py-5">
        <div class="p-3 d-flex justify-content-center align-items-center flex-column">
            <h4 class="section-title mb-4" data-aos="fade-up" style="font-size: 2rem;">Result</h4>
            <p class="text-center w-75" data-aos="fade-up">
                {{ $project->result }}
            </p>
        </div>
    </section>
</div>

<!-- Video -->
@if (!empty($project->video_url))
<div class="py-5" data-aos="fade-up">
    <section id="video" class="">
        <div class="container">
            <div class='iframe-container w-100'>
                <iframe width="100%" height="550" src="{{ $project->video_url}}"></iframe>
            </div>
        </div>
    </section>
</div>
@endif



<!-- Next Page -->
@if ($next_project)
<div class="container">
    <section id="next-page" class="py-5" data-aos="fade-up">

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('single_work', ['project'=>$next_project->id]) }}" style="text-decoration: none"
                class="mb-3 text-dark">
                <h4 class="section-sub-title d-inline mr-5">Next Project</h4>
                <img src="{{ asset('img/arrow-right.png') }}" alt="" class="img-fluid w-25">
            </a>
        </div>
        <div class="img-container" data-aos="zoom-in-ups" id="next-project" style="height: 400px;">
            <img src="{{ $next_project->images[0]->image_url }}" alt="" class="img-fluid ">
        </div>
    </section>
</div>
@endif


<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection