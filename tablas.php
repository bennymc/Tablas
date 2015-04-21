<?php
/*
	echo "Tablas de multiplicar"."<br/>";
	for ($i=1; $i <= 10; $i++) { 
		echo "Tablas del $i"."<br/>";
		for ($j=1; $j <= 10; $j++) { 
			echo "$i x $j = ".$i*$j."<br/>";
		}
	}
	var_dump($i);
	*/
class Tablas{
	public $inicio;
	public $cantidadTablas;
	public function __construct($inicio, $cantidadTablas){
		$this -> inicio = $inicio;
		$this -> cantidadTablas = $cantidadTablas;
	}
	public function muestraTablas(){
		$i = $this -> inicio;
		$n = $this -> cantidadTablas;
		echo "Tablas de multiplicar"."<br/>";
		for ($i; $i <= $n + $this -> inicio; $i++) { 
			echo "Tablas del $i"."<br/>";
			for ($j=1; $j <= 10; $j++) { 
				echo "$i x $j = ".$i*$j."<br/>";
			}
		}
	}
}
$Tablas = new Tablas($_POST["inicio"], $_POST["cantidad"]); 
$Tablas -> muestraTablas();
?>