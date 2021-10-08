<?php include "inc/header.php";?>

     <div class="para">
     
        <?php
            function __autoload($calss_name){
                echo $calss_name."<br>";
                include "inc/".$calss_name.".php";
            }
        ?>
        
        <?php
            $jv = new java; 
            $ph = new php;
            $ru = new ruby;
        ?>
      
       
    </div>
<?php include "inc/footer.php"; ?>