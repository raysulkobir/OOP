<?php include "inc/header.php";?>
    
    <div class="para">
        <?php
        $check = '';
        $numbers = array(5, 10, 15, 20, 25, 30);


        $result = array_pad($numbers, 7, 0);
        $check = $numbers;


        echo '<pre>';
        print_r($result);

        echo '<br/><pre><hr/>';

        print_r($check);
        ?>
    </div>


<?php include "inc/footer.php"; ?>