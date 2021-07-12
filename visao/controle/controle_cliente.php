<?php
// Modulos - Start
include("../../controle/controle_cliente.php");
// Modulos - End

// Recebe valores - start
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$idCliente = $_POST["id"];

$acao         = $_POST["acao"];
//Recebe valores - end
$obj_cliente = new Cliente();
if($acao == "insere"){
	// chama metodo - Start
	$result = $obj_cliente->insere($nomeCliente,$idadeCliente);
	// chama metodo - End	
	
}else if ($acao == "update"){
	
	$result = $obj_cliente->update($nomeCliente,$idadeCliente,$idCliente);
	//echo $result;		
}

else if( $acao == "deletar"){
	
	$result = $obj_cliente->deletar($idCliente);
}
?>