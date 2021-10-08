<?php include "inc/header.php";?>
  
    <div class="para">
        <?php
//        megic method
            class student{
                public $name;
                public function megi_me(){
                    echo "I am a student<br>";
                }
                
                public function __get($pm) {
                    echo "$pm does not exist<br>";
                }
                 
                public function __set($pm, $value) {
                    echo "we set $pm->$value";
                }
                
               
                 
            }
            $meg = new student;
            $meg->megi_me();
            $meg->Hasah;
            $meg->age = 15;
            
        ?>
      
       
    </div>
<?php include "inc/footer.php"; ?>