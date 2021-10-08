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
            $arry = array("HTML", "CSS", "PHP", "JAVA");
             
            $coding = new ArrayObject($arry);
            $coding->append("javascript");
            $iterator = $coding->getIterator();
            while($iterator->valid()){
                echo $iterator->current()."<br>";
            $iterator->Next();
            }
            
            
                    
            
             
            
        ?>
        
     
     </div>

<?php include "inc/footer.php"; ?>