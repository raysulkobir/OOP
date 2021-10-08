<?php 
include "inc/header.php";
include "function.php";
?>
    <div class="para">
       <form action="" method="POST">
            <table>
                <tr>
                    <td>Enter the first Number:</td>
                    <td><input type="number" name="num_1"></td>
                </tr>
                
                <tr>
                    <td>Enter the second Number:</td>
                    <td><input type="number" name="num_2"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="calcultion" value="Colculate"></td>
                </tr>
            </table>
        </form>
        
     <?php
        if(isset($_POST["calcultion"])){
            $numOne = $_POST["num_1"];
            $numTwo = $_POST["num_2"];
            
            if(empty($numOne) or empty($numTwo)){
                echo "<span style='color: red';>File must not be empty...</span><br>";
            }
            
            else{
                echo "<span style='color: green'>First Number: </span>".$numOne."<span style='color: green'> Second Number: </span>".$numTwo."<br>";
            }
            $cal = new calcultion;
            $cal ->add($numOne,$numTwo);
            $cal ->sub($numOne,$numTwo);
            $cal ->mul($numOne,$numTwo);
            $cal ->div($numOne,$numTwo);
        }
     ?>
    </div>
<?php include "inc/footer.php"; ?>