<?php include "inc/header.php"; ?>

    <div class="para">
            <h2>Addition </h2>
        <?php
            $a = 10;
            $b = 20;
            echo $a + $b;
        ?>
        <h2>Subtraction</h2>
        <?php
            $a = 10;
            $b = 30;
            $b -= $a;
            echo $b;
        ?>
        <h2>Multiplication </h2>
        <?php
            $a = 10;
            $b = 30;
            echo $a*3
        ?>
        <h2>Division</h2>
        <?php
            $a = 10;
            $b = 20;
            echo $a / $b;
        ?>
        <h2>Exponentiation </h2>
        <?php
            $a = 10;
            $b = 20;
            echo $a ** 2;
        ?>
    </div>

<?php include "inc/footer.php"; ?>