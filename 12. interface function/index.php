



<?php include "inc/header.php"; ?>

<div class="para">
    <?php

    interface school {

        public function myschool();
    }

    class teacher implements school {

        public function __construct() {
            $this->myschool();
        }

        public function myschool() {
            echo "I am a school Teacher: ";
        }

    }

    $text = new teacher();
    ?>


</div>
<?php include "inc/footer.php"; ?>