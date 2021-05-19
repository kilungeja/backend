@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <a href="{{ route('team.create') }}" class=" ">Add team member</a>
                @if (!$teams->count())
                <h4 class="text-center">No team members at the moment</h4>
                @else
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">email address </th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $team->first_name }} {{ $team->last_name }}</td>
                                <td>{{ $team->email }}</td>
                                <td>{{ $team->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('team.edit', ['team'=>$team->id]) }}" class="text-success"><i
                                            class="far fa-edit"></i></a>
                                    <a href="#!" onclick="javascript:document.getElementById('delete-form').submit()"
                                        class="text-danger"><i class="far fa-trash-alt"></i></a>
                                    <form id="delete-form" action="{{ route('team.destroy', ['team'=>$team->id]) }}"
                                        method="POST" class="d-none">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $teams->links() }}
                @endif

            </div>
        </div>



    </section>
</div>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection