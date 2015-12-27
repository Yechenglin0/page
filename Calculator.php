<?php
header("Content-type: text/html; charset=utf-8");
class Calculator
{
	public $num1;
	public $num2;
	public $op;
	public $res;
	function __construct($number1,$operate,$number2)
	{
		$this->num1 = $number1;
		$this->op = $operate;
		$this->num2 = $number2;
		if (!is_numeric($this->num1)) {
			die("<script>alert('第一个数不为数字！');history.go(-1);</script>");
		}
		if (!is_numeric($this->num2)) {
			die("<script>alert('第二个数不为数字！');history.go(-1);</script>");
		}
	}
	function operate(){

		switch ($this->op) {
			case '+':
				$result = $this->num1+$this->num2;
				break;
			case '-':
				$result = $this->num1-$this->num2;
				break;
			case '*':
				$result = $this->num1*$this->num2;
				break;
			case '/':
				if ($this->num2==0) {
					die("<script>alert('被除数不能为0！！');history.go(-1);</script>");
				}
				$result = $this->num1/$this->num2;
				break;
			default;
		}
		$this->res = $result;
	}
}
	$answer = new Calculator($_POST['num1'],$_POST['op'],$_POST['num2']);
	$answer->operate();
	$resu = $answer->res;
	echo '答案是：'.$resu;

