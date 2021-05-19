@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <a href="{{ route('project.create') }}" class=" ">Add project</a>
                @if (!$projects->count())
                <h4 class="text-center">No projects at the moment</h4>
                @else
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
                            @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $project->project_title }}</td>
                                <td>{{ $project->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('project.edit', ['project'=>$project->id]) }}"
                                        class="text-success"><i class="far fa-edit"></i></a>
                                    <a href="#!"
                                        onclick="javascript:document.getElementById('delete-form-{{ $project->id }}').submit()"
                                        class="text-danger"><i class="far fa-trash-alt"></i></a>
                                    <form id="delete-form-{{ $project->id }}"
                                        action="{{ route('project.destroy', ['project'=>$project->id]) }}" method="POST"
                                        class="d-none">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $projects->links() }}
                @endif

            </div>
        </div>



    </section>
</div>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection