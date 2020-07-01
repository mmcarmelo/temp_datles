@extends('layouts.app')

@section('content')

<div class="">

    <div class="">

    </div>

</div>


<div class="absolute top-0 w-full h-full bg-login">
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4 pt-32">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg border-0">
                    <div class="flex-auto bg-dark px-4 lg:px-10 py-10 pt-0 rounded-xl">

                        <div class="flex-auto w-full text-center">
                            <h4 class="text-white text-xl font-medium tracking-wider mt-4 text-uppercase">
                                clients login
                            </h4>
                        </div>


                        <form method="POST" action="{{ route('login') }}" class="mt-12">
                            @csrf

                            <div class="relative w-full mb-3 font-serif">
                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="relative w-full mb-3 font-serif">
                                
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password text-dark">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="relative w-full mb-3 font-serif mt-4">
                                
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-white text-uppercase text-sm" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                
                            </div>

                            <div class="text-center mt-6 font-serif w-full">
                                <button type="submit" class="bg-bluebtn text-white rounded-lg text-uppercase py-2 px-32">
                                    {{ __('Sign In') }}
                                </button>
                                
                                <br>
                                <div class="bg-grey1 w-full h-1 rounded-xl mt-4"></div>
                                <br>

                                
                                    <a class="text-white text-sm font-medium tracking-wider">
                                        {{ __("Can't Login?") }}
                                    </a>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex ">
                    <div class="w-full text-center">
                        <div class="text-white text-uppercase text-sm">
                            Contact: support@datles.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
