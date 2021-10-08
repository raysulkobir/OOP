<?php 
    include "inc/header.php";
    include "inc/php.php";
     
?>
<?php
       function __autoload($calss_name){
           include "inc/".$calss_name.".php";
       }
?>

    <div class="para">
        <?php
            $java = new language();
            $java->setCat("OOP");
            $java->setFamework("sting");
            
            $php = clone $java;
            $php->setCat("setcat->php");
            $php->setFamework("segFamework->php");
            echo $java->getCat()."<br>";
            echo  $java->getFamework()."<br>";
            
            echo $php->getCat()."<br>";
            echo $java->getFamework();
       
        ?>
     </div>

<?php include "inc/footer.php"; ?>