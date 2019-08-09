<?php
class myclass{
	public $z = 10;

	function sum($x,$y){
		echo "sum = ".($x+$y);
	}

	function sub($x,$y){
		echo "minus = ".($x-$y);
	}

	function myfunc($x){
		echo "x = ".$x;
	}

	/* myfunc(10); */
}

$ob = new myclass();
$ob->sum(10,20);

?>
