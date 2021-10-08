<?php 
    include "inc/header.php";
?>
 

    <div class="para">
        <?php
            $db = new mysqli("localhost", "root", "", "userdata");
            if(mysqli_connect_errno()){
                echo "Connecting fail..";
                exit();
            }
            else{
                echo "Connecttion Seccessfull....";
            }       
         ?>
       
     </div>

<?php include "inc/footer.php"; ?>