<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMADS Login</title>

    <link
        rel="icon"
        href="/frontend/images/logo.png"
        sizes="32x32"
    />

    @include('includes.style')

</head>

<body>

    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                 <div class="section-left col-12 col-md-6">
                    <h1 class="mb-4">We Explore The New <br>Life Much Better</h1>
                    <img src="{{ url('frontend/images/login-images.png') }}" alt="" class="w-75 d-none d-sm-flex">
                </div>
                 <div class="section-right col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('frontend/images/logo.png') }}" alt="" class="w-50 mb-4 mt-3">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="form-group text-left">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group text-left">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-check text-left">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-login btn-block">
                                        Sign In
                                    </button>

                                    @if (Route::has('password.request'))
                                        <p class="text-center mt-4">
                                            <a href="{{ route('password.request') }}">Saya lupa password</a>
                                        </p>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </main>

    @include('includes.script')

</body>

</html>
