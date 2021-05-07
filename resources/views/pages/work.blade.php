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


<!-- works -->
<section id="works" class="py-5">
    <div class="container p-5">
        @forelse ($projects as $project)
        <div data-aos="fade-up">
            <div class="work mb-4">
                <div data-aos="fade-up">
                    <h5 class="section-sub-title"><a style="text-decoration: none;"
                            href="{{ route('single_work', ['project'=>$project->id]) }}">{{ $project->project_title }}</a>
                    </h5>
                </div>
                <img data-aos="fade-up" src="{{ $project->images[0]->image_url }}" alt="" class="img-fluid mb-4">
            </div>
            <p class="mb-5">{{ $project->description }}</p>

        </div>


        @empty
        <h4 class="text-center">No projects yet!</h4>
        @endforelse


        {{ $projects->links() }}

</section>

<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection