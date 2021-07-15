@extends('layout.app')

@section('title','Login')

@section('content')

    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-5"><b>Login</b></h1>

            <form action="{{route('login.user')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="col">
                    <a href="{{route('registration')}}">Registration</a>
                </div>
                <div class="col mt-5">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

@endsection
