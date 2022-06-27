<?php include "inc/header.php";?>
    
    <div class="para">
        <?php
        $data[] = array('volume' => 67, 'edition' => 2);
        $data[] = array('volume' => 86, 'edition' => 1);
        $data[] = array('volume' => null, 'edition' => 6);
        $data[] = array('volume' => 98, 'edition' => 2);
        $data[] = array('volume' => 86, 'edition' => 6);
        $data[] = array('volume' => 67, 'edition' => 7);



        $volume  = array_column($data, 'volume');
        echo '<pre>';
//        array_multisort($volume, SORT_ASC, $data);
//        print_r($data);

        $edition = array_column($data, 'edition');
        array_multisort($volume, SORT_ASC, $data);

        echo '<br/><hr><pre/>';
        $dd = $data;
        print_r($data);

        echo '<br/>F<hr><pre/>';

        $edition = array_column($dd, 'edition');
        array_multisort($edition, SORT_ASC, $dd);
        print_r($dd);

        echo '<br/>m<hr><pre/>';
       $r=  array_merge($data, $dd);
       print_r($r);



        ?>
    </div>
<?php include "inc/footer.php"; ?>