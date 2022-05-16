@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ route('sessie.update', $sessie->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit Sessie </h1>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label ">Name</label>
                        <input id="name"
                               type="text"
                               value="{{ $sessie->name }}"
                               class="form-control @error('name') is-invalid @enderror"
                               name= "name"
                               required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="beschrijving" class="col-md-4 col-form-label ">Beschrijving </label>

                        <textarea id="beschrijving"
                                  type="text"
                                  class="form-control @error('beschrijving') is-invalid @enderror row-cols-6"
                                  name= "beschrijving"
                                  rows="5"
                                  required autocomplete="beschrijving" autofocus>{{ $sessie->beschrijving }}

                            </textarea>
                        @error('beschrijving')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="speaker" class="col-md-4 col-form-label ">Speaker</label>
                        <input id="speaker"
                               type="text"
                               value="{{ $sessie->speaker }}"
                               class="form-control @error('speaker') is-invalid @enderror"
                               name= "speaker"
                               required autocomplete="speaker" autofocus>

                        @error('speaker')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label ">Start On</label>
                        <input id="date"
                               type="date"
                               value="{{ $sessie->date }}"
                               class="form-control @error('date') is-invalid @enderror"
                               name= "date"
                               required autocomplete="date" autofocus>

                        @error('date')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="time" class="col-md-4 col-form-label "> At</label>
                        <input id="time"
                               type="time"
                               value="{{ $sessie->time }}"
                               class="form-control @error('time') is-invalid @enderror"
                               name= "time"
                               required autocomplete="time" autofocus>

                        @error('time')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Edit Item</button>
                    </div>

                </div>
            </div>

        </form>
    </div>


@endsection
