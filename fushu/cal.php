<?php
	header("Content-Type: text/plain;charset=utf-8"); 
	interface Complex{
		public function plus();
		public function subtract();
		public function compare();
	}
	class Cal implements Complex{
		public $num1;
		public $num2;
		public $num3;
		public $num4;

		public function __construct($num1, $num2, $num3, $num4){
			$this->num1 = $num1;
			$this->num2 = $num2;
			$this->num3 = $num3;
			$this->num4 = $num4;
		}

		public function plus(){
			if(($this->num3 + $this->num4) > 0){
				echo ($this->num1 + $this->num2) ."+". ($this->num3 + $this->num4) . 'i';
			}else{
				echo ($this->num1 + $this->num2) . ($this->num3 + $this->num4) . 'i';
			}

		}

		public function subtract(){
			if(($this->num3 + $this->num4) > 0){
				echo ($this->num1 - $this->num2) ."+". ($this->num3 - $this->num4) . 'i';
			}else{
				echo ($this->num1 - $this->num2) . ($this->num3 - $this->num4) . 'i';
			}
		}

		public function compare(){}

	}

$cal = new Cal($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4']);

switch ($_POST['op']) {
		case 'j':
			$cal->plus();	
			break;
		case '-':
			$cal->subtract();
			break;
		default:
			echo "参数错误";
			break;
	}