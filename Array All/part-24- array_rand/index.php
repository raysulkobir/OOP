<?php include "inc/header.php";?>
    
    <div class="para">
        <?php

        $colors = array("red", "green", "blue", "yellow", "orange");

       $result =  array_rand($colors, 4);
        echo '<pre>';
        print_r($result);

        echo '<br/><pre><hr/>';

        echo $colors[$result[0]].'<br/>';

        echo $colors[$result[1]].'<br/>';
        echo $colors[$result[2]].'<br/>';
        echo $colors[$result[3]].'<br/>';

        echo '<br/><pre><hr/>';
        print_r($colors);


        ?>
    </div>


<?php include "inc/footer.php"; ?>