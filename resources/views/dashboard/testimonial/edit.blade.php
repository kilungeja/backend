@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <h4 class="text-center py-3">Edit testimonial</h4>
                <form action="{{ route('testimonial.update', ['testimonial'=>$testimonial->id]) }}" method="POST"
                    data-aos="fade-up">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ $testimonial->name }}" class="form-control">
                        @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" name="company" id="company" value="{{ $testimonial->company }}"
                            class="form-control">
                        @error('company')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="position">Position</label>
                        <input type="text" name="position" id="position" value="{{ $testimonial->position }}"
                            class="form-control">
                        @error('position')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control"
                            placeholder="The message">{{ $testimonial->message }}</textarea>
                        @error('message')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-5">
                        <input type="submit" value="update" class="btn btn-dark mt-4">

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