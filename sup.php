<?php
if (isset($_GET['id']) && $_GET['id'] !='') {
  require('connexion.php');
  $id = $_GET['id'];
  $requete = $pdo->prepare ('DELETE FROM eleve WHERE id = :id');
  $requete->bindparam(':id', $id);
  $requete->execute();
  header('Location: list.php');
}
