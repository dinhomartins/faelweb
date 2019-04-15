<?php 
// Conexao com o banco de dados
include_once('classes/db.conect.class.php');
include('header.php');
?>


<!-- Menu Lateral  -->
<main class="page-content">
  <div class="container-fluid">
    <h2>FAEL - Controle Financeiro Pessoal - Programação WEB</h2>
    <hr>
    <h5>Resumo</h5>
    <hr>
    <div class="row">
      <div class="col-md-6"> 
        <h3>Entradas</h3>
        <h3>Valor Total: R$ <?php include('classes/relatorio.php') ?>  </h3>   
      </div>
      <div class="col-md-6">
        <h3>Saídas</h3>
        <h3>Valor Total: R$ <?php include('classes/relatorioSaidas.php') ?></h3> 
      </div>
    </div>
  </div
  </main>
  <!-- Fim do container" -->
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="chart.js" ></script>
</body>
</html>