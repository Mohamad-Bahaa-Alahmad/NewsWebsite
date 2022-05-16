@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-2">
                    <a href="{{ route('sessie.index') }}" class="p-3">All Sessie</a>
                </div>
                <div class="card">
                    <div class="card-header " >
                        <h1> {{ $sessie->name }}</h1><br>
                        <div class="p-1">
                            <p>Beschrijving</p>
                        </div><br>
                        <div class="p-1">
                            <P>{{ $sessie->beschrijving}}</P>
                        </div><br>
                        <div class="p-1">
                            <p>Speaker {{ $sessie->speaker}}</p>
                        </div><br>

                        <div class="p-1">
                            <p>Start On {{ $sessie->date }} At {{ $sessie->time }}</p>
                        </div><br>
                        @if(auth()->user())
                            @if(auth()->user()->is_admin)
                                <div class="pt-3 d-flex justify-content-between">
                                    <a href="{{ route('sessie.edit', $sessie->id) }}" class="text-decoration-none p-1" style="background-color: blue">EDIT SESSIE</a>
                                    <form method="post" action="{{ route('sessie.destroy', $sessie->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="DELETE SESSIE" style="background-color: red;" onclick="return confirm('Are you sure you want to delete this post?');">
                                    </form>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
