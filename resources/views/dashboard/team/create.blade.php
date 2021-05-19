@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <h4 class="text-center py-3">Add team member</h4>
                <form action="{{ route('team.store') }}" method="POST" data-aos="fade-up" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">first name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control">
                        @error('first_name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">last name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control">
                        @error('last_name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">email address</label>
                        <input type="text" name="email" id="email" class="form-control">
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkedIn_account">linkedIn account URL</label>
                        <input type="text" name="linkedIn_account" id="linkedIn_account" class="form-control">
                        @error('linkedIn_account')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="profile_pic">Profile picture</label>
                        <input type="file" name="profile_pic" id="profile_pic" class="form-control">
                        @error('profile_pic')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-5">
                        <input type="submit" value="save" class="btn btn-dark mt-4">

                    </div>
                </form>

            </div>


        </div>

    </section>
</div>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection