<?php
      include("head.html");
    ?>


<!DOCTYPE html>
<html lang="en">

<!-- le haut de site en tete-->
 <head class="en_tete">
<!-- pour connait bien le codage des ascent-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  
<!-- le titre qui c'ecrit en haut de navigyeur -->
    <title>l'Administrateur ajouter une aventure</title>
   
   <link rel="stylesheet" href="securit.css" type="text/css" />
   
<!--le corp du page -->
 <body>

 <form action="" method="POST"><br>
 <div class="secu"> <br><br><br> 
       <p id="txt_conf1">Ajouter une aventure </p><br>

       <div class="form3">
       
       <p id="txt_conf2"> Type  : </p><br>
 
       <label for="Titre">Heading | Titre    : </label>
       <input type="varchar" name="Titre" id="Titre" placeholder=" Titre"><br><br>

       <label for="date">Trip date | Date du voyage   : </label>
       <input type="date" name="Dat" id="date" placeholder=" date"><br><br>

       <label for="Duree">Duration | Durée    : </label>
       <input type="int" name="Duree" id="Duree" placeholder=" Duree"><br><br>

       <label for="Sommaire">Summary | Sommaire   : </label>
       <input type="text" name="Sommaire" id="Sommaire" placeholder=" Sommaire"><br><br>

       <label for="Sommaire">Id user | Id Utulisateur   : </label>
       <select name="id_user" placeholder="choisir id user" id="select_user" >

                <?php

                //mysql_connect("localhost", "root", "");
                //mysql_select_db("aventure ");
               // $reponse = mysql_query("SELECT id_user FROM users");
              //  while ($donnees =  mysql_fetch_array($reponse)){
               

                $mysqlClient = new PDO("mysql:host=localhost;dbname=aventure;charset=UTF8", "root", "");
                $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $sqlQuery = 'SELECT id_user FROM users';
                $usersStatement = $mysqlClient->prepare($sqlQuery);
                $usersStatement->execute();
                $userss = $usersStatement->fetchAll();

                // On affiche chaque recette une à une
                foreach ($userss as $users) {
                 ?>
                <option value="<?php echo $users['id_user']; ?>"><?php echo $users['id_user']; ?></option>
                <?php
                }
                ?>
     </select><br><br>
        <input id="conf" type="submit" value="Submit | Envoyer" name="envoyer"  >
         </div>
    </div>
</form>
   
        <footer>
        </footer>
 </body>
</html>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=aventure;charset=utf8;', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['envoyer']))
{

        $sqlQuery = 'SELECT id_user FROM users';
        $usersStatement = $bdd->prepare($sqlQuery);
        $usersStatement->execute();
        $userss = $usersStatement->fetchAll();

     
    

               
        if(!empty( $_POST['id_user']) AND !empty($_POST['Dat']) AND !empty($_POST['Duree']) AND !empty($_POST['Sommaire']) AND !empty($_POST['Titre']))
        {
            //foreach ($userss as $users) {

            $id_user = $_POST['id_user'];
            $Dat = $_POST['Dat'];
            $Duree = $_POST['Duree'];
            $Sommaire = htmlspecialchars($_POST['Sommaire']);
            $Titre = htmlspecialchars($_POST['Titre']);

            $inserAventure = $bdd->prepare('INSERT INTO ajout_aventur( id_user, Dat, Duree, Sommaire, Titre) VALUES (?,?,?,?,?)');
                        
            //$inserAventure = $bdd->prepare('INSERT INTO users(username,pasword) VALUES (?,?)') ;
            $inserAventure->execute(array($id_user,$Dat, $Duree,$Sommaire,$Titre));
            echo '<script>alert("Ajout est éffectué avec succées!")</script>';
        }else{
            echo '<script>alert("Veuillez compltéter tous les champs...")</script>';
        
        } 

}  
?>





<?php
      include("footer1.html");
   ?>

<?php 
 Function pre_r($array){
     echo '<pre>';
          print_r($array); 
     echo '</pre>';
}
?>