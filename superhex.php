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
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <title>Superhex.io</title>
    </head>
    <body>
        <h1>Superhex.io</h1>
        <img src="img/work.jpg" alt="Traveaux en cours">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="js/compte.js"></script>
    </body>
</html>

