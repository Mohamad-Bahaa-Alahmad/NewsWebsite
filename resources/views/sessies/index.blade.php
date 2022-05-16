@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-right m-2 pb-3">
                    @if(auth()->user())
                        @if(auth()->user()->is_admin)
                            <a href="{{ route('sessie.create') }}" class="p-2 text-decoration-none " style="background-color: green">ADD SESSIE</a>
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
                        @if ($sessies->isEmpty())
                            <h1>There is no sessies available at the moment</h1>
                            @else
                        @foreach($sessies as $sessie)

                            <div class="pb-5 card m-2" >
                                <div class="p-2" style="color: white">
                                    <a href="{{ route('sessie.show', $sessie->id) }}" class="text-decoration-none">
                                        <p class="m-0 font-weight-bold" >{{ $sessie->name }}</p><br>
                                        <div class="d-flex">
                                            <p style="max-height: 200px; overflow: hidden">{{ $sessie->beschrijving }}</p>
                                        </div>
                                        <div>
                                            <p style="max-height: 200px; overflow: hidden">Speaker {{ $sessie->speaker }}</p>
                                        </div>
                                        <div class="p-1">
                                            <p>Start On {{ $sessie->date }} At {{ $sessie->time }}</p>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        @endforeach
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
