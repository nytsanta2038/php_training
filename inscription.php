<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Page de connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- tensoflow and its trained model -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.1"> </script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet@1.0.0"> </script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"> </script> -->
  
</head>
<body>
  
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark gradient-custom2">
      
    <a  href="index.php">
      <img src="f1.png" width="135" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="notfound.html">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notfound.html">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">S'inscrire</a>
        </li>
      </ul>
    </div>
  </nav>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark" style="border-radius: 1rem; box-shadow: 0 0 1.5em rgb(80, 80, 68);" >
          <div class="card-body p-5 text-center">
            <div class="mb-md-3 mt-md-4 pb-5">

              <h2 style="color:#FFFFFF">CRÉER UN COMPTE</h2>
              <hr style="color:#FFFFFF">

              <form action="confirmation_inscription.php" method ="post">
                <div class="form-floating mb-4">
                  <input type="text" id="prenom" name="firstname" class="form-control" placeholder="prenom" required/>
                  <label class="form-label" for="prenom">prenom</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="text" id="nom" name="lastname" class="form-control" placeholder="nom" required/>
                  <label class="form-label" for="nom">nom</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="email" id="Email" name="email" class="form-control" placeholder="Email" required/>
                  <label class="form-label" for="Email">email</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="password" id="mot de passe" name="password" class="form-control" placeholder="mot de passe" required/>
                  <label class="form-label" for="mot de passe">mot de passe</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-4" type="submit">Envoyer</button>
              </form>
            </div>
            <div>
                <p class="mb-0 text-white">Vous avez déjà un compte ? <a href="connexion.php" class="text-white-50 fw-bold">Se connecter</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </body>
  </html>