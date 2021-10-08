<?php include "inc/header.php"; ?>
    <div class="para">
        <?php
            class personeName{
               private $name;
               public $age;

               function UserName(){
                   echo  "Preson Name: ".$this->name."<br>";
               }

               function Age($value){
                   echo "Person age is: ".$this->age=$value;
               }
        }

        $personOne = new personeName;
//        $personOne ->name = "Md.Jamal khan";
        $personOne ->UserName();

 ?>
    </div>

<?php include "inc/footer.php"; ?>