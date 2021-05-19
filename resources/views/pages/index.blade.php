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
                        <a href="{{ route('about') }}" class=" btn btn-outline-dark mt-4"> Read More</a>
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
        @if (!$services->count())
        <h4 class="text-center">No services at the moment</h4>
        @else
        <h4 class="section-title mb-4" data-aos="fade-up" style="font-weight: 600;">Our Services</h4>
        <div class="row justify-content-between">
            @foreach ($services as $service)
            <div class="col-md-5 d-flex flex-row mb-3" data-aos="fade-up">
                <div class="mr-2 p-1">
                    <div class="service-item "></div>
                </div>
                <div>
                    <h5 data-toggle="collapse" data-target="#serviceCollapse{{ $service->id }}" aria-expanded="false"
                        aria-controls="serviceCollapse{{ $service->id }}"
                        class="d-flex justify-content-between align-items-center">
                        <strong>
                            {{ $service->title }}
                        </strong>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                    <p class="collapse" id="serviceCollapse{{ $service->id }}">{{ $service->description }}</p>
                </div>
            </div>
            @endforeach

        </div>
        @endif

    </div>
</section>

<!-- Projects -->
<section id="projects" class="py-5">
    <div class="container" data-aos="fade-up">
        @if (!$projects->count())
        <h4 class="text-center">No projects at the moment</h4>
        @else
        <div class="carousel">
            @foreach ($projects as $project)
            <div class="project">

                <div class="project-content"
                    style="background: url('{{ $project->images[0]->image_url }}') center center/cover; object-fit: scale-down; ">
                    <div class=" project-info  justify-content-center">

                        <h5 class="mt-4 section-sub-title mb-3">{{ $project->project_title }}</h5>
                        <p>
                            {{ $project->brief }}

                        </p>
                        <a href="{{ route('single_work', ['project'=>$project->id]) }}"><button
                                class="btn btn-dark mt-4">Read More</button></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        @endif


    </div>
</section>

<!-- team -->
<div class="container">
    @if (!$team_members->count())
    <h4 class="text-center">No team member at the moment</h4>
    @else
    <section id="team">
        <h4 class="section-title mb-4" style="font-weight: 600;">Meet The Team</h4>
        <div class="row">
            @foreach ($team_members as $member)
            <div class="col-md-3 team-member p-3">
                <div style="background: url({{ $member->profile_pic }}) center top/cover;">
                    <div class="team-member_content">
                        <h5>{{ $member->first_name }} {{ $member->last_name }}</h5>
                        <p class="d-flex justify-content-between" style="font-size: large;">
                            <small>{{ $member->role ? $member->role->role_name : '' }}</small><a target="_blank"
                                href="{{ $member->linkedIn_account }}"><i class=" text-white fab fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    @endif

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