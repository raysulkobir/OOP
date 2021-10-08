<?php 
    include "inc/header.php";
    include "inc/function.php";
    include "inc/php.php";
    include "inc/java.php";
    include "inc/rube.php";
     
?>
<?php
//       function __autoload($calss_name){
//           include "inc/".$calss_name.".php";
//       }
?>

    <div class="para">
        <?php
        
        use raysul\live\php as ph;
            
            new raysul\java();
            echo "<br>";
            new raysul\rube();
            echo "<br>";
            new ph();
        ?>
        
     
     </div>

<?php include "inc/footer.php"; ?>