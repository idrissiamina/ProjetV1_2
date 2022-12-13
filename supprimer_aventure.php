
<?php
      include("head.html");
    ?>
    <html>
    <link rel="stylesheet" href="/style.css" type="text/css" />
<br><br><br>
<p  class="list_ut"> La liste des Aventures </p>
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
$sqlQuery = 'SELECT * FROM ajout_aventur';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$userss = $usersStatement->fetchAll();
?>
<ul>
    <pre>
    ID aventure | Id user  | Titre                         | Durée         | Date               | Sommaire 
    </pre>
</ul>

<?php
// On affiche chaque recette une à une
foreach ($userss as $users) {
?>

<pre class="utilisat">
    <li>
        <?php echo $users['id_av'] ?>      |<?php echo $users['id_user'] ?>         |  <?php echo $users['Titre'] ?>            |  <?php echo $users['Duree'] ?>    |   <?php echo $users['Dat'] ?>    |  <?php echo $users['Sommaire'] ?> <a href="supprimer.php?numAventure=<?= $users['id_av'] ?>">Supprimer</a> 
    </li> 
</pre>

<?php
}
?>
<style>
.utilisat {
  font-size: 1.1rem;
  border: 0.8px solid black;
}

</style>

<?php
       include("footer1.html");
    ?>