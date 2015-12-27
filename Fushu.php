<?php
	class Fushu{
		public $a;
		public $b;
		public $num;
		public $i="i";
		function __construct($shibu,$xubu)
		{
			$this->a=$shibu;
			$this->b=$xubu;
			if ($this->a==0 && $this->b==0) {
				$this->num=0;
			}
			else if ($this->a==0) {
				$this->num=$this->b.$this->i;
			}
			else if ($this->b==1){
				$this->num=$this->a."+".$this->i;
			}		
			else if ($this->b==-1){
				$this->num=$this->a."-".$this->i;
			}
			else if ($this->b>0 && $this->b!=1) {
				$this->num=$this->a."+".$this->b.$this->i;
			}
			else if ($this->b<0 && $this->b!=-1) {
				$this->num=$this->a.$this->b.$this->i;
			}
			else if ($this->b==0){
				$this->num=$this->a;
			}
		}
	}
	$num1 = new Fushu('1','2');
	$number1=$num1->num;
	$a1=$num1->a;
	$b1=$num1->b;
	$num2 = new Fushu('3','-4');
	$number2=$num2->num;
	$a2=$num2->a;
	$b2=$num2->b;
	class Operate {
		public $i="i";
		public $op;
		public $new_a;
		public $new_b;
		public $result;
		function __construct($a1,$b1,$ope,$a2,$b2){
				switch ($ope) {
				case '+':
					$this->new_a=$a1+$a2;
					$this->new_b=$b1+$b2;
					break;
				case '-':
					$this->new_a=$a1-$a2;
					$this->new_b=$b1-$b2;
					break;
				
				default: break;
			}
		}
}
$op='+';
$answer = new Operate($a1,$b1,$op,$a2,$b2);
$newA=$answer->new_a;
$newB=$answer->new_b;
$answ = new Fushu($newA,$newB);
$resu=$answ->num;
echo "(".$number1.")".$op."(".$number2.")"."=".$resu;
?>