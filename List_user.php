
<?php
      include("head.html");
    ?>
    <html>
    <link rel="stylesheet" href="/style.css" type="text/css" />
<br><br><br>
<p  class="list_ut"> Liste des utilisateurs </p>
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
$sqlQuery = 'SELECT * FROM users';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
?>

<pre class="utilisat">
   Id user : <?php echo $recipe['id_user'] ?>   |Utilisateur    : <?php echo $recipe['username'] ?>   |  Mot de Pass   : <?php echo $recipe['pasword'] ?> |  Date/Heure de creation : <?php echo $recipe['created_at'] ?>  
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