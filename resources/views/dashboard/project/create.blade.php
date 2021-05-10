@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <h4 class="text-center py-3">Add project</h4>
                <form action="{{ route('project.store') }}" method="POST" data-aos="fade-up"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="project_title">Project title</label>
                        <input type="text" name="project_title" id="project_title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="project_img">Project image</label>
                        <input type="text" name="project_img" id="project_img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="project_imgs">Project images</label>
                        <input type="file" name="project_imgs" multiple id="project_imgs">
                    </div>
                    <div class="form-group mt-3">
                        <label for="brief">Brief</label>
                        <textarea name="brief" class="form-control" placeholder="Project brief"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="result">Result</label>
                        <textarea name="result" id="result" class="form-control"
                            placeholder="Project Result"></textarea>
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