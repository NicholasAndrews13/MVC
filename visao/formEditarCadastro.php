<?php include("../controle/controle_cliente.php")?>
<?php $id = $_POST['id'];	
//echo $id;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
	<script type="application/javascript" src="../js/cliente.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<!-- Comentar html -->
	<?php
	
	$obj_cliente = new Cliente();		
	$arrayCliente = $obj_cliente->busca($id);
	
	//echo '<pre>';
	//var_dump($arrayCliente);
	//echo '<pre>';
	
	?>
<body>
	<form action="" >
		Nome: <input type="text" name="nome" id="nome"  value="<?php echo $arrayCliente[0]['nomeCliente']?>" ><br>
		Idade: <input type="text" name="idade" id="idade" value="<?php echo $arrayCliente[0]['idadeCliente']?>" >			
		<input type="hidden" name="id" id="id" value="<?php echo $arrayCliente[0]['idCliente']?>">
		
		<input type="button"  id="atualizarBtn" onClick="atualizar()" value="Alterar" >
		<input type="hidden" name="acao" value="alterar">
	</form>
	<br>	
	<input type = "button" onClick="telaListar()" value="Tela de Listar Clientes">
</body>
</html>