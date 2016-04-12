<?php
	class Operate {
		private $num1;
		private $num2;
		private $res;
		public function __construct($num1,$num2) {
			$this->num1 = $num1;
			$this->num2 = $num2;
		}

		public function add() {
			$this->res = $this->num1 + $this->num2;
			return $this->res;
		}
		public function sub() {
			$this->res = $this->num1 - $this->num2;
			return $this->res;
		}
		public function mul() {
			$this->res = $this->num1 * $this->num2;
			return $this->res;
		}
		public function div() {
			if($this->num2===0) {
				echo '除数不能为0';
			} else {
			$this->res = $this->num1 / $this->num2;
			return $this->res;
		}
	}
}
	class Factory{
        public static function createCalculator($num1,$num2){
        	$Cal = new Operate($num1,$num2);
        	return $Cal;
        }
	}

	$op = Factory::createCalculator(1,1);
	$res = $op->div();
	//$res = $op->add();
	echo $res;

?>