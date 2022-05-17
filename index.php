<!DOCTYPE html>
<html lang="fr">
<head>
  <title>f1-blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />
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
      <ul class="navbar-nav mr-auto" style="margin-left: auto; margin-right: auto;">
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
      <form method="get" action="index.php">
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Catégories
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="?categorie=pilotes">Pilotes</a></li>
          <li><a class="dropdown-item" href="?categorie=circuits">Circuits</a></li>
          <li><a class="dropdown-item" href="?categorie=voitures">Voitures</a></li>
        </ul>
      </form>
      </div>
    </div>
  </nav>

  <meta charset="utf-8">
<?php

// get var credentials from .php script below 
include('identifiants.php');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connection to db via mysqli
$conn = mysqli_connect($host, $user, $pass, $bdd);

// connection test to our db
if(!$conn){
    die('Echec de connexion à la bdd');
}
//echo 'connexion établie', '<br/>', '<br/>';

// set to utf-8
$query = "SET NAMES UTF8";
mysqli_query($conn, $query);

function getAllPublishedPosts(){
  global $conn;
  $query = "SELECT * FROM post WHERE published = 'true'";
  $result = mysqli_query($conn, $query);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}

function getPostsByCategory($category){
  global $conn;
  $query = "SELECT * FROM post WHERE category = '$category'";
  $result = mysqli_query($conn, $query);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}

if(isset($_GET['categorie'])){
  $getCategory = $_GET['categorie'];
  $getCategory = getPostsByCategory($getCategory);
}else{
  $getCategory = getAllPublishedPosts();
}

mysqli_close($conn);
?>

<div class="container" style="margin-top: 75px">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <?php foreach($getCategory as $post) :?>
  <div class="col">
    <div class="card">
      <a href="<?=$post['link'];?>" class="bg-image hover-zoom">
      <img src="images/<?=$post['image'];?>" class="card-img-top w-100">
      </a>
      <div class="card-body">
        <h5 class="card-title"><?=$post['title'];?></h5>
        <p class="card-text"><?=$post['body'];?></p>
        <p class="card-text">
          <small class="text-muted"><?=$post['updated_at'];?></small> </br>
          <small class="text-muted"><img src="images/eye.png" style="width: 1em;"><?=$post['views'];?></small>
          <a href="?categorie=<?=$post['category'];?>">
          <span class="badge rounded-pill bg-primary"><?=$post['category'];?></span>
          </a>
        </p>
      </div>
    </div>
  </div>
  <?php endforeach;?>
</div>
</div>

</body>
</html>