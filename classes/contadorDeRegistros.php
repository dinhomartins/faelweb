<?php 

class ContadorRegistros{

	private $contador;

	public function getContator()
	{
	    return $this->contator;
	}
	
	public function setContator($contator)
	{
	    return $this->contator = $contator;
	}

	public function contadorReg(){

		$conn = new PDO("mysql:host=localhost;dbname=finance", "root", "");
		$stmt = $conn->prepare("SELECT * FROM entradas");
		$stmt->execute();
		$results = $stmt->rowCount();
		echo $results;
	}
}

$usuario = new ContadorRegistros();
$usuario->contadorReg(); 	


 ?>