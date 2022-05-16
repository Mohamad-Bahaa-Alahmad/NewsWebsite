@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="d-flex justify-content-between">
                <div class="card-header">{{ __('Welcome to my website') }}</div>

                    @if(auth()->user())
                        @if(auth()->user()->id == 1)


                            <a href="{{ route('admin.index') }}" class="p-3">Mange Admins</a>

                        @endif
                    @endif
                    <a href="{{ route('sessie.index') }}" class="p-3">All Sessie</a>
                    <a href="{{ route('news.index') }}" class="p-3">Laatste Nieuws</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card m-5 p-5">
                <h1>Welcome to the website check the About page first to know more about the website</h1>
            </div>
            <div>

            </div>
        </div>
    </div>
</div>
@endsection
