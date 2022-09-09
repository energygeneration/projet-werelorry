<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet-soutenance</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
  </head>
  <body>



        <div class="footer" id ="contact">
            <div class="container-fluid bg-color-cover-bleue h-50 mt-5 py-5">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                          <h4 class= "mb-3">À DÉCOUVRIR</h4>
                          <p>Destination  Tchamba</p>
                          <p>Destination Lomé</p>
                          <p>Destination sokodé</p>
                          <>Destination kara</p>
                        </div>
                        <div class="col-md-4 ">
                          <h4 class= "mb-3">TRAJETS LES PLUS DEMANDÉS</h4>
                          <p>Tickets Tchamba-Lomé</p>
                          <p>Tickets  Lomé-Tchamba</p>
                          <p>Tickets  Sokodé-Lomé</p>
                          <p>Tickets  Lomé-Sokodé</p>
                          <p>Tickets Kara-Lomé</p>
                          <p>Tickets Lomé-Kara</p>
                        </div>
                        <div class="col-md-4">
                          <h4 class= "mb-3">CONTACTEZ-NOUS</h4>
                        <form action="{{route('store')}}" method="POST">

                               @csrf

                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>
                            <div class="form-group mt-3  ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3 shadow">
                            <textarea class="form-control @error('message') is-invalid @enderror"  value="{{ old('message') }}" id="exampleFormControlTextarea1" name="message" rows="2"  placeholder="Veuillez entrer votre message"></textarea>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg cherchez-un mt-3">Envoyer</button>
                            </div>
                      </form>
                    </div>
                    <p class='text-center text-white mt-4'>© Copyright 2022 </p>
                  </div>
              </div>
            </div>
        </div>

       <script src="./acceuil.js"></script>
  <script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
