
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="">
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" >
        <title>Acceuil</title>
    </head>
    <body class="bg-img text-center">
        <?php
            function chargerClasse($classe) {
                require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
            }

            spl_autoload_register('chargerClasse');
            $identifiant = $email = $motdepasse = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $identifiant = test_input($_POST["inputIdentifiant"]);
              $email = test_input($_POST["inputEmail"]);
              $motdepasse = test_input($_POST["inputPassword"]);
            }
            if($identifiant!="" and $motdepasse!=""){
                $DB = new PDO("mysql:host=localhost; dbname=projetwebdev", "root","");
                if($email!=""){
                    $request = $DB->query("SELECT id,count(*) FROM compte WHERE id='$identifiant'");
                    $donnees = $request->fetch(PDO::FETCH_ASSOC);
                    if($donnees['count(*)']!=0){
                        echo "Probleme, il existe deja un compte comme ca ";
                    }else{
                        $DB->exec("INSERT INTO compte(id, mdp, mail, logo) VALUES('$identifiant','$motdepasse','$email','')");
                    }
                }else{
                    $request = $DB->query("SELECT id,count(*) FROM compte WHERE mdp='$motdepasse' and (id='$identifiant' or mail='$identifiant')");
                    $donnees = $request->fetch(PDO::FETCH_ASSOC);
                    if($donnees['count(*)']!=0){
                        echo "Parait, on s'est connecté ";
                        echo $donnees['id'];
                    }else{
                        echo "Ah, ca n'a pas marché";
                    }
                }
            }
            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
        ?>
        <div class="zone_co">
            <form class="form-signin" onsubmit="return true" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h1 class="h3 mb-3 font-weight-normal" id="titre">Connection</h1>
                
                <label for="inputIdentifiant" class="sr-only">Identifiant</label>
                <input type="id" name="inputIdentifiant" id="inputIdentifiant" class="form-control" placeholder="Mail ou Identifiant" required autofocus>
                <div>
                <label for="inputMail" class="sr-only">Adresse Mail</label>
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Adresse Mail">
                </div>
                <label for="inputPassword" class="sr-only">Mot de passe</label>
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Rester connecté.
                    </label>
                </div>
                <p id="Switch">Pas encore de compte?<a href="#" onclick="Switch_Inscription()">S'inscrire.</a></p>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
            </form>
            <?php
                if($identifiant==""){
                    echo "ah...";
                }
                echo $identifiant;
                echo $email;
                echo $motdepasse;
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="js/index.js"></script>
    </body>
</html>
