@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-2">
                    <a href="{{ route('news.index') }}" class="p-3">Laatste Nieuws</a>
                </div>

                <div class="card">
                    <div class="card-header " >
                        <h1>{{ $item->title }}</h1><br>
                       <img src="/storage/uploads/{{ $item->image }}" class="w-100 pb-5" style="max-height: 400px"><br>
                        <p>{{ $item->text}}</p>
                        <div class="p-1">
                            <p>Published at {{ $item->created_at }} by {{ $item->user->name }}</p>
                        </div>
                        @if(auth()->user())
                            @if(auth()->user()->is_admin)
                                <div class="pt-3 d-flex justify-content-between">
                                    <a href="{{ route('news.edit', $item->id) }}" class="text-decoration-none p-1" style="background-color: blue">EDIT ITEM</a>
                                    <form method="post" action="{{ route('news.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="DELETE ITEM" style="background-color: red;" onclick="return confirm('Are you sure you want to delete this post?');">
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
