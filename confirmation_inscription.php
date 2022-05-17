<meta charset="utf-8">

<?php

// recup toutes les valeurs du post 
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password1 = $_POST['password'];
$encr_passwd = md5($password1);

// get var credentials from .php script below 
include('identifiants.php');
  
// try to connect then insert datas into blog-f1 db
try{

  //if ($password_1 != $password_2) { array_push($errors, "Mots de passe différents");}

  $conn = new PDO("mysql:host=$host;dbname=$bdd", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "INSERT INTO `utilisateurs`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$encr_passwd')";
  $conn->exec($query);
  echo '    <body>
  <div class="card">
  <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
    <i class="checkmark">✓</i>
  </div>
    <h1>Success</h1> ';
  echo "<p>Ton inscription a bien été prise en compte<br/> un mail de confirmation a été envoyé à l'adresse suivante : <h4>", $email, "</h4></p> </div></body>";

  $conn = null;
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

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
            <a class="nav-link" href="notfound.php">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notfound.php">Contact</a>
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
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        margin-top: 150px;
      }
    </style>

</html>