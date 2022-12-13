
<?php
      include("head.html");
    ?>
    <?php
            $conn = new PDO("mysql:host=localhost;dbname=aventure;charset=UTF8", "root", "");
            
            $sqlQuery = 'SELECT * FROM ajout_aventur';
            $usersStatement = $conn->prepare($sqlQuery);
            $usersStatement->execute();
            $userss = $usersStatement->fetchAll();

?>


<DOCTYPE>
<html>
<html>
    
    <link rel="stylesheet" href="/style.css" type="text/css" />
<br><br><br>
<body>
    

<h1> La liste des Aventures </h1>
    

    <?php foreach ($userss as $users): ?>
        <ul class="utilisat">
        <li>
            <?= $users['id_av'] ?> - <?= $users['id_user']?> - <?= $users['Titre'] ?> - <?= $users['Duree'] ?> - <?= $users['Dat'] ?> - <?= $users['Sommaire'] ?> <a 
            href="Modifier_av_mysqli.php?numAventure=<?= $users['id_av'] ?>">Modifier</a>
        </li> 
        </ul>
    <?php endforeach; ?>

</body>
</html>
<?php

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