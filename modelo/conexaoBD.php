<?php
	/// modelo - start
	/// Conexao Banco
class ConexaoBD{
	
	public function con(){
	$conectar =  mysqli_connect("localhost","root","") or die(mysqli_error());
	// Seleciona Banco
	mysqli_select_db($conectar,"mvc")or die(mysql_error());
	/// modelo - end
	return $conectar;
	}
}
	/*
	
	$sql = "SELECT * FROM cliente";
	
	$resultado = mysqli_query($conectar,$sql);

	while($dados = mysqli_fetch_assoc($resultado)){
		
		echo "Nomes:". $dados['nomeCliente'].'<br>';	
		echo "Idade:". $dados['idadeCliente'].'<br>';
	}
*/

?>