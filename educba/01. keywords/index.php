<?php include "inc/header.php"; ?>

    <div class="para">
<!--        https://www.educba.com/php-keywords/?source=leftnav-->

        <h2>Keyword: abstract</h2>
        <?php
//           abstract class Program{
//                function display(){
//                    echo "hello I am display funciton";
//                }
//            }
//
//            class Child extends Program{
//                function display(){
//                    echo "hello I am display Child funciton";
//                }
//            }
//            $obj = new Child();
//            $obj->display();
        ?>

        <h2>Keyword: and</h2>
        <?php
//            $a = 20;
//            $b = "20";
//            if($a === $b){
//                echo "true";
//            }else{
//                echo "false";
//            }
        ?>

        <h2>Keyword: array()</h2>
        <?php
//            $array = [1, 2, 3, 4, 5, 6];
//            $data = [];
//            foreach ($array as $ar){
//                array_push($data, $ar);
//            }
//            echo "<pre>";
//            print_r($data);
        ?>

        <h2>Keyword: break</h2>
        <?php
//            $array = [1, 2, 3, 4, 5, 6];
//            foreach($array as $ar){
//                if($ar == 2){
//                    break;
//                }
//                echo $ar;
//
//            }
        ?>

        <h2>eval</h2>
        <?php
        $string1 = 'World';
        $string2 = 'John Doe';
        $string3 = 'Kamal';
        $string = 'Hello $string1 .  My name is $string2 $string3';
//        echo $string;
//        exit();
//        echo "<br>".$string;
//        eval("\$string = \"$string\";");
        eval("\$string = \"$string\";");
        echo "<br>".$string;

        $a = "apple";
        $b = "boll";
        $c = "cat $a , $b";
//        eval("\$c = \"$c\";");
        echo $c;
        ?>
    </div>

<?php include "inc/footer.php"; ?>