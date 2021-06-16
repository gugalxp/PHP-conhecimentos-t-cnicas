<?php 

function soma(float ...$valores){

	return array_sum($valores);
}
echo soma(1.2,2.6);
echo "<br>";
echo soma(3.1,2.4);
echo "<br>";
echo soma(5.5,5.4);
?>