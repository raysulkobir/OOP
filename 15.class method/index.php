<?php include "inc/header.php";
      include "test.php";
?>
  
    <div class="para">
        <?php
        if(class_exists("student")){
            $me = new student;
            $me->add();
        }
        else{
            echo "Class file not be.........";
        }
        
        
        
        if(method_exists($me, $add)){
                $me = new student;
                  $me->add();
        }
        else{
            echo "methean file not be.........";
        }
        
           
        ?>
      
       
    </div>
<?php include "inc/footer.php"; ?>