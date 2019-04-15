<?php 

  // Classe relatorio exebi os dados em uma tabela
  class RelatorioTotal
  {

   

    // Função SELECT no banco de dados
    public function exibirRelatorioTotal()
    {

      $link = new PDO("mysql:host=localhost;dbname=finance", "root", "");
      $conexao = $link->prepare("SELECT * FROM entradas");
      $stmt = $link->prepare("SELECT * FROM retiradas");
      
      $conexao->execute();
      $stmt->execute();
      
      $total = 0;
      $subtrat = 0;
      while ($results = $conexao->fetch(PDO::FETCH_ASSOC)) 
      {        
        $total += $results['valor'];
      }
      while ($results = $stmt->fetch(PDO::FETCH_ASSOC)) 
      {
        $subtrat += $results['valor'];
      }

      $res = $total - $subtrat;
      echo 'R$ '. $res;
    }   
  }
?>

<?php 
  $usuario = new RelatorioTotal();
  $usuario->exibirRelatorioTotal();
?>