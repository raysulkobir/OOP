<?php 
    include "inc/header.php";
?>
 

    <div class="para">
        <?php
           /* $dsn = "mysql:dbname=userdata; host=localhost;";
            $user = "root";
            $pass = "";
            
            try {
                $pdo=new PDO($dsn,$user,$pass);
           } catch (PDOException $s) {
                echo "Connectin fail....".$s->getMessage();
            }
           
            $name="md.kamal";
            $email="kamal@gmail.com";
            $skill="php,java";
         
            
            $sql="insert into tbl_user(name,email,skill) values(?,?,?)";
            $stmt=$pdo->prepare($sql);
            $arr=array($name,$email,$skill);
            $stmt->execute($arr);
            * 
            */
            
//            $sql="insert into tbl_user(name,email,skill,age) values(:name, :email, :skill, :age)";
//            $stmt=$pdo->prepare($sql);
//             $stmt->bindParam(':name',$name);
//            $stmt->bindparam(':email',$mail);
//             $stmt->bindParam(':skill',$skill);
//             $stmt->bindParam(':age',$age);
//             $stmt->execute();
         
        $dsn = "mysql:dbname=userdata; host=localhost";
        $user="root";
        $pass="";
        
        try {
            $pdo = new PDO($dsn,$user,$pass);
        } catch (PDOException $ex) {
            echo "Connection fill....".$ex->getMessage();
        }
        $name = "yeapas";
        $email = "yeapas@gmail.com";
        $skill = "java,java VC";
        
        $sql="insert into tbl_user(name,email,skill) value(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $result = array($name,$email,$skill);
        $stmt->execute($result);
 
        
     
        
        
        
        ?>
       
        
    </div>
 
<?php include "inc/footer.php"; ?>