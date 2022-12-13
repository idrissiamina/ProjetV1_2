<?php
      include("head.html");
    ?>

     <link rel="stylesheet" href="thankyou.css" type="text/css" />

     <div class="thank"><br>
     <p id="tky1"> <br/>Merci  </p>
     <br>
   
          <p>Merci
        <?php 
            echo $_POST["Fir_Nam"];
          ?> 
         <?php 
            echo $_POST["Fam_Nam"];
          ?> 
           Pour votre reservation.</p>
    
        <p>Nous vous contacterons par l'email :
          <?php 
            echo $_POST["email_inp"].".";
          ?>  
        </p>

        <p> A propos de l'emplacement   :
          <?php
            echo $_POST["location"].".";
           ?>
        </p>

        <p> Pour votre voyage  Daté le   :
          <?php 
            echo $_POST["dat"].".";
          ?>  
        </p>

        </div>
        
    <?php
       include("footer1.html");
    ?>
       