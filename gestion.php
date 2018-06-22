<?php
    session_start();
    if(isset($_COOKIE['id'])){
        if($_COOKIE['id']!=''){
            $_SESSION['id']=$_COOKIE['id'];
        }
    }
    if(isset($_SESSION['id'])){
        if($_SESSION['id']!=''){
            $identifiant=$_COOKIE['id'];
        }
    }
    else{
            header('Location: http://localhost/ProjetWebDev/compte.php');
            exit();
    }
    $logo = $email = $logo = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $logo = test_input($_POST["newAvatar"]);
      $email = test_input($_POST["newMail"]);
      $motdepasse = test_input($_POST["newPassword"]);
    }
    
    if(!$email="")
    {
        $DB = new PDO("mysql:host=localhost; dbname=projetwebdev", "root","");
        $DB->exec("UPDATE compte SET ");
    }        
?>
    
    
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <title>Gestion de votre compte</title>
    </head>
    <body class="bg-img text-center">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="navbar-nav">
                <img src="img/avatar_test.png" alt="Logo" style="width:40px; height: 40px" class="rounded-circle" id="avatar">
                <a class="navbar-brand" href="#" id="pseudo">Pseudo</a>
                <a class="navbar-brand" href="compte.php" id='retour'>Retour</a>
                
                
            </div>
        </nav>
       <div id="zone_modif" class="col-sm-3">
        <form action=" method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h4>Changer d'avatar</h4>
            <label for="newAvatar" class="sr-only">Changer d'avatar :</label>
            <input name="newAvatar" type="file" class="form-control-file border">
            <button class="btn btn-lg btn-primary btn-block" type="submit" id='changeAvatar'>Valider</button>
            <h4>Changer d'email</h4>
            <label for="newMail" class="sr-only">Changer d'addresse mail :</label>
            <input name="newMail" type="email" class="form-control border">
            <button class="btn btn-lg btn-primary btn-block" type="submit" id='changeMail'>Valider</button>
            <h4>Changer de mot de passe</h4>   
            <label for="newPassword" class="sr-only">Changer de mot de passe :</label>
            <input name="newPassword" type="password" class="form-control border">
            <button class="btn btn-lg btn-primary btn-block" type="submit" id='changePassword'>Valider</button>
        </form>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
