<?php include "inc/header.php"; ?>

    <div class="para">
        <h2>Equal Comparison Operator</h2>
        <?php
            $a = 10;
            $b = 10;
            echo $a == $b ? "true" : "false";
        ?>
        <h2>Identical Comparison Operator</h2>
        <?php
            $a = 30;
            $b = 30;
            echo $a === $b ? "true" : "false";
        ?>
        <h2>Identical Comparison Operator</h2>
        <?php
            $a = 10;
            $b = 10;
//            echo $a != $b ? "ture" : "false";
            echo $a <> $b ? "true" : "false";
        ?>
        <h2>Less than Comparison Operator</h2>
        <?php
            $a = 10;
            $b = 200;
            echo $a > $b ? "true" : "false";
        ?>
    </div>

<?php include "inc/footer.php"; ?>