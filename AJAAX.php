<?php
        
            header("Content-Type: text/xml");
            
            echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
            echo "<list>";
            

            if (isset($_POST["jeu"])) {
                $jeu = htmlentities($_POST["jeu"]);
                if(isset($_POST["id"])) {
                    $id = htmlentities($_POST["id"]);
                    recupTableauScorePersonnel($jeu,$id);
                }else{
                    recupTableauScoreGeneral($jeu);
                }
            }
            
            echo "</list>";
            
            function recupTableauScoreGeneral($jeu){
                
                $DB = new PDO("mysql:host=localhost; dbname=projetwebdev", "root","");
                $request = $DB->query("SELECT score,identifiant FROM  score WHERE jeu = '$jeu' ORDER BY score DESC, identifiant ASC");
                while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) { // Chaque entrée sera récupérée et placée dans un array.
                    echo "<item id=\"" . $donnees["identifiant"] . "\" score=\"" . $donnees["score"] . "\" />";
                }
            }
            function recupTableauScorePersonnel($jeu,$id){
                
                $DB = new PDO("mysql:host=localhost; dbname=projetwebdev", "root","");
                $request = $DB->query("SELECT score,date FROM  score WHERE jeu = '$jeu' AND identifiant = '$id' ORDER BY score DESC, identifiant ASC");
                while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) { // Chaque entrée sera récupérée et placée dans un array.
                    echo "<item date=\"" . $donnees["date"] . "\" score=\"" . $donnees["score"] . "\" />";
                }
            }
         
         
        ?>
