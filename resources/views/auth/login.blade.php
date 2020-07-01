@extends('layouts.app')

@section('content')

<div class="absolute top-0 w-full h-full bg-login">
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4 pt-32">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg border-0">
                    <div class="flex-auto bg-dark px-4 lg:px-10 py-10 pt-0 rounded-xl">

                        <div class="relative w-full mb-3">
                            <h4 class="text-white">Login to your acount</h4>
                        </div>



                        <form method="POST" action="{{ route('login') }}" class="mt-12">
                            @csrf

                            <div class="relative w-full mb-3">
                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="relative w-full mb-3">
                                
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="relative w-full mb-3">
                                <label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </label>
                            </div>

                            <div class="text-center mt-6">
                                <button type="submit" class="bg-bluebtn text-white rounded-lg">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-1/2 text-right"><a href="#pablo" class="text-white"><small>Privacy policy</small></a></div>
                    <div class="w-1/2 text-right"><a href="#pablo" class="text-white"><small>Terms of use</small></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
