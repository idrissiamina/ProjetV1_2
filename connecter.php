
    <?php
      include("head.html");
    ?>

<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=aventure;charset=utf8;', 'root', ''); // PDO Driver DSN. Throws A PDOException.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
<p class="connect">
<?php echo"La connexion est établie avec succès!";?>
</p>
    <?php
}
catch( PDOException $Exception ) {
    // Note The Typecast To An Integer!
    throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
    echo"connection failed: ";
}

?>
<style>
.connect{
margin:150px;
text-align: center;
font-size: 20pt;
color:#1a1aff;
font-weight: normal;   
    }
</style>
<?php
      include("footer1.html");
?>
