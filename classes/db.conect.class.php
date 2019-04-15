<?php 

class ConectDb
{
	public function conectaMysql()
	{
		try 
		{
			$con = new PDO("mysql:host=localhost;dbname=finance", "root", "");
			//$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXECEPTION);
		} catch (PDOException $e) 
		{
			echo $e->getMessage();

		}
		return $con;
	}
}
?>