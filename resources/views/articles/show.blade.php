@extends('layouts.users')


@section('content')

<style>
    #textSize{
        font-size: 1.32em;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    #headed{
        text-decoration: underline;
    }
</style>
        <div class="card border-0">
                @if ($article->image)
                    <img class="card-img-top" src="{{ asset('storage/images/'.$article->image) }}" alt="">
                @endif
            <div class="card-body">
                <h4 class="card-title w3-xlarge" id="headed">{{ Str::ucfirst($article->title) }}</h4>
                <div class="card-text" id="textSize">{{ Str::ucfirst($article->body) }}</div>
                <div>
                   <strong>Written by  {{ $article->user->lname }}, {{ $article->created_at->diffForHumans() }}</strong>
                </div>
            </div>
        </div>
        <a href="{{ route('home') }}" class=" btn btn-secondary">
            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
        </a>

@endsection
