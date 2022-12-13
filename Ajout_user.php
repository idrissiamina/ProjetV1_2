    <?php
      include("head.html");
    ?>


  <title>Admin</title>
    <link rel="stylesheet" href="securit.css" type="text/css" />
<!--le corp du page -->
  <body>
  <form action ="Ajout_user.php" method = "POST" align="center" class="ajot_use"><br>
  <div class="secu"> <br><br> 
        <p id="txt_conf1">Ajouter des utilisateurs </p><br>

        <div class="form3">

        <label for="User"autocomplete="off">Nom d'utilisateur    : </label><br>
        <input type="text" name="username" id="user" placeholder="Type your User" autocomplete="off"><br><br>

        <label for="mdp"autocomplete="off"> Mot de passe    : </label><br>
        <input type="password" name="pasword" id="mdp" placeholder="Type your Pass Word" autocomplete="off" ><br><br><br>
        <input id="sub1" type="submit" value="Ajouter un utilisateur" name="submit" autocomplete="off">
       
 <style>
  .ajot_use{
       text-align: center;
    text-decoration:blue;

  }
  .box-title{

    color: rgb(8, 8, 196);

  }
input[type=submit] {
border: solid  2px  Blue;
margin-bottom: 6px;
float: center;
padding: 15px;
font-size:1em;
outline: none;
border-radius: 7px;
width: 180px;
}
input[type=text],
[type=password] {
border: solid  2px  blue;
margin-bottom: 10px;
padding: 16px;
outline: none;
border-radius: 7px;
width: 300px;
}
label{
  font-size:1.5em;
}
</style>
      </div>
</form>
    
<footer>

    
        </footer>
  </body>
</html>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=aventure;charset=utf8;', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit'])){
  if(!empty($_POST['username']) AND !empty($_POST['pasword']) And ('username'!='users'.'username')){

    $username = htmlspecialchars($_POST['username']);
    $pasword = sha1($_POST['pasword']);
    $insertUser = $bdd->prepare('INSERT INTO users(username,pasword) VALUES (?,?)') ;
    $insertUser->execute(array($username,$pasword));
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
  Function pre_r($array)
  {
      echo '<pre>';
           print_r($array); 
      echo '</pre>';
 }
?>