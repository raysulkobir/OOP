<?php include "inc/header.php";?>
    
    <div class="para">
        <?php

        $colors = array("red", "green", "blue");
        $col = ['lime', 'yellow']+$colors;

//        array_push($colors, 'lime', 'yellow');
 
        echo '<pre>';
//        print_r($result);

        echo '<br/><pre><hr/>';

        print_r($col);
        ?>
    </div>


<?php include "inc/footer.php"; ?>