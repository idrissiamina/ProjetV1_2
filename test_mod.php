<?php
$host="localhost";
$user="root";
$pass="";
$db ="aventure";
$conn=mysqli_connect($host, $user, $pass,$db );

// on se connecte à notre base
?>
<html>
<head>
<title>Modification de l'aventure</title>
</head>
<body>



<form id="form1" name="form1" method="POST" action="">

 <FIELDSET>
  <LEGEND align='top'><h1><fieldset>MODIFIER UNE AVENTURE </fieldset></h1></LEGEND>
   <table width="420" border="0">
    
    <tr>
     <td>Numero Aventure</td>
     <td><label>
      <input name="id_av" type="hidden" id="id_av"  value="<?php echo $id_av;?>"/>  
     </label></td>
    </tr>
    
    <tr>
     <td>NUMERO USER</td>
     <td><label>
      <input name="id_user" type="hidden" id="id_user"  value="<?php  echo isset($array_result['id_user']); ?>"/>
     </label></td>
    </tr>

    <!-- <tr>
     <td>NUMERO USER</td>
     <td><label>
      <input name="id_user" type="hidden" id="id_user" value="<?php /* echo isset($array_result['id_user']) ? $array_result['id_user'] : ''; */?>"/>
     </label></td>
    </tr> -->
    
    <tr>
   <td>TITRE</td>
     <td><label>
      <input name="Titre" type="varchar" id="Titre" value="<?php echo isset($array_result['Titre']) ? $array_result['Titre'] : '';?>" />
     </label></td>
    </tr>
    
    <tr>
     <td>DATE</td>
     <td><input name="Dat" type="date" id="Dat" /></td>
    </tr>

    <tr>
     <td>DUREE</td>
     <td><input name="Duree" type="int" id="Duree" /></td>
     </tr>
     
     <tr>
     <td>Sommaire</td>
     <td><input name="Sommaire" type="text" id="Sommaire" /></td>
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


</body>
</html>
<?php
// on teste si les variables du formulaire sont déclarées
if (isset($_POST['Titre']) AND isset($_POST['Duree']) AND isset($_POST['Dat']) AND isset($_POST['Sommaire']) AND isset($_POST['id_user']) AND isset($_POST['id_av']) ) 
{

    $sql="UPDATE ajout_aventur 
    SET Titre = {$_POST['Titre']},
    Duree={$_POST['Duree']},
    Dat={$_POST['Dat']},  
    Sommaire={$_POST['Sommaire']}
   WHERE id_av ={$_POST['id_av']} AND id_user={$_POST['id_user']}";

	// lancement de la requête
	//$sql = 'UPDATE liste_proprietaire SET adresse="'.$_POST['nouvelle_adresse'].'" WHERE nom="'.$_POST['proprio'].'"';

	// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
	mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

	// on ferme la connexion à la base
	mysql_close();

	// un petit message permettant de se rendre compte de la modification effectuée
	echo 'La nouvelle enregistrement de '.$_POST['id_av'].' est : '.$_POST['Titre'];
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées';
}
?>

