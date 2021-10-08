 <?php
    class person{
        public $Name="Md.Raysul kobir";
        public $Age = "19";
        public $skill = "java";
        
        private $Email = "new@gmail.com";
        protected $pass = "12345";
        
        function iteratorinnr(){
          foreach ($this as $kye=>$value){
                echo "<pre>";
                echo "$kye.$value";
                echo "</pre>";
        }
     
   }
    }
  ?>