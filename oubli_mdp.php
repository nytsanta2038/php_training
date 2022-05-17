<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Page de connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
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

              <h2 style="color:#FFFFFF">MOT DE PASSE OUBLIÉ</h2>
              <hr style="color:#FFFFFF">
                <form action="confirmation_mdp_oublie.php" method="post">
                  <div class="form-floating mb-4">
                    <input type="email" id="Email" name="email" class="form-control" placeholder="Mot de passe" required/>
                    <label class="form-label" for="Email">Email</label>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="connexion.php">déjà un compte ?</a></p>

                  <button class="btn btn-outline-light btn-lg px-4" type="submit">Envoyer</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<!--<img id="img" src="dogcat.jpg" style="display: none;" crossOrigin="null"/>-->


<!-- Place your code in the script tag below. You can also use an external .js file -->
<script>
  // Notice there is no 'import' statement. 'mobilenet' and 'tf' is
  // available on the index-page because of the script tag above.
/*
  const img = document.getElementById('img');

  // Load the model.
  mobilenet.load().then(model => {
    // Classify the image.
    model.classify(img).then(predictions => {
      console.log('Predictions: ');
      console.log(predictions);
    });
  });

    // Load the model.
  cocoSsd.load().then(model => {
    // detect objects in the image.
    model.detect(img).then(predictions => {
      console.log('Predictions: ', predictions);
    });
  });
  */


</script>





</html>
