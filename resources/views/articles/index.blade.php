@extends('layouts.users')


@section('content')
    <div class="jumbotron">
       <div class=" text-center">
            <a href="{{ route('articles.create') }}" class=" btn-lg btn btn-success">Create Article</a>
       </div>
    </div>

@endsection
