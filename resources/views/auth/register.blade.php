@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header w3-padding-24 w3-xlarge w3-text-blue">{{ __('Register') }}</div>

                <div class="card-body w3-container w3-card-4 w3-text-blue w3-light-gray">
                    @include('gates.register')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
