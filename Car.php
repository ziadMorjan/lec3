<?php 
    class Car 
    {
        private $type;
        private $color;

        public function __construct($type, $color)
        {
            $this->type = $type;
            $this->color = $color;
        }

        public function getType()
        {
            return $this->type;
        }

        public function getColor()
        {
            return $this->colore;
        }

        public function setType($type)
        {
            $this->type = $type;
            return $this;
        }
        public function setColor($color)
        {
            $this->color = $color;
            return $this;
        }
    }
?>