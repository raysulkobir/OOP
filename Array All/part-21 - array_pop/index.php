<?php include "inc/header.php";?>
    
    <div class="para">
        <?php
        $check = '';
        $cities = array("London", "Paris", "New York");


        $result = array_pop($cities);

        $check = $cities;
        echo '<pre>';
        print_r($result);

        echo '<br/><pre><hr/>';

        print_r($check);
        ?>
    </div>


<?php include "inc/footer.php"; ?>