@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-right m-2 p-3" >
                    <a href="{{ route('admin.create') }}" class="p-2 text-decoration-none " style="background-color: green" >Add Admin</a>
                </div>
                <div class="card">
                    <div class="card-header ">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($users as $user)
                            @if($user->id != 1)

                            <div class="d-flex justify-content-between" >
                            <p>{{ $user->email }}</p>

                                <form method="post" action="{{ route('admin.destroy', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="DELETE ADMIN" style="background-color: red;" onclick="return confirm('Are you sure you want to delete this Admin?');">
                                </form>




                            </div>
                                @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
