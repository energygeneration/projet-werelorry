@extends('layouts.public')

@section('content')
    <br>
    <div class="container">
        <div class="row card text-white w-50 mx-auto mt-5 mb-5" style="background-color:  #373AB9 ">
            <h4 class="card-header">Connectez-vous</h4>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class=" mb-0">
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
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
    </div>
@endsection
