<?php include "inc/header.php";?>

     <div class="para">
     
        <?php
            function __autoload($calss_name){
                echo $calss_name."<br>";
                include "inc/".$calss_name.".php";
            }
        ?>
        
        <?php
           $ph = new php;
           $ph->framwork()->cms();
            
        ?>
      
       
    </div>
<?php include "inc/footer.php"; ?>