<meta charset="utf-8">

<?php
$email = $_POST['email'];

// subject
$subject = '[OCRSQUARE] Demande de réinitialisation de mot de passe';

// message
$message = '
<html>
<head>
  <title>Bonjour</title>
</head>
<body>
<p>Bonjour,</p>
<p> Nous avons reçu une demande de réinitialisation de mot de passe. Pour le changer, cliquez <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">ici</a>.</p>
<p>Merci,</p>
<p>L\'équipe OCRSQUARE<p>
  <img src="images/logo_principal.JPG" width="175" height="100">
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: OCRSQUARE <etglsquare@gmail.com>' . "\r\n";

// renvoi true ou false (à ajuster quand il y aura accès à la base de donnée)
ob_start();
var_dump(mail("$email", $subject, $message, $headers));
$output = ob_get_clean();

echo '    <body>
<div class="card">
<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
<i class="checkmark">✓</i>
</div>
<h1>Success</h1> ';
echo "<p>Votre demande de réinitialisation de mot de passe a bien été prise en compte<br/> un lien a été envoyé à l'adresse suivante : <h4>", $email, "</h4></p> </div></body>";
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