
    <?php
      include("head.html");
    ?>

<?php  
session_start();

?>

<link rel="stylesheet" href="/book.css" type="text/css" />
<body background="/backg/91XXiEWmPRL._AC_SL1500_.jpg" >
 <form action="Thank_you.php" method="post" >

      <div class="misform">
        <p id="txt_f1"> <br/>Réserver un voyage </p>

        <div id="form2">
        
        <p id="txt_f2"> Remplir le formulaire de réservation.  </p><br>

        <label for="first_Name" >  Prénom    : </label>
        <input type="text"  id="Fi_N" name="Fir_Nam" placeholder="firstname" ><br><br>

        <label for="Family_Name" >  Nom de famille   : </label>
        <input type="text"  id="Fa_N" name="Fam_Nam" placeholder="Familyname" ><br><br>

        <label for="email_lab" >  Email    : </label>
        <input type="email"  id="email_lab1" name="email_inp" placeholder="your email" ><br><br>
        <label for="locat">  Emplacement   : </label>
        
        <select type="text" name="location" placeholder="your location" id="location1">
          <option value="Monreal">  Monreal  </option>
          <option value="Vancouver">  Vancouver  </option>
          <option value="Quebec">  Quebec  </option>
          <option value="Torento">  Torento  </option>
          <option value="loc" selected> Choisissez un localisateurn </option>
        </select><br><br>

        <label for="date">  Date du voyage : </label>
        <input type="date" name="dat" value ="dd-mm-yyyy" id="dat1"><br><br>

        <label for="GSM" >  Téléphone Cellulaire    : </label>
        <input type="tel"  id="Pcellulaire" name="Phon_cel" placeholder="phonecellulaire" ><br><br>

        <input id="sub" type="submit" value="Reserver"  onclick="Thank_you.php">
      </div>
      </div>
    </form> 

  
</body>
    <?php
       include("footer1.html");
    ?>
