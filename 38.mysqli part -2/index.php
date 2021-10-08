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
                echo "Connecttion Seccessfull....<br>";
            }  
            
            
//          $sql = "select *from tbl_user";
//            $result = $db->query($sql);
//           while($data = $result->fetch_object()){
//                echo $data->name."<br>";
//            }
            
            $sql = "ubdate tbl_user SET name = 'hqhqhql, jamal' where if ='3'";
            $result = $db->query($sql);
            
         ?>
       
     </div>

<?php include "inc/footer.php"; ?>