<?php include "inc/header.php";
    include "function.php"
?>
    
    <div class="para">
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Ender Ths Fist Number:</td>
                    <td><input type="number" name="num_1"</td>
                </tr>
                
                <tr>
                    <td>Ender Ths Second Number:</td>
                    <td><input type="number" name="num_2"</td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="calculator" value="Sumbit"</td>
                </tr>
            </table>
        </form>
        
        <?php
            if(isset($_POST["calculator"])){
                $Number_1 = $_POST['num_1'];
                $Number_2 = $_POST['num_2'];
                if(empty($Number_1) or empty($Number_2)){
                    echo "File must not be empty...<br>";                
                    
                }
              
               
                
                 class calculation{
                    function add($a,$b){
                        echo "Sumation: ".($a+$b);
                
            }
            }
            
            
        }
        
          $cal = new calculation;
                $cal -> add($Number_1,$Number_2);
        ?>
    
 
       
    </div>
<?php include "inc/footer.php"; ?>