<meta charset="utf-8">
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
<?php

// recup toutes les valeurs du post 
$email = $_POST['email'];
$password = $_POST['password'];
$encr_passwd = md5($password);

// get var credentials from .php script below 
include('identifiants.php');

// try to connect then insert datas into blog-f1 db
try{
    $conn = new PDO("mysql:host=$host;dbname=$bdd", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $conn->prepare("SELECT email FROM utilisateurs WHERE password=?");
    $q->execute([$encr_passwd]);
    // thanks to that we will be able to fetch into database
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $conn = null;
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Test</title>
    </head>
    <body>
        <div id="container">
            <h1>Utilisateurs</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo ($row['email']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>