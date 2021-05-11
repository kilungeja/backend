@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <h4 class="text-center">Dashboard panel</h4>
            </div>
        </div>



    </section>
</div>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection