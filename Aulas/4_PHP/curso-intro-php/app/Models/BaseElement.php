<?php

    require_once 'Printable.php';
    
    class BaseElement implements Printable{
        protected $title;
        private $description;
        private $visible = true;
        private $months;
        
        public function __construct($title, $description)
        {
            $this->setTitle($title);
            $this->description = $description;    
        }

        public function setTitle($t){
            if($t == ''){
                $this->title = 'N/A';
            }else{
                $this->title = $t;
            }
        }

        public function getTitle(){
            return $this->title;
        }

        
        public function getDescription(){
            return $this->description;
        }

        public function getDurationsAsString(){
            $years = floor($this->months / 12);
            $extraMonths = $this->months / 12;

            return "$years years $extraMonths months";
        }
    }
?>