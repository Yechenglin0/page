<?php
	namespace Monster;
	//use Hero/Arms/;
	//use Power/XPower as X;
	class Main{
		public $health = 100;
		//private $army = [];
		//private $x = [];
		public $name = "Joker";
		public $attack = 10;
		public $defence = 2;
		//public function run(){};
		//public function equip(){};
		//public function attack(){};
		//public function defend(){};
		public function __toString(){
			echo 'Monster Name: ' . $this->name . " <br> " . ' Attack: ' . $this->attack . ' Defence: ' . 
           $this->defence .' Health: '.$this->health. " <br> ";
		}
	}
