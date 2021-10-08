<?php 
    include "inc/header.php";
    include "inc/php.php";
?>

    <div class="para">
        <?php
            $class = new person;
           
        
                foreach ($class as $kye=>$value){
                echo "<pre>";
                echo "$kye.$value";
                echo "</pre>";
                }
           $class->iteratorinnr();
       
        ?>
     </div>

<?php include "inc/footer.php"; ?>