@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <h4 class="text-center py-3">Edit team member</h4>
                <form action="{{ route('team.update', ['team'=>$team->id]) }}" method="POST" data-aos="fade-up">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="role_id">role</label>
                        <select name="role_id" id="role_id" class="form-control">
                            @if (!$roles->count())
                            <option disabled selected>There are no roles at the moment. Add one</option>
                            @else
                            <option disabled selected>Select role for a team member</option>
                            @foreach ($roles as $role)
                            <option {{ $role->id == $team->role_id ? 'selected': '' }} value="{{ $role->id }}">
                                {{ $role->role_name }}</option>
                            @endforeach

                            @endif

                        </select>
                        @error('role_id')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="first_name">first name</label>
                        <input type="text" name="first_name" value="{{ $team->first_name }}" id="first_name"
                            class="form-control">
                        @error('first_name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="last_name">last name</label>
                        <input type="text" name="last_name" value="{{ $team->last_name }}" id="last_name"
                            class="form-control">
                        @error('last_name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">email address</label>
                        <input type="text" name="email" value="{{ $team->email }}" id="email" class="form-control">
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkedIn_account">linkedIn account URL</label>
                        <input type="text" name="linkedIn_account" value="{{ $team->linkedIn_account }}"
                            id="linkedIn_account" class="form-control">
                        @error('linkedIn_account')
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