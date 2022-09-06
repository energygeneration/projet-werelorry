<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
        <div class="col-md-6 mx-auto">

          <div class="card w-100  shadow " >
              <div class="card-header text-white text-center " style="background-color:#373AB9 ;">
                Ajouter un trajet
              </div>
              <div class="card-body">
                  <form action="" method="post">
                      <div class="mb-3">
                          <label for="InputName" class="form-label">Ville-depart</label>
                          <input type="text" name="nom" class="form-control " id="InputName"  required="" placeholder="Veuillez ville-depart">
                      </div>
                      <div class="mb-3">
                          <label for="InputFirstName" class="form-label">Ville-arrivée</label>
                          <input type="text" name="prenom" class="form-control" id="InputFirstName" required="" placeholder="Veuillez Ville-arrivée">
                      </div>
                      <div class="mb-3">
                          <label for="InputEmail" class="form-label">Heure du départ</label>
                          <input type="email" name="email" class="form-control" id="InputEmail" required="" placeholder="Veuillez entrer heure-depart">
                      </div>
                      <div class="mb-3">
                          <label for="number" class="form-label">Gard</label>
                          <input type="number" name="numero" class="form-control"  required="" placeholder="Veuillez entrer la gard">
                      </div>
                      <div class="mb-3">
                          <label for="InputNumberWhatsap" class="form-label">Prix</label>
                          <input type="number" name="mot_de_passe" class="form-control" id="InputNumberWhatsap" required="" placeholder="Veuillez entrez le prix">
                      </div>
                      <div class="me-auto">
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary  boutton ms-4" >Ajouter</button>
                            </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
        </div>
    </div>

    <script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
