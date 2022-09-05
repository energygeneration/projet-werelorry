@extends('layouts.public')

@section('content')

              <div class="container">
                  <div class="row">
                  <div class="col-md-6 mx-auto">
                    <h3 class="text-center fw-bold mt-5 mb-4 ">Bienvenue sur la page d’inscription</h3>
                    <div class="card w-100  shadow " >
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">

                                {{ csrf_field() }}

                                <div class="mb-3">
                                    <label for="InputName" class="form-label">Nom</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="InputFirstName" class="form-label">Prénom</label>
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="InputEmail" class="form-label">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Numéro</label>
                                    <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number">
                                    @error('number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="InputNumberWhatsap" class="form-label">Mot de passe</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                   @enderror
                                </div>

                                <div class=" mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="me-auto">
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary boutton ms-4">S'INSCRIRE</button>
                                      </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  </div>
              </div>

              @endsection
