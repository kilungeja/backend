@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <a href="{{ route('service.create') }}" class=" ">Add service</a>
                @if (!$services->count())
                <h4 class="text-center">No services at the moment</h4>
                @else
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">service</th>
                                <th scope="col">Description </th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('service.edit', ['service'=>$service->id]) }}"
                                        class="text-success"><i class="far fa-edit"></i></a>
                                    <a href="#!" onclick="javascript:document.getElementById('delete-form').submit()"
                                        class="text-danger"><i class="far fa-trash-alt"></i></a>
                                    <form id="delete-form"
                                        action="{{ route('service.destroy', ['service'=>$service->id]) }}" method="POST"
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
                {{ $services->links() }}
                @endif

            </div>
        </div>



    </section>
</div>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection