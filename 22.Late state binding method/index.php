<?php 
    include "inc/header.php";
     
?>
 <?php
            function __autoload($calss_name){
                include "inc/".$calss_name.".php";
            }
 ?>

    <div class="para">
        <?php
          class phpchild extends php{
              public static function getClass() {
                   return __CLASS__;
              }
          }
          
          $php = new php();
          $php->framework();
          
          $phpChild = new phpchild();
          $phpChild ->framework();
          
        ?>
     </div>

<?php include "inc/footer.php"; ?>