

@extends('layouts.public')

@section('content')

   <div class="main">

        <header class="acceuil-bg-image d-block mx-lg-auto img-fluid">
              <div class="container-fluid color-cover-cendre h-100">
                  <div class="row h-100 align-items-center ">
                      <div class="col-5 about-text mx-auto">
                          <div class="text-white display-6 fw-bold mb-5 tickets">ACHÈTEZ VOS TICKETS DE BUS DÉPUIS
                          <br> VOTRE CONFORT VIA NOTRE PLATE-FORME</div>
                          <a href="reservation.php"><button type="button"  class="btn btn-outline-success boutton text-white display-4 fw-bold">Réservez vos tickets</button></a>
                      </div>
                  </div>
              </div>
        </header>
        <div class="main">
              <div class="container intro-content mt-5">
                <div class="row">
                  <div class="col-md-6 align-self-center">
                  <img class = 'image-un d-block mx-lg-auto img-fluid'src="assets/img/femme.webp" alt="">
                  </div><!-- /.col-md-6 -->
                  <div class="col-md-6 ml-auto mt-3">
                    <h2 class="mb-4">ACHAT DE TICKET DE BUS EN LIGNE FACILE</h2>
                      <div class="card-body text-dark">
                        <form>
                            <div class="form-group">
                              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example ">
                                  <option >Ville-départ</option>
                                  <option value="1">Tchamba</option>
                                  <option value="2">Sokodé</option>
                                  <option value="3">Kara</option>
                                  <option value="3">Bafilo</option>
                                  <option value="3">Lomé</option>
                              </select>
                            </div>
                            <div class="form-group mt-3  shadow">
                              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Ville-destination</option>
                                    <option value="1">Lomé</option>
                                    <option value="2">Sokodé</option>
                                    <option value="3">Kara</option>
                                    <option value="3">Bafilo</option>
                                    <option value="3">Tchamba</option>
                                </select>
                            </div>
                            <div class="form-group mt-3 shadow">
                              <input type="date" class="form-control" >
                            </div>
                           <div class="text-center">
                             <button type="submit" class="btn btn-success btn-block btn-lg cherchez mt-3">Rerchez</button>
                          </div>
                      </form>
                    </div>
                  </div><!-- /.col-md-6 -->
                </div>
             </div>


              <div class="container-fluid bg-color-cover h-50 mt-5 py-5">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h3 class=" display-7 fw-bold mb-2">Une plate-forme de réservation des tickets intelligente et éfficace </h3>
                            <div class= "text-center" >Grâce à l’intelligence artificielle intégrée et au système de correspondance basé sur de nombreuses données,  est le  </div>
                            <div class="text-center">spécialiste qui aide les utilisateurs à trouver rapidement les bus correspondants</div>
                        </div>
                    </div>
              </div>


                <section id ="team">
                    <div class="container pt-5 pb-1 text-center">
                        <div class="row">
                            <h3 class ="mb-4" style ="color:#373AB9">Planifiez votre déplacement <br> en seulement 4 étapes.</h3>
                        </div>
                        <div class="row mb-5">
                           <div class="col-lg-3 col-md-6">
                               <div class="card carte shadow mt-3">
                                   <div class="card-body">
                                       <img src="assets/img/Bus Width.png" alt="" classe ="image-fluid rounded circle w-50 mb-3">
                                       <h3>1.</h3>
                                       <p>cherchez les trajets  de   voyage qui vous convient</p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                               <div class="card carte shadow mt-3">
                                   <div class="card-body">
                                       <img src="assets/img/info.png" alt="" classe ="image-fluid rounded circle w-50 mb-3">
                                       <h3>1.</h3>
                                       <p>Inscrivez-vous en remplissant vos coordonnées</p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                               <div class="card carte shadow mt-3">
                                   <div class="card-body">
                                       <img src="assets/img/money.png" alt="" classe ="image-fluid rounded circle w-50 mb-3">
                                       <h3>1.</h3>
                                       <p> Reservez en remplissant les inforrmations</p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                               <div class="card carte shadow mt-3">
                                   <div class="card-body">
                                       <img src="assets/img/money.png" alt="" classe ="image-fluid rounded circle w-50 mb-3">
                                       <h3>1.</h3>
                                       <p> Vérifiez les inforrmations de réservation et télécharger le ticket</p>
                                   </div>
                               </div>
                           </div>
                        </div>

                    </div>
                </section>

              <div class="container-fluid bg-color-cover-bleu h-50 mt-5 py-5">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h3 class=" display-7 fw-bold mb-2 text-white">Vous recherchez le meilleur prix associé à une qualité de service élevée ? </h3>
                            <div class= "text-center text-white" >Trouver un service de haute qualité au meilleur prix, c’est la raison pour laquelle notre </div>
                            <div class="text-center text-white">plate-forme est incomparable.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container intro-content mt-5">
                <div class="row">
                    <div class="col-md-6 col-ms-3 align-self-center">
                      <img class = 'image-deux d-block mx-lg-auto img-fluid'src="assets/img/voiture.jpg" alt="">
                      <div class="text-center">
                            <button type="submit" class="btn btn-ligth btn-block btn-lg bouton mt-3">J’ai bésoin d’un bus </button>
                      </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-ms-3 ml-auto mt-3">
                          <img class = 'image-deux d-block mx-lg-auto img-fluid'src="assets/img/imge-actu-1.jpeg" alt="">
                          <div class="text-center">
                             <button type="submit" class="btn btn-ligth btn-block btn-lg bouton mt-3">J’ai des bus </button>
                          </div>
                    </div>
                </div><!-- /.col-md-6 -->
            </div>
        </div>

@endsection
