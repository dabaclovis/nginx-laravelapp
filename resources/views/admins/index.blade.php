@extends('layouts.admins')

@section('content')
    <div class="card">
        <div class="card-header w3-padding-24 w3-xlarge">
            {{ Str::ucfirst(Auth::user()->roles) }} Dashboard
        </div>
    </div>















@endsection
