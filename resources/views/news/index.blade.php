@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="text-right m-2 pb-3">
                    @if(auth()->user())
                        @if(auth()->user()->is_admin)
                            <a href="{{ route('news.create') }}" class="p-2 text-decoration-none " style="background-color: green">Add Nieuwsitems</a>
                        @endif
                    @endif
                </div>
                <div class="card">
                    <div class="card-header p-0" >

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($allnews as $newsitem)

                        <div class="pb-5 card m-2" >
                            <div class="p-2">
                                <a href="{{ route('news.show', $newsitem->id) }}" class="text-decoration-none">
                            <p class="m-0 font-weight-bold" >{{ $newsitem->title }}</p><br>
                            <div class="d-flex">
                                <img src="/storage/uploads/{{ $newsitem->image }}" class="pr-3" style="width: 200px; height: 200px">
                                <p style="max-height: 200px; overflow: hidden">{{ $newsitem->text }}</p>
                                <hr>
                            </div>
                            <div class="p-1">
                                <p>Published at {{ $newsitem->created_at }} by {{ $newsitem->user->name }}</p>
                            </div>
                                </a>
                            </div>

                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
