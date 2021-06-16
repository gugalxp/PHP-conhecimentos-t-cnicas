<?php 

function soma(int ...$valores){

	return array_sum($valores);
}
echo soma(1,2);
echo "<br>";
echo soma(3,2);
echo "<br>";
echo soma(5,5);
?>