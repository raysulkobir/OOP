<?php
    class language{
        private $category;
        private $famework;
        
        function setCat($a){
            $this->category = $a;
        }
        
        function getCat(){
          return $this->category;
        }
        
        function setFamework($b){
           $this->famework = $b;
        }
        
        function getFamework(){
            return $this->famework;
        }
    }
        
?>