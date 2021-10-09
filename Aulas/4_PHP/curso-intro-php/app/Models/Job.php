<?php

    require_once 'BaseElement.php';
    

    class Job extends BaseElement{

        public function __construct($title, $description)
        {
            $newTitle = 'Job: '.$title;
            parent::__construct($title, $description);
        }

        public function getDurationsAsString()
        {
            $years = floor($this->months / 12);
            $extraMonths = $this->months % 12;

            return "Job duartion: $years years $extraMonths months";
        }

    }

?>