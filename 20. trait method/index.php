<?php 
    include "inc/header.php";
    include "inc/php.php";
?>

    <div class="para">
        <?php

        trait java {
            function javaCoder(){
                return  "I love is a java programs<br>";
            }

        } 

        trait php{
            public function phpCoder(){
               return "I love is a php programs<br>";
            }
        }
        class coderOne{
            use java;
        }
        class coderTwo{
            use java;
        }
            
        $c1= new coderOne;
        echo $c1->javaCoder();
        $c2 = new coderTwo;
        echo $c2->phpCoder();
        

        ?>
     </div>

<?php include "inc/footer.php"; ?>