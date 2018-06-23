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
    }
    else{
            header('Location: http://localhost/ProjetWebDev/index.php');
            exit();
    }
    
    
function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
{
   //Test1: fichier correctement uploadé
     if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
   //Test2: taille limite
     if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
   //Test3: extension
     $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
     if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
   //Déplacement
     return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);
}
 
//EXEMPLES
  $upload1 = upload('newAvatar',"uploads/$identifiant" );
 
  if ($upload1){ header('Location: http://localhost/ProjetWebDev/gestion.php');}
  else {
      echo "Un problème est survenu";}
?>

