@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <h4 class="text-center py-3">Edit role</h4>
                <form action="{{ route('role.update', ['role'=>$role->id]) }}" method="POST" data-aos="fade-up">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="role_name">role name</label>
                        <input type="text" value="{{ $role->role_name }}" name="role_name" id="role_name"
                            class="form-control">
                        @error('role_name')
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