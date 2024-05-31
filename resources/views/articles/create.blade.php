@extends('layouts.users')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header w3-padding-16 text-center  w3-xlarge">
                    Create Article
                </div>
            </div>
            <div class="card-body w3-card-4">
                {!! Form::open(['route' => 'articles.store','method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    @csrf
                    <div class="form-group">
                        {!! Form::label('title', 'Title:', ['class' => 'w3-card-2 w3-large']) !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        @error('title')
                            <div class=" alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Content:', ['class' => 'w3-card-2 w3-large']) !!}
                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                        @error('body')
                            <div class=" alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::file('image') !!}
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        {!! Form::submit('Create Article', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


