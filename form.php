<?php
//echo $_POST['nom'].'<br>';
//echo $_POST['prenom'].'<br>';


 ?>

 <?php
if (isset($_POST['nom']) && ($_POST['nom'] != ''))
{
  if (isset($_POST['prenom']) && ($_POST['prenom'] != ''))
     {
       if (isset($_POST['message']) && ($_POST['message'] != ''))
        {
         echo $_POST['nom'];
         echo $_POST['prenom'];
         echo $_POST['message'];
        }
     }
 }
?>
