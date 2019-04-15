<?php 
// conexão com o banco de dados utilizando PDO
include_once('db.conect.class.php');

// Classe de inserção e dados no banco 
class SitemaFinanceiro{

	// Atributos
	private $retirada;
	private $data;
	private $descricao;

	// Métodos Setters e Getters para receber os dados do form via GET e adicionar nas variaveis privadas
	public function getRetirada()
	{
	    return $this->retirada;
	}
	
	public function setRetirada($retirada)
	{
	    return $this->retirada = $retirada;
	}

	public function getData()
	{
	    return $this->data;
	}
	
	public function setData($data)
	{
	    return $this->data = $data;
	}

	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao($descricao)
	{
	    return $this->descricao = $descricao;
	}

	// Função de inserção de entradas
	public function salvarRetirada(){

		// Instancia do banco de dados
		//$objDb = new ConectDb();
		//$con = $objDb->conectaMysql();
		$con = new PDO("mysql:host=localhost;dbname=finance", "root", ""); 
		$stmt = $con->prepare("INSERT INTO retiradas (valor, data, descricao) VALUES (:valor, :data, :descricao) ");

		// BindParam para juntar os dados e substituir e salvar no banco de dados
		$stmt->bindParam(":valor", $this->retirada);
		$stmt->bindParam(":data", $this->data);
		$stmt->bindParam(":descricao", $this->descricao);

		//Executa a query e salva no banco
		$stmt->execute();

		// teste de verificação se foi salva no banco - Se o valor retonardo pelo rowCount for diferente de 0 ele confirma que foi inserido com sucesso
		$resultado = $stmt->rowCount();
		if($resultado > 0){
			//echo "Retirado com sucesso ";
			echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=../saidas.php'>";
			echo "<script>alert('Retirada cadastrada com sucesso ');</script>";

		}else{
			echo "Erro ao cadastrar ";
		}
	}
}



	// Orientação a objetos
// a variavel $usuario recebe a nova instancia da classe SitemaFinanceiro
$usuario = new SitemaFinanceiro();

// Recebe os dados do FORM via metodo Set
$usuario->setRetirada($_POST['retirada']);
$usuario->setData($_POST['data']);
$usuario->setDescricao($_POST['descricao']);

// Recebe a função salvarEntrada que está dentro da classe SitemaFinanceiro
$usuario->salvarRetirada();

?>