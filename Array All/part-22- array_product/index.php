<?php include "inc/header.php";?>
    
    <div class="para">
        <?php

        $numbers = array(2, 9, 2);


        $result = array_product($numbers);
 
        echo '<pre>';
        print_r($result);

        echo '<br/><pre><hr/>';

        print_r($numbers);
        ?>
    </div>


<?php include "inc/footer.php"; ?>