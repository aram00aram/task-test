@extends('layout.layout')

@section('title',"Dashboard")

@section('content')
    <div class="">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="col text-end">
            <a href="{{route('createPDF')}}" class="btn btn-primary">Export</a>
        </div>
        <ul id="myUL">
            @foreach($childrens as $children)
                <li><span class="caret"><b>{{ $children->name }}</b></span>
                    @if(count($children->children))
                        @include('dashboard.partials.manageChild',['childs' => $children->children])
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection
