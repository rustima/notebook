<?php
    class Clock{
        private $hour;
        private $minute;
        private $second;

		public function settime($hour,$minute,$second){
			$this->hour = $hour;
			$this->minute = $minute;
			$this->second = $second;
		}
        public function display(){
			$hour = 10;
			echo $this->hour.":".$this->minute.":".$this->second;
		}
}

$a = new Clock;
//$a->display();
$a->settime(9,10,1);
$a->display();
