<?php
    
    // Simple time class to test the Composer packagist package system
    namespace FirstPackage;

    class TimeObj
    {
        private $current_time;

        public function getTime()
        {
            $this->current_time = date("H:i:s", time());
            return $this->current_time;
        }

        public function printTime()
        {
            $this->current_time = date("H:i:s", time());
            print($this->current_time);
        }
    }
