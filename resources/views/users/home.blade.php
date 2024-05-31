@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- dashboard heading --}}
                <div class="card-header w3-padding-24 w3-xlarge">{!! Str::ucfirst(Auth::user()->fname ) !!}'s {{ __('Dashboard') }}</div>
                {{-- end of dashboard heading --}}
                <div class="card-body">
                    {{-- check if article exist --}}
                   @if (count($articles) > 0)
                       <div class=" d-flex justify-content-between mb-1 w3-bottombar w3-border-blue">
                        <div class="pb-1">Your have created <strong>{{ $articles->count() }}</strong> article(s)</div>
                            {{-- this value will show if there will be a an article on the dashboard | not going back to the profile to select article --}}
                            @if (count($articles) >= 1)
                                <div>
                                    <a href="{{ route('articles.create') }}" class=" btn btn-success">Create Article</a>
                                </div>
                            @endif
                            {{--end  this value will show if there will be a an article on the dashboard | not going back to the profile to select article --}}

                       </div>
                       <div class="row">
                       @foreach ($articles as $article)
                            <div class="col-md-6 mb-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class=" d-flex justify-content-between">
                                            <div>
                                                {{ Str::limit(Str::ucfirst($article->title), 25, '...' ) }}
                                           </div>
                                            <small>{{ $article->created_at->diffForHumans() }}</small>
                                        </div>
                                        <div class="">{{ Str::limit(Str::ucfirst($article->body), 45, '...') }}</div>
                                        {{-- this division shows the delete function and the show route of application --}}
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('articles.show', $article->id) }}" class=" btn mr-1 btn-sm btn-info">show</a>
                                            <form action="{{ route('articles.destroy',$article->id) }}" method="post">
                                                    @csrf
                                                    @method("DELETE")
                                                <button class=" btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                        </div>
                                        {{-- end of division of the delete function --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        {{-- end of checking --}}
                   @else
                       <div class=" d-flex justify-content-center">
                            <p class=" w3-xlarge w3-text-indigo">You Have Not Created Any Article</p>
                       </div>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
@endsection
