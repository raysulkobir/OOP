<?php 
    include "inc/header.php";
    include "inc/php.php";
?>

    <div class="para">
        <?php
            $cal = new caleulation;
            
            $nums = array(
                array("number One", 2,5),
                array("number Two", 20,20)
            );
            $cal->getValue($nums);
        ?>
     </div>

<?php include "inc/footer.php"; ?>