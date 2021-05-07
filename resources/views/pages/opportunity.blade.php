@extends('layouts.app')

@section('content')
<!-- intro -->
<div class="container" id="intro-service">
    <section id="intro-work-single" class="">

        <h2 class="display-m-4 mb-4 text-left " data-aos="fade-up" style="font-size: 6rem;font-weight: bold;">
            Opportunities</h2>
        <h3 class="mt-4 mb-5" data-aos="fade-up" style="font-weight: 500;font-size: 2.8rem;"> Corporate
            Photography Crash Course</h3>


    </section>
</div>


<!-- Video -->
<div class="container" data-aos="fade-up">
    <section id="video" class="py-1 mb-4"
        style="background: url({{ asset('img/noom-peerapong-2uwFEAGUm6E-unsplash.jpg') }}) center center/cover;">
        <img src="{{ asset('img/videocam.png') }}" alt="" class="img-fluid mx-auto d-block">
    </section>

</div>


<!-- Images -->
<div class="container">
    <section id="opp-details">
        <div class="row">
            <div class="col-md-7 mb-4 details">
                <div class="section-subtitle" data-aos="fade-up">
                    <h3>Details</h3>
                </div>
                <div data-aos="fade-up">
                    <p>Sign up for our photography training program in order to improve your skills as a
                        photographer and creative. Open to anyone interested in pursuing photographer as a hobby or
                        career. Training will be provided by highly-skilled and experienced photographers and
                        videographers. Don’t miss this opportunity!</p>
                </div>
                <div data-aos="fade-up">
                    <h3 class="mt-4">Apply</h3>
                    <a
                        href="https://docs.google.com/forms/d/e/1FAIpQLSdIG8VP-19gmeSuQDAf5roJBle1715fcuFPrlgOUjVq0agLOQ/viewform?vc=0&c=0&w=1&flr=0&gxids=7628">
                        <button class="btn btn-dark mt-3">APPLICATION FORM</button> </a>
                </div>
            </div>
            <div class="col-md-4 bg-black mb-5 p-4 ml-auto" style="line-height: 1rem;font-size: .8rem;"
                data-aos="fade-up">
                <h3>Program Outline</h3>
                <p>Introduction to Photography
                    Brand Identity
                    Corporate Photography
                    <ul>
                        <li>Portrait</li>
                        <li> Events</li>
                        <li> Commercial Products</li>
                        <li> Advertising</li>
                    </ul>
                </p>
                <h3 class="mt-4">Logistics</h3>
                <div style="line-height: 1rem;">
                    <p>Spots Available: 10<br>
                        Time: 10AM - 3PM<br>
                        Date: TBC<br>
                        Fee: TSH 50,000/=</p>
                </div>
            </div>
        </div>
</div>
</section>

</div>


<div class="">
    <div class="py-3 bg-black"></div>
</div>



@endsection