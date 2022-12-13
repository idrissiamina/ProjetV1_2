<?php
      include("head.html");
    ?>


<?php

$db = new PDO('mysql:host=localhost;dbname=aventure;charset=utf8;', 'root', ''); 
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdostat = $db->prepare('SELECT *From ajout_aventur where id_av = :num');

$pdostat->bindValue(':num',$_GET['numAventure'],PDO::PARAM_INT);

$excecuteOk = $pdostat->execute();

$users = $pdostat->fetch();

?>

<html>
<head>
 <link rel="stylesheet" media="screen" type="text/css" href="monstyle.css">
 <title>modifier une Aventure</title>
</head>
<body>


 <form id="form1" name="form1" method="POST" action="Modif.php">

 <FIELDSET>
  <LEGEND align='top'><h1><fieldset>MODIFIER UNE AVENTURE </fieldset></h1></LEGEND>
   <table width="420" border="0">
    
   <input name="numAventure" type="hidden" id="id_av" value="<?= $users['id_av'];?>" />
   <input name="id_user" type="hidden" id="id_user" value="<?= $users['id_user'];?>" />
    <tr>
   <td>TITRE</td>
     <td><label>
      <input name="Titre" type="varchar" id="Titre" value="<?= $users['Titre'];?>" />
     </label></td>
    </tr>
    
    <tr>
     <td>DATE</td>
     <td><label>
     <input name="Dat" type="Date" id="Dat" value="<?= $users['Dat'];?>" />
     </label></td>
    </td>
    </tr>

    <tr>
     <td>DUREE</td>
     <td><label>
     <input name="Duree" type="int" id="Duree" value="<?= $users['Duree'];?>" />
     </label></td>

     </tr>
     
     <tr>
     <td>Sommaire</td>
     <td><label>
     <input name="Sommaire" type="text" id="Sommaire" value="<?= $users['Sommaire'];?>" />
     </label></td>


    </tr>
    
    <tr>
     <td>
      <div class=monBouton>
       <input name="Modifier" type="submit" class="ajouter" value="Modifier" />
    <!--  <input name="Annuler" type="reset" class="Annuler" value="Annuler" onclick='document.form1.action="annuler.php?fichier=0";document.form1.submit();'/> 
-->   
    </div>  
     </td>
    </tr>

   </table>
  </FIELDSET>
  
 </form>
</body>
<html>
<?php
      include("footer1.html");
?>
