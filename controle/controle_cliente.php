<?php
// Load Modelo - Start
include( $_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php") ;

// Load Modelo - End
/*
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];

$acao         = $_POST["acao"];


if($acao == "insere"){
	
	echo 'INSERT';

	$sqlInsert = "INSERT INTO cliente ( nomeCliente, idadeCliente) VALUES ('".$nomeCliente."',".$idadeCliente." );";
	mysqli_query($conectar,$sqlInsert);

}else if($acao == "editar"){
	
	echo 'UPDATE';
	
}else if($acao == "deleta"){
	
	echo 'DELETA';
	
}
*/
class Cliente{
	public function busca($id = false){
		/* Instruçoes sql*/
	$obj_con = new ConexaoBD ;
	$conectar= $obj_con->con() ;
		
	$sql = "SELECT * FROM cliente " ;
		
	if($id>0){
		
	$sql .= "WHERE idCliente = ".$id ;
		
	}
		
	$resultado = mysqli_query($conectar,$sql) ;
	$r = 0 ;	
	while($dados = mysqli_fetch_assoc($resultado)){
		$linha[$r]['idCliente'] = $dados['idCliente'] ;
		$linha[$r]['nomeCliente'] = $dados['nomeCliente'] ;	
		$linha[$r]['idadeCliente'] = $dados['idadeCliente'] ;
		$r++ ;				
		}
		
		return $linha ;
	}
	
	public function insere($nome,$idade){
		
	$resultado = true ;
	$obj_con = new ConexaoBD ;
	$conectar= $obj_con->con() ;
		
	$sqlInsert = "
	INSERT INTO cliente (
	nomeCliente, idadeCliente
	) VALUES (
	'".$nome."',
	".$idade.");
	" ;
	$resultado = mysqli_query($conectar,$sqlInsert)or die($resultado = false) ;
	
	if($resultado === false){		
		return false ;
	}else{
		return true ;
		}
	}
	
	public function update($nome,$idade,$id){
		
		$resultado = true ;
		$obj_con = new ConexaoBD ;
		$conectar= $obj_con->con() ;
		
		$sqlUpdate = "UPDATE cliente SET nomeCliente = '".$nome."',idadeCliente ='".$idade."' WHERE idCliente = ".$id ;
		$resultado = mysqli_query($conectar,$sqlUpdate)or die($resultado = false) ;
		
		//return($sqlUpdate);
		}		
	
	public function deletar($id){
		
		$resultado = true ;
		$obj_con = new ConexaoBD ;
		$conectar= $obj_con->con() ;
		
		$sqlDeletar ="DELETE FROM cliente WHERE idCliente = ".$id ;
		$resultado = mysqli_query($conectar,$sqlDeletar)or die($resultado = false) ;
	}
}
	?>