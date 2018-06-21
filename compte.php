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
        <div id="head">
            <div id="info" class="row">
                <img src="img/avatar_test.png" class="rounded-circle col-sm-3 img-fluid" id="avatar" alt="Avatar">
                <h1 class="col-sm-6 align-item-center" id="pseudo">Pseudo</h1>
                <h3 class="col-sm-3" id="classement_joueur">Classement : </h3>
            </div>
        <button type="button" id="jouer" class="btn btn-warning btn-primary btn-lg">Jouer</button>
        </div>
        <div id="scores" class="row">
            <div class="col">
                <table id="classement_general" class="table table-dark table-striped">
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
    </body>
