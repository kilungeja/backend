@extends('layouts.app')

@section('content')
<!-- intro -->
<div class="" id="intro-contact" data-aos="fade-up">
    <section id="intro" class="welcome"
        style="background: url({{ asset('img/about3.png') }}) center center/cover;background-position-x: initial;">
        <img src="{{ asset('img/Group 8.png') }}" alt="">

    </section>
</div>

<div class="container">
    <section class="py-5">

        <h4 class="section-title mb-4" data-aos="fade-up" style="font-weight: 600;">Contact Us</h4>
        <div id="contact" data-aos="fade-up"></div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <div class="mb-4">
                    <h6 class="mt-5 section-sub-title text-uppercase">mobile</h6>
                    <p class="">+255 716 461 216</p>
                </div>

                <div class="mb-4">
                    <h6 class="mt-5 section-sub-title text-uppercase">e-mail</h6>
                    <p class="">info@caravanimedia.co</p>
                </div>

            </div>
            <div class="col-md-6" data-aos="fade-up">
                <address>
                    <h6 class="mt-5 section-sub-title text-uppercase">address</h6>
                    <p class="">
                        P. O. Box 54643 <br>
                        VICTORIA HOUSE, 5th Floor Wing A <br>
                        New Bagamoyo Road <br>
                        Dar es Salaam, Tanzania</p>
                </address>


            </div>
        </div>
        <h4 class="section-title mt-5 mb-4" data-aos="fade-up" style="font-weight: 600;">Enquiry Form</h4>
        <p class="mb-4" data-aos="fade-up">Do you have a project you would like to work with us on? Send us the
            details now! Let’s work
            together.<br>
            For job enquiries, please email <strong> info@caravanmedia.co</strong> with your CV.</p>

        <form action="{{ route('contact.post') }}" method="POST" data-aos="fade-up">
            <div class="row">
                @csrf
                <div class="col-md-5 mb-4">
                    <div class="form-group">
                        <input type="text" placeholder="Full Name" name="name" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <input type="email" placeholder="E-mail Address" name="email" class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <input type="text" placeholder="Company/Organization" name="organization" class="form-control">
                    </div>
                </div>
                <div class="col-md-5 mb-4 ml-auto">
                    <div class="form-group mt-3">
                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group mt-5">
                        <input type="submit" value="submit" class="btn btn-dark mt-4">
                    </div>

                </div>
            </div>

        </form>


    </section>
</div>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection