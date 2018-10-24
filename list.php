<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <div class="row">
                <div class="col-7 text-center">
                    <h1>Liste ajout</h1>
                </div>
                <div class="col-5">
                    <form method="POST" class="d-inline">
                        <input type="text" name="search" placeholder="Search">
                        <button class="btn btn-success">OK</button>
                    </form>
                    <a href="ajout.php">
                        <button class="btn btn-primary">Nouveau</button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr class="bg-primary text-light">
                                <td>#</td>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>Age</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
    <?php


        require('connexion.php');

        if (isset($_POST['search']) && $_POST['search'] !='')
        {
          $search = $_POST['search'];
          $resultats = $pdo->prepare("SELECT * FROM eleve WHERE nom LIKE :search ORDER BY nom");
          $resultats->bindparam(':search', $search);

        }
        else {

        $resultats = $pdo->prepare("SELECT * FROM eleve ORDER BY nom");

      }
        $resultats->execute();
        while($eleve = $resultats->fetch()){
                            echo '<tr>';
                            echo '<td>'.$eleve['id'].'</td>';
                            echo '<td>'.$eleve['nom'].'</td>';
                            echo '<td>'.$eleve['prenom'].'</td>';
                            echo '<td>'.$eleve['age'].' </td>';
                            echo '<td><a href="sup.php?id='.$eleve['id'].'"><button class="btn btn-danger">Supprimer</button></a></td>';
                            echo '<td><a href="update.php?id='.$eleve['id'].'"><button class="btn btn-danger">Modifier</button></a></td>';
                            echo '</tr>';
        }

    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
</html>
