
    <?php
      include("head.html");
    ?>

<?php
//isset Détermine si une variable est déclarée et est différente de null
if(isset($_POST['submit'])){
    if(isset($_POST['pasword']) AND isset($_POST['username'])){
        //Détermine si une variable est vide
        if((!empty($_POST['pasword'])) AND (!empty($_POST['username']))){
            if (($_POST['username'] =="FRED") AND ($_POST['pasword'] ==="amina123456") ){

                header("location:List_user.php");
               
            }else{
                $error = "L'utilisateur ou Mot de pass est invalide";
            }
        }else{
            $error = "Veuillez remplir les champs!";
        }
    }
}
?>



<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
<style>

* {
font-family: arial;
}
 
form {
position: absolute;
top: 50%;
left: 50%;
margin-left: -150px;
margin-top: -150px;
}

.boite{
margin-top: 70px;
text-align: center;
color: #FFFAFA;
background: gray;
}
h1 {

}
 
button[type=submit] {
border: solid  2px  violet;
margin-bottom: 10px;
float: center;
padding: 15px;
outline: none;
border-radius: 7px;
width: 150px;
}
input[type=text],
[type=password] {
border: solid  1px  violet;
margin-bottom: 10px;
padding: 16px;
outline: none;
border-radius: 7px;
width: 300px;
}
.erreur {
text-align: center;
color: red;
margin-top: 10px;
}
 
a {
font-size: 14pt;
color: blue;
text-decoration: none;
font-weight: normal;
}

</style>
<div class="boite">
<h1>Page d'Administrateur</h1>
</div>
</head>
<body background="/backg/tem_150606-0007_edit.jpg" >

        
<div  class="erreur"></div>

<form  name="form"  method="post"  action="">
<label for="User">Entrer votre nom    : </label><br><br>
<input  type="text"  name="username"  placeholder="Votre user"  /><br  /><br  />

<label for="mdp"> Entrer votre mot de pass    : </label><br><br>

<input  type="password"  name="pasword"  placeholder="Mot de passe"  /><br  /><br  />


<button name="submit" type="submit" onclick = >Acceés</button><br  /><br  />
<p style="color:red;"><?php if(isset($error)){ echo $error;} ?></p>
</form>
<footer>

</footer>
</body>
</html>


