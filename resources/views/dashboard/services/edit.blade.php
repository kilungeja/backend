@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <h4 class="text-center py-3">Edit service</h4>
                <form action="{{ route('service.update', ['service'=>$service->id]) }}" method="POST"
                    data-aos="fade-up">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="title">Service name</label>
                        <input type="text" name="title" id="title" value="{{ $service->title }}" class="form-control">
                        @error('title')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" value="{{ $service->description }}"
                            class="form-control">
                        @error('description')
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