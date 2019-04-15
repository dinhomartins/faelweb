<?php 


class RelatorioSaida{

	private $valor;

	public function getValor()
	{
	    return $this->valor;
	}
	
	public function setValor($valor)
	{
	    return $this->valor = $valor;
	}

	public function relSaida(){

		$con = new PDO("mysql:host=localhost;dbname=finance", "root", "");

		$stmt = $con->prepare("SELECT * FROM retiradas");
		$conexao = $con->prepare("SELECT * FROM retiradas");
		$stmt->execute();
		$conexao->execute();

		$tot = 0;

		while ($results = $stmt->fetch(PDO::FETCH_ASSOC)) {
			
			$tot += $results['valor'];

		}
		echo $tot;
	?>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Valor</th>
                <th scope="col">data</th>
                <th scope="col">descricao</th>
              </tr>
            </thead>
            <tbody>
               <?php  while ($resultado = $conexao->fetch(PDO::FETCH_ASSOC)): ?>
              <tr>
                <th scope="row" style="width:30%" >R$: <?php  echo $resultado['valor'] ?> </th>
                <td><?php echo date('d/m/Y', strtotime($resultado['data'])); ?>   </td>
                <td><?php echo  $resultado['descricao']?> </td>
              </tr>
          <?php endWhile ?>
            </tbody>
        </table>

    <?php 
   }

}

$usuario = new RelatorioSaida();
$usuario->relSaida();

 ?>