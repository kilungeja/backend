<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body>
    <section>


        <nav class="navbar navbar-light bg-light-opaque ">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/Logo.svg') }}"
                        class=" mr-2 w-25" alt=""><i>
                        Embarking
                        on a
                        visual
                        journey.</i></a>
                <div class="search-form">
                    <form class="form-inline my-2 my-lg-0" action="{{ route('work') }}">
                        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-dark">Search</button>
                    </form>
                </div>
                <i class="fas fa-bars " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation"></i>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <div class="circle d-none"></div>
                            <a class="nav-link" href="{{ route('index') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <div class="circle d-none"></div>
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <div class="circle d-none"></div>
                            <a class="nav-link" href="{{ route('work') }}">Work </a>
                        </li>

                        <li class="nav-item">
                            <div class="circle d-none"></div>
                            <a class="nav-link" href="{{ route('opportunity') }}">Opportunities</a>
                        </li>
                        <li class="nav-item">
                            <div class="circle d-none"></div>
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>


                    </ul>
                    <div class="d-flex align-items-center ">
                        <div class="p-3">
                            <p>+255 716 461 216</p>
                            <p>info@caravanmedia.com</p>
                            <p>
                                <a href="https://www.linkedin.com/company/caravanmediatz" target="_blank"><i
                                        class=" text-white fab fa-linkedin mr-3"></i></a>
                                <a href="https://instagram.com/caravan.media?igshid=oas97w4ypiwe" target="_blank"><i
                                        class="fab fa-instagram-square mr-3"></i></a>
                                <a href="https://instagram.com/caravan.media?igshid=oas97w4ypiwe" target="_blank"><i
                                        class="fab fa-facebook-square mr-3"></i></a>
                            </p>
                        </div>
                        <div class="d-none d-md-block">
                            <img src="{{ asset('img/Frame.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </section>


    @yield('content')

    <!-- footer -->

    <section id="footer" class="p-5 bg-black mt-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <div class="d-flex h-100 flex-column justify-content-between">
                        <div class="d-flex justify-content-between align-items-center footer-logos ">
                            <div>
                                <img src="{{ asset('img/Logo - White.svg') }}" class=" img-fluid s" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('img/Group 804.png') }}" class="w-50" alt="">
                                <!-- <i class="d-block mt-3">Embarking on a visual journey.</i> -->
                            </div>

                        </div>
                        <i class="d-inline-block mb-auto mt-3">Embarking on a visual journey.</i>
                        <small class="mt-5  copyright"><i class="far fa-copyright"></i> {{ now()->format('Y') }}
                            Caravan
                            Media</small>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <h5 class=" text-uppercase ml-3" style="font-weight: 350;">navigation</h5>
                    <div class="footer-nav ">
                        <div class="row">
                            <div class="col-md-6">

                                <a class="nav-link" href="{{ route('index') }}">Home</a>
                                <a class="nav-link" href="{{ route('about') }}">About</a>
                                <a class="nav-link" href="{{ route('work') }}">Work</a>
                            </div>
                            <div class="col-md-6">
                                <a class="nav-link" href="{{ route('opportunity') }}">Opportunities</a>
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-md-5 text-md-right ml-auto" id="contact-info">
                    <h5 class=" mb-3 text-uppercase" style="font-weight: 350;">contact</h5>
                    <div>
                        <h6 class="mt- text-uppercase" ;>mobile</h6>
                        <p class="">+255 716 461 216</p>
                    </div>
                    <div>
                        <h6 class="mt-5 text-uppercase">e-mail</h6>
                        <p class="">info@caravanmedia.com</p>
                    </div>
                    <div>
                        <h6 class="mt-md-5 text-uppercase">address</h6>
                        <p> P. O. Box 54643</p>
                        <p> VICTORIA HOUSE, 5th Floor Wing A</p>
                        <p> New Bagamoyo Road </p>
                        <p>Dar es Salaam, Tanzania</p>
                    </div>
                    <div class="social-links mt-5">
                        <a href="https://www.linkedin.com/company/caravanmediatz" target="_blank"> <i
                                class=" text-white fa-2x mr-3 fab fa-linkedin "></i></a>
                        <a href="https://instagram.com/caravan.media?igshid=oas97w4ypiwe" target="_blank"><i
                                class=" text-white fa-2x mr-3 fab fa-instagram-square"></i></a>
                        <a href="https://www.facebook.com" target="_blank"><i
                                class=" text-white fa-2x mr-2 fab fa-facebook-square"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="{{ asset('js/main.js') }}"></script>

</html>