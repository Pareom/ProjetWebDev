<?php
    session_start();        
    /* ca sert à la deconnexion, il faut faire un bouton qui fasse ca 
    $_SESSION['id']=""; 
    setcookie('id', '', time() + 1, null, null, false, true);
     */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <title>Page compte</title>
    </head>
    <body id="body_compte">
        <div class="container-fluid">
        <?php
            // put your code here
        ?>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="navbar-nav">
                    <img src="img/avatar_test.png" alt="Logo" style="width:40px; height: 40px" class="rounded-circle" id="avatar">
                    <a class="navbar-brand" href="#" id="pseudo">Pseudo</a>
                    
                    <li class="nav-item dropdown" id="navButton">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Autres
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="index.php">Déconnexion</a>
                      <a class="dropdown-item" href="gestion.php">Gestion du compte</a>
                    </div>
                    </li>
                    <a class="navbar-brand" href="#" id="classement_joueur">Classement : </a>
                </div>
            </nav>
        <!---En-tête--->
        <div id="head" class="jumbotron">
            
            <div class="btn-group" id="jeux">
                <button id="choixJeu" type="button" class="btn btn-primary">Choisissez votre jeu !</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" onclick="changeAgar()">Braaaa.io</a>
                  <a class="dropdown-item" onclick="changePaper()">Paper.io</a>
                  <a class="dropdown-item" onclick="changeSlither()">Slither.io</a>
                  <a class="dropdown-item" onclick="changeSuperhex()">Superhex.io</a>
                  <a class="dropdown-item" onclick="changeSplix()">Splix.io</a>
                  <a class="dropdown-item" onclick="changeOver()">Overwatch.io</a>
                </div>
            </div>
        </div>
            
        <!---Modal jeu--->    
        <div class="modal fade" id="modalJeu">
            <div class="modal-header">
                <h4 class="modal-title">Choisissez votre jeu !</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" href="game.php">Jouer !</button>
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
                    <tbody>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="js/compte.js"></script>
    </body>
