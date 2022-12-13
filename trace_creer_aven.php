
<?php
      include("head.html");
    ?>
    <html>
    <link rel="stylesheet" href="/style.css" type="text/css" />
<br><br><br>
<p  class="list_ut"> L'utilisateur qui a créé l'aventure. </p>
</html>
<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO("mysql:host=localhost;dbname=aventure;charset=UTF8", "root", "");
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = "SELECT * FROM ajout_aventur, users WHERE users.id_user=ajout_aventur.id_user";
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$userss = $usersStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($userss as $users) {
?>

<pre class="utilisat">
  username     : <?php echo $users['username'] ?>        | Titre      : <?php echo $users['Titre'] ?>           | Sommaire             : <?php echo $users['Sommaire'] ?>| Date de creation l'aventure   : <?php echo $users['created_at'] ?> 
</pre>
<?php
}
?>
<style>
.utilisat {
  font-size: 1.1rem;
  border: 1.2px solid black;
}

</style>

<?php
       include("footer1.html");
    ?>