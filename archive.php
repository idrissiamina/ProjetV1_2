
     <link rel="stylesheet" href="/style.css" type="text/css" />    
    
    <?php
    include("head.html");
    ?>
   
  <body class="blan">

    <header>
        <div class="blok">
            <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg" class="img1" alt="Kayak" />
         
              <h1 class="txt">come experience canada</h1>
        </div>
      
    </header>
          <div class="list_A">
                      <div class="t1">
                                <h2 class="tit1">Upcoming Adventures</h2>
                      </div>
                                <div id="ligne"><hr></div>
                              
                      <div class="t2">         
                                <h3 class="tit2">Halifaxe</h3>
                                <h5 class="tit3">
                                Date : 2017-04-12<br>
                                Duration : 4 days<br>
                                </h5>
                            <h4>Summary</h4>
                        </div>

                        <div class="phar">
                              <p >Lorerr ipsum dolor sit amet. consecteur adipisicing elit, set do elusmod tempor incididunt ut jdkfdsldcl labore et dolore magna aliga. Ut enim ad minim veniam proident; sunt in culpa qui officia deserunt mollit ani, id est laborum.
                              </p>
                        </div>
                        <div class="t2">
                                  <h3 class="tit2">Sydney</h3> 
                                  <h5 class="tit3">
                                Date : 2017-05-10</br>
                                Duration : 2 days</br>
                              </h5>
                                <h4>Summary</h4>
                        </div>
                      <div class="phar">
                                <p >lorem ipsum dolor sit armet, consecteur adipisicing elit, set do elusmod tempor indididunt ut labore et dolor magna amiqua. Ut enim ad minim veniam proident; sunt in culpa qui officia deserunt mollit ani, id est laborum.
                                </p>
                      </div>
          </div>
         
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

// On affiche chaque recette une à une
foreach ($userss as $users) {
?>

<div class="list_A">

    <div class="t2">         
       <h3 class="tit2"><?php echo $users['Titre'] ?></h3>
        <h5 class="tit3">
       Date : <?php echo $users['Dat'] ?><br>
       Duration : <?php echo $users['Duree'] ?> days<br>
        </h5>
        <h4>Summary</h4>
       </div>

       <div class="phar">
         <p ><?php echo $users['Sommaire'] ?>  </p>
       </div>

 </div>
<?php
}
?>
<style>
.utilisat {
  font-size: 1.1rem;
  border: 1.2px solid black;
}

</style>







  <footer>

    <?php
       include("footer1.html");
    ?>
  </footer>


  </body>
