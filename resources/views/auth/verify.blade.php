@extends('layouts.app')

@section('content')


<section class="py-5 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card card-body mt-5">
                    <h4 class="text-center mb-3">{{ __('Verify Your Email Address') }}</h4>

                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="">
    <div class="py-3 bg-black"></div>
</div>
@endsection