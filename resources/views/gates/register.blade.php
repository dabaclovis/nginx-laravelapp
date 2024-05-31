<form method="POST" action="{{ route('registration') }}">
    @csrf

    <div class="w3-row w3-section">
        <div id="mands" class="w3-col w3-center w3-xlarge">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="w3-rest">
            <input id="name" type="text" placeholder="Your name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="w3-row w3-section">
        <div id="mands" class="w3-col w3-center w3-xlarge">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </div>
        <div class="w3-rest">
            <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="w3-row w3-section">
        <div id="mands" class="w3-col w3-center w3-xlarge">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </div>
        <div class="w3-rest">
            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="w3-row w3-section">
        <div id="mands" class="w3-col w3-center w3-xlarge">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </div>
        <div class="w3-rest">
            <input id="password-confirm" placeholder="Retype Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="w3-row mb-3 w3-section d-flex justify-content-end">
        <div class="offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
