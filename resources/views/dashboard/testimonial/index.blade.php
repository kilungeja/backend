@extends('layouts.app')

@section('content')

<div class="container-fluid py-5">
    <section class="py-5">
        <div class="row py-5">
            <div class="col-md-2">
                @include('dashboard.includes.nav')
            </div>
            <div class="col-md-10">
                <a href="{{ route('testimonial.create') }}" class=" ">Add Testimonial</a>
                @if (!$testimonials->count())
                <h4 class="text-center">No testimonial at the moment</h4>
                @else
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position </th>
                                <th scope="col">Company</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->position }}</td>
                                <td>{{ $testimonial->company }}</td>
                                <td>{{ $testimonial->message }}</td>
                                <td>{{ $testimonial->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('testimonial.edit', ['testimonial'=>$testimonial->id]) }}"
                                        class="text-success"><i class="far fa-edit"></i></a>
                                    <a href="#!"
                                        onclick="javascript:document.getElementById('delete-form-{{ $testimonial->id }}').submit()"
                                        class="text-danger"><i class="far fa-trash-alt"></i></a>
                                    <form id="delete-form-{{ $testimonial->id }}"
                                        action="{{ route('testimonial.destroy', ['testimonial'=>$testimonial->id]) }}"
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
                {{ $testimonials->links() }}
                @endif

            </div>
        </div>



    </section>
</div>
<div class="">
    <div class="py-3 bg-black"></div>
</div>


@endsection