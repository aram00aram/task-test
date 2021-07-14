@extends('layout.layout')

@section('title','Login')

@section('content')
    
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
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
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

@endsection