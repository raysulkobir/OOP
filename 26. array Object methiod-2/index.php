<?php 
    include "inc/header.php";
//    include "inc/php.php";
     
?>
<?php
//       function __autoload($calss_name){
//           include "inc/".$calss_name.".php";
//       }
?>

    <div class="para">
        <?php
            $arr = array("html", "css", "php", "java");
              $ai = new ArrayIterator($arr);
//                echo $ai->current();
//              $limet = new LimitIterator($ai, 0, 3);
              $ci = new cachingIterator($ai);
                foreach ($ci as $value){
                     echo $value;
                     if($ci->hasNext()){
                         echo ", ";
                     }
                }
        ?>
        
     
     </div>

<?php include "inc/footer.php"; ?>