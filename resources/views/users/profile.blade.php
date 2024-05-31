@extends('layouts.users')

@section('content')
<div class="w3-row-padding">
    <div class="w3-third">
        @if (Auth::user()->avatar)
        <div class="w3-light-grey w3-card-4 w3-round-xlarge">
            <div class="w3-display-container">
                <img src="{{ asset('storage/users/'.Auth::user()->avatar) }}" class="w3-round-xlarge" alt="profile"
                    width="100%">
            </div>
        </div>
        @endif
       <div class="w3-container w3-panel w3-card-4 pt-2">
        <form action="{{ route('users.avatar') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class=" form-group d-flex justify-content-between">
                <input type="file" name="avatar" id="avatar">
                <button type="submit" class=" btn btn-sm btn-success">upload</button>
            </div>
       </form>
       </div>
    </div>
    <div class="w3-twothird">
        <div class="w3-container">
            <div class="w3-container w3-card-4">
                <div class="w3-xlarge d-flex justify-content-between">
                    Contacts
                    {{-- <a href=""> <i class="fa fa-edit btn btn-success btn-sm" aria-hidden="true"></i></a> --}}
                </div>
                <ul>
                    <li>Names:
                        <ul>
                            <li>{{ Str::ucfirst($user->fname) }}</li>
                            <li>{{ Str::ucfirst($user->lname) }}</li>
                        </ul>
                    </li>
                    <li>
                        {{ $user->email }}
                    </li>
                    <li>
                        {{ Str::ucfirst($user->roles) }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
