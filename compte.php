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
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <title>Page compte</title>
    </head>
    <body>
        <div class="container-fluid">
        
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="navbar-nav">
                    <img src="img/avatar_test.png" alt="Logo" style="width:40px; height: 40px" class="rounded-circle" id="avatar">
                    <a class="navbar-brand" href="#" id="pseudo">Pseudo</a>
                    
                    <li class="nav-item dropdown" id="navButton">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Autres
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php" onclick="deconnexion()">Déconnexion</a>
                      <a class="dropdown-item" href="gestion.php">Gestion du compte</a>
                    </div>
                    </li>
                    <a class="navbar-brand" href="#" id="classement_joueur">Classement : </a>
                </div>
            </nav>
        <!---En-tête--->
        <div id="head" class="jumbotron">
            
            <div class="btn-group" id="jeux">
                <button name="choix" id="choixJeu" type="button" class="btn btn-primary" onclick="launchGame()">Choisissez votre jeu !</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                </button>
                <div class="dropdown-menu" >
                  <a class="dropdown-item" id="Agar" onclick="changeAgar();requestGeneral();requestPersonnel(identifiant);">Agar.io</a>
                  <a class="dropdown-item" id="Paper" onclick="changePaper();requestGeneral();requestPersonnel(identifiant);">Paper.io</a>
                  <a class="dropdown-item" id="Slither" onclick="changeSlither();requestGeneral();requestPersonnel(identifiant);">Slither.io</a>
                  <a class="dropdown-item" id="Superhex" onclick="changeSuperhex();requestGeneral();requestPersonnel(identifiant);">Superhex.io</a>
                  <a class="dropdown-item" id="Splix" onclick="changeSplix();requestGeneral();requestPersonnel(identifiant);">Splix.io</a>
                  <a class="dropdown-item" id="Overwatch" onclick="changeOver();requestGeneral();requestPersonnel(identifiant);">Overwatch.io</a>
                </div>
            </div>
        </div>
                    
        <!---Scores--->
        <div id="scores" class="row">
            <div class="col">
                <table id="classement_general" class="table table-dark table-striped" data-toggle="modal" data-target="modalJeu">
                    <thead>
                        <tr>    
                            <th colspan="3">
                                Classement général
                                <button type="button" id="mon_classement" class="btn btn-secondary btn-sm">Mon classement</button>
                            </th>
                        </tr>
                        <tr>
                                <th>#</th>
                                <th class= sm-2>Joueur</th>
                                <th>Score</th>
                        </tr>
                    </thead>
                    <tbody id="TabGeneral">
                        <tr>
                            <th>1</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>7</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>8</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>9</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>10</th>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                    </tbody>
                    <tfoot>
                        <th colspan="3">
                            <ul class="pagination" id="paginaton_general">
                                <li class="page-item"><a class="page-link" href="#"><</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">></a></li>
                            </ul>
                        </th>
                    </tfoot>
                </table>
            </div>
            <div class="col">
                <table id="classement_perso" class="table table-dark table-striped">
                    <thead>
                    <th colspan="2">
                        Scores personnels
                        <select id="trier" class="btn btn-secondary btn-sm">
                            <option>trier par scores</option>
                            <option>trier par dates</option>
                        </select>
                    </th>
                        <tr>
                            <th>Scores</th>
                            <th>Dates</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>-</th>
                            <th>-</th>
                        </tr>  
                    </tbody>
                    <tfoot>
                    <th colspan="2">
                        <ul class="pagination" id="pagination_perso">
                            <li class="page-item"><a class="page-link" href="#"><</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">></a></li>
                        </ul>
                    </th>
                    </tfoot>
                </table>
            </div>
        </div>
        </div>
        <div id="accueil" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#accueil" data-slide-to="0" class="active"></li>
                <li data-target="#accueil" data-slide-to="1"></li>
                <li data-target="#accueil" data-slide-to="2"></li>
                <li data-target="#accueil" data-slide-to="3" class="active"></li>
                <li data-target="#accueil" data-slide-to="4"></li>
                <li data-target="#accueil" data-slide-to="5"></li>
            </ul>
            <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/agar.png" alt="Agar.io" width="500" height="500">
            </div>
            <div class="carousel-item">
              <img src="img/paperVignette.jpg" alt="Paper.io" width="500" height="500">
            </div>
            <div class="carousel-item">
              <img src="img/slither.jpg" alt="New York" width="500" height="500">
            </div>
             <div class="carousel-item">
                 <img src="img/splix.jpg" alt="Splix.io" width="500" height="500">
            </div>
            <div class="carousel-item">
              <img src="img/superVignette.png" alt="SuperhexVignette.io" width="500" height="500">
            </div>
            <div class="carousel-item">
              <img src="img/over.jpeg" alt="Overwatch" width="500" height="500">
            </div>   
          </div>
            <a class="carousel-control-prev" href="#accueil" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#accueil" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
        </div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="js/compte.js"></script>
    </body>
