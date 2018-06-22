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
        }else{
            header('Location: http://localhost/ProjetWebDev/index.php');
            exit();
    }
    }
    else{
            header('Location: http://localhost/ProjetWebDev/index.php');
            exit();
    }
    
    
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["newAvatar"]["name"]);

$DB = new PDO("mysql:host=localhost; dbname=projetwebdev", "root","");
$DB->exec("INSERT INTO compte(logo) VALUES('$target_file')");

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["newAvatar"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["newAvatar"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
?>

