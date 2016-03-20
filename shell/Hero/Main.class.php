<?php
	namespace Hero;
	//use Hero/Arms/;
	//use Power/XPower as X;
	class Main{
		public $health = 100;
		//private $army = [];
		//private $x = [];
		public $name = "Batman";
		public $attack = 15;
		public $defence = 5;
		//public function equip() {}
		//public function attack() {}
		//public function defend(){}
		public function __toString(){
			echo 'Hero Name: ' . $this->name . " <br> " . ' Attack: ' . $this->attack . ' Defence: ' . $this->defence  . ' Health: '.$this->health. " <br> ";
		}
	}
