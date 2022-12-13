
    <?php
      include("head.html");
    ?>


<?php
if($_POST)
{
    $host="localhost";
    $user="root";
    $pass="";
    $db ="aventure";
$username=$_POST['username'];
$pasword=$_POST['pasword'];
$conn=mysqli_connect($host, $user, $pass,$db );
$query="SELECT * from users where username='$username' AND pasword='$pasword'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
    session_start();
    $_SESSION['users']='true';
    header('location:liste_Aventure.php');
            
        }else{

            $message = "L'utilisateur ou Mot de pass est invalide";
      
        }
}

?>
<body background="/backg/(Image)-image-Canada-ontario-toronto-panorama-17-it_000016596188.jpg" >

<form action="" method="post" class="util"> 
<h1 class="box-title">Connexion de l'utilisateur</h1><br><br><br>
 <label for="User">Entrer votre nom    : </label><br><br>
 <input type="text" name="username" placeholder="Username"><br><br>
 <label for="mdp"> Entrer votre mot de pass    : </label><br><br>
 <input type="password" name="pasword" placeholder="Password"> <br><br>   
 <button name="submit" type="submit">Acceés</button>
 <style>
  .util{
    margin-top:100px;
    text-align: center;
    text-decoration:blue;

  }
  .box-title{

    color: rgb(8, 8, 196);

  }
button[type=submit] {
border: solid  2px  Blue;
margin-bottom: 10px;
float: center;
padding: 15px;
font-size:1.5em;
outline: none;
border-radius: 7px;
width: 150px;
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
 </form>
 <p style="color:red; text-align:center;"><?php if(isset($message)){ echo $message;} ?></p>
</body>
  



