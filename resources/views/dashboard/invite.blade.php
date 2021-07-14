@extends('layout.layout')

@section('title',"Dashboard | Invite")

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection