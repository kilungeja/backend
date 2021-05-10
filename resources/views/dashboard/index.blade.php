@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Project name</th>
                                <th scope="col">Date </th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-striped">
                                <th scope="row">1</th>
                                <td>Tigo blah blah</td>
                                <td>12/12/2020</td>
                                <td><a href="#" class="text-success"><i class="far fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a></td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Tigo blah blah</td>
                                <td>12/12/2020</td>
                                <td><a href="#" class="text-success"><i class="far fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tigo blah blah</td>
                                <td>12/12/2020</td>
                                <td><a href="#" class="text-success"><i class="far fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tigo blah blah</td>
                                <td>12/12/2020</td>
                                <td><a href="#" class="text-success"><i class="far fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form action="#" method="POST" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-5 mb-4">
                            <div class="form-group">
                                <input type="text" placeholder="Full Name" name="name" class="form-control">
                            </div>
                            <div class="form-group mt-5">
                                <input type="email" placeholder="E-mail Address" name="email" class="form-control">
                            </div>
                            <div class="form-group mt-5">
                                <input type="text" placeholder="Company/Organization" name="email" class="form-control">
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
            </div>
        </div>



    </section>
</div>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection