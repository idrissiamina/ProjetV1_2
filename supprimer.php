<?php
      include("head.html");
?>

<?php

    $pdo = new PDO('mysql:host=localhost;dbname=aventure;charset=utf8;', 'root', ''); // PDO Driver DSN. Throws A PDOException.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

//Suppression d'une ligne à l'aide d'une instruction préparée
$stmt=$pdo->prepare('DELETE FROM ajout_aventur WHERE id_av = :id_av LIMIT 1');

//Préparez notre déclaration DELETE
$stmt->bindvalue(':id_av', $_GET['numAventure'], PDO::PARAM_INT);

//Le nom que nous souhaitons supprimer de notre table 'users'
//Liez la variable $name au paramètre :name

//Exécuter notre instruction DELETE
$excutok = $stmt->execute();
if ($excutok){
    $message= 'L\aventure a été supprimé';
}
else{
    $message= 'Echec de la suppression d\aventure';
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- le haut de site en tete-->
 <head class="en_tete">
<!-- pour connait bien le codage des ascent-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  
<!-- le titre qui c'ecrit en haut de navigyeur -->
    <title>Suppression </title>
   
   <link rel="stylesheet" href="securit.css" type="text/css" />
   
<!--le corp du page -->
 <body>
    <p class="messag"> <?=$message ?></p>
</body>

<style>
    .messag{
        font-size: 1.5rem;
        text-align: center;
        color:blue;
        margin-top: 120px;
    }
</style>




<footer>

<?php
       include("footer1.html");
?>
</footer>
</html>