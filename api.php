<?php
     header('Content-Type: application/json');
       try 
       {
           $pdo = new PDO('mysql:host=localhost;dbname=aminatad_portofolio;','user','MDP');
             $retour["success"]= true;
             $retour["message"]= "connection reussie";
       } 
       catch (Exception $e) 
        {
            $retour["success"]= false;
            $retour["message"]= "connection echouer";
        } 
          $requete = $pdo->prepare("SELECT * FROM projets");
          $requete->execute();
          $resultats = $requete->fetchALL();

          $retour["success"]= true;
          $retour["message"]= "voici les projets";
          $retour["results"]["projets"]= $resultats;

         echo json_encode($retour);
?>