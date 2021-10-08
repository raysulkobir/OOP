<?php include "inc/header.php";?>
    
    <div class="para">
        <?php
           class person{
               public $name;
               public $age;
               public function __construct($a, $b){
                     $this->name = $a;
                     $this->age = $b;
               }
               public function  parsonDetails(){
                 echo "person name is: {$this->name} and person age: {$this->age}";
               }
           } 
           $personOne = new person("Md.Kamal khan","20");
           $personOne -> parsonDetails();
        ?>
       
    </div>
<?php include "inc/footer.php"; ?>