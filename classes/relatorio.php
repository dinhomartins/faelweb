<?php 
// Conexao com o banco de dados
include_once('classes/db.conect.class.php');

// Classe relatorio exebi os dados em uma tabela
    class Relatorio
      {

        private $valor;
        private $data;
        private $descicao;

        public function exibirRelatorio()
        {

          $link = new PDO("mysql:host=localhost;dbname=finance", "root", "");
          $conexao = $link->prepare("SELECT * FROM entradas");
          $stmt = $link->prepare("SELECT * FROM entradas");
          $conexao->execute();
          $stmt->execute();
          $total = 0;
          while ($results = $conexao->fetch(PDO::FETCH_ASSOC)) 
          {
            $total += $results['valor'];
          }

          echo $total;

        ?>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Valor</th>
                <th scope="col">data</th>
                <th scope="col">descricao</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
               <?php  while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
              <tr>
                <th scope="row" style="width:30%" >R$: <?php  echo $resultado['valor'] ?> </th>
                <td><?php echo date('d/m/Y', strtotime($resultado['data'])); ?>   </td>
                <td><?php echo  $resultado['descricao']?> </td>
                <td>  <a href="editar.php?id=<?php  echo $resultado['id'] ?>" class="btn btn-primary" >Editar</a> </td>
              </tr>
          <?php endWhile ?>
            </tbody>
        </table>

    <?php 
   }  
  }
?>
<?php 
  $usuario = new Relatorio();
  $usuario->exibirRelatorio();
?>