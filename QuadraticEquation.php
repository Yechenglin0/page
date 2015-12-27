<?php
header("Content-type: text/html; charset=utf-8");
	class Solve 
	{
		public $a;
		public $b;
		public $c;
		public $delta;
		function __construct($a,$b,$c)
		{
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
			if ($this->delta<0) {
				die("<script>alert('此方程无解！');history.go(-1);</script>");
			}
			else 
			{
				$this->delta= ($this->b)*($this->b)-4*($this->a)*($this->c);
				$d = sqrt($this->delta);
				$answer1 = (-$this->b+$d)/2/$this->a;
				$answer2 = ($this->b+$d)/2/$this->a;
				if ($answer1==$answer2) {
					echo "此方程仅一个解：".$answer1;
				}
				else
				{
					echo "第一个解为：".$answer1."<br>";
					echo "第二个解为：".$answer2."<br>";
				}
			}
		}
	}
	$question1 = new Solve('1','2','1');
?>