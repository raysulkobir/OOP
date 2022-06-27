<?php include "inc/header.php";?>
    
    <div class="para">
        <?php
        $array1 = array("pets"=>array("cat", "dog"), "wilds"=>array("lion", "fox"));
        $array2 = array("fruits"=>array("apple", "banana"), "lemon", "corn");

//        $result = $array1;
        $result = array_merge_recursive($array1, $array2);



        echo '<pre>';
        print_r($result);
        ?>
    </div>


<?php include "inc/footer.php"; ?>