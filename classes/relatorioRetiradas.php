<?php 

  // Classe relatorio exebi os dados em uma tabela
  class RelatorioRetiradas
  {

    private $valor;
    private $data;
    private $descicao;

    // Função SELECT no banco de dados
    public function exibirRelatorio()
    {

      $link = new PDO("mysql:host=localhost;dbname=finance", "root", "");
      $conexao = $link->prepare("SELECT * FROM retiradas");
      $stmt = $link->prepare("SELECT * FROM retiradas");
      //$soma = $link->prepare("SELECT SUM(valor) AS total FROM entradas ");
      $conexao->execute();
      $stmt->execute();
      
      $total = 0;

      while ($results = $conexao->fetch(PDO::FETCH_ASSOC)) 
      {        
        $total += $results['valor'];
      }

      echo 'R$ '. $total;
    }   
  }
?>

<?php 
  $usuario = new RelatorioRetiradas();
  $usuario->exibirRelatorio();
?>