<?php
if (isset($_POST['nom']) && ($_POST['nom'] != ''))
{
  if (isset($_POST['prenom']) && ($_POST['prenom'] != ''))
     {
       if (isset($_POST['age']) && ($_POST['age'] != ''))
        {
         $nom =  $_POST['nom'];
         $prenom =  $_POST['prenom'];
         $age =  $_POST['age'];
         require ('connexion.php');
         $requete = $pdo->prepare('INSERT INTO eleve(nom,prenom, age) VALUES(:nom, :prenom, :age)');
         $requete->bindParam(':nom', $nom);
         $requete->bindParam(':prenom', $prenom);
         $requete->bindParam(':age', $age);
         $requete->execute();

        }
        header('Location: list.php');
     }
 }

 if (isset($_POST['search']))
 {
   echo $_POST['search'];
 }
