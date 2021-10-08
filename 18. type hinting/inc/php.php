 <?php
    class caleulation{
     
        
        public function getValue(array $x){
            foreach($x as $value){
                echo $value[0];
                echo " :";
                echo $value[2];
                echo $value[1]*$value[2]."<br>";
            }
        }
    }
?>