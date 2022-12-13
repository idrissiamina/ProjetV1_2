<?php
      include("head.html");
    ?>


<?php

$db = new PDO('mysql:host=localhost;dbname=aventure;charset=utf8;', 'root', ''); 
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdostat=$db->prepare('UPDATE ajout_aventur 
SET id_user =:id_user, Titre=:Titre, Duree=:Duree, Dat=:Dat, Sommaire=:Sommaire WHERE id_av =:num  LIMIT 1');

$pdostat->bindValue(':num',$_POST['numAventure'], PDO::PARAM_INT);
$pdostat->bindValue(':id_user',$_POST['id_user'], PDO::PARAM_INT);
$pdostat->bindValue(':Titre',$_POST['Titre'], PDO::PARAM_STR);
$pdostat->bindValue(':Duree',$_POST['Duree'], PDO::PARAM_INT);
$pdostat->bindValue(':Dat',$_POST['Dat'], PDO::PARAM_STR);
$pdostat->bindValue(':Sommaire',$_POST['Sommaire'], PDO::PARAM_STR);

$excecuteOk=$pdostat->execute();

if($excecuteOk){
    $message = 'L\'aventure à été modifier';
}
else{
    $message = 'Echec de la modification de l\'aventure';
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
    <title>Modification de l'Aventure </title>
   
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


</footer>
</html>
<?php
      include("footer1.html");
?>
