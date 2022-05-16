@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ route('news.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add News Item</h1>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label ">Titel</label>
                        <input id="title"
                               type="text"
                               class="form-control @error('title') is-invalid @enderror"
                               name= "title"
                               required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label ">Text </label>
                        <textarea id="text"
                                  rows="5"
                               class="form-control @error('text') is-invalid @enderror row-cols-6"
                               name= "text"
                               required autocomplete="text" autofocus>


                         </textarea>
                        @error('text')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')

                        <strong>{{ $message }}</strong>

                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Add News Item</button>
                    </div>

                </div>
            </div>

        </form>

    </div>


@endsection
