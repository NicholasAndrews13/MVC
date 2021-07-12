// JavaScript Document

function telaListar(){
		
	//console.log('Foi para a tela de cadastro');	
	window.location.href = 'listarClientes.php' ;
}

function telaCadastrar(){
	//console.log('Foi para a tela de cadastro');	
	window.location.href = 'formCadastro.php' ;
	
}

function telaEditar(valor){
	//console.log('Foi para a tela de cadastro');	
	//window.location.href = 'formEditarCadastro.php?id='+valor ; 	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
	
}

function cadastrar(){		
	var nome = $('#nome').val();
	var idade = $('#idade').val();
	// . significa class
	// # significa id
	
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere",nome:nome, idade:idade},
		
		success:function(data){
		alert('Cadastrado');
		telaListar();	
		}		
	})	
}

function atualizar(){	
	var nome = $("#nome").val();
	var idade = $("#idade").val();
	var id = $("#id").val();
	
	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"update",nome:nome, idade:idade, id:id},
		
		success:function(data){
			alert('Cliente Atualizado');
			telaListar();
		}
	})	
	
}

function deletar(valor){
	
	//console.log(valor);
	var result = confirm("Voce tem certeza?");
	if(result == true){
	   
	   	$.ajax({
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"deletar",id:valor},
		
		success:function(data){
			alert('Cliente Deletado do id:'+valor);
			telaListar();
		}
		
	});
	}else{
		alert('Nao apagou!');
	}
	
}