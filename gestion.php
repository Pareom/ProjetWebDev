<?php
    session_start();
    if(isset($_COOKIE['id'])){
        if($_COOKIE['id']!=''){
            $_SESSION['id']=$_COOKIE['id'];
        }
    }
    if(isset($_SESSION['id'])){
        if($_SESSION['id']!=''){
            $identifiant=$_SESSION['id'];
        }else{
            header('Location: http://localhost/ProjetWebDev/index.php');
            exit();
    }
    }else{
            header('Location: http://localhost/ProjetWebDev/index.php');
            exit();
    }
    $img="";
    $logo = $email = $logo = "";
    $DB = new PDO("mysql:host=localhost; dbname=projetwebdev", "root","");
    
    //Reccupere image
    
    $req = $DB->prepare("SELECT logo FROM compte WHERE id='$identifiant'");
    $req->execute(array($_SESSION["id"]));
    $img = $req->fetch();
    if($img=="")
    {
        $img="img/avatar_test.png";
    }
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $logo = isset($_POST["newAvatar"])?test_input($_POST["newAvatar"]):"";
      $email = isset($_POST["newMail"])?test_input($_POST["newMail"]):"";
      $motdepasse = isset($_POST["newPassword"])?test_input($_POST["newPassword"]):"";
    }
    
    if($email!="")
    {
        $DB = new PDO("mysql:host=localhost; dbname=projetwebdev", "root","");
        $DB->exec("UPDATE compte SET mail='$email' WHERE id='$identifiant'");
    }
    if($motdepasse!="")
    {
        $DB = new PDO("mysql:host=localhost; dbname=projetwebdev", "root","");
        $DB->exec("UPDATE compte SET mdp='$motdepasse' WHERE id='$identifiant'");
    }
    function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
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
                <img src="<?php echo $img; ?>" style="width:40px; height: 40px" class="rounded-circle" id="avatar">
                <a class="navbar-brand" href="#" id="pseudo"><?php echo $identifiant; ?></a>
                <a class="navbar-brand" href="compte.php" id='retour'>Retour</a>
            </div>
        </nav>
       <div id="zone_modif" class="col-sm-3">
        <form action="upload.php" method="post" enctype="multipart/form-data"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h4>Changer d'avatar</h4>
            <label for="newAvatar" class="sr-only">Changer d'avatar :</label>
            <input name="newAvatar" id='newAvatar' type="file" class="form-control-file border">
            <button class="btn btn-lg btn-primary btn-block" type="submit" id='changeAvatar'>Valider</button>
        </form>
           <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h4>Changer d'email</h4>
            <label for="newMail" class="sr-only">Changer d'addresse mail :</label>
            <input name="newMail" id='newMail' type="email" class="form-control border">
            <button class="btn btn-lg btn-primary btn-block" type="submit" id='changeMail'>Valider</button>
            </form>
           <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
