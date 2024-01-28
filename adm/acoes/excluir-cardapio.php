<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){
	$sql = "DELETE FROM cardapios WHERE id='$id'";
	$resultado = mysqli_query($con, $sql);

	if(mysqli_affected_rows($con)){
		$_SESSION['msg'] = "<p align='center' style='color:green;'>Cardapio apagado com sucesso</p>";
		header("Location: ../painel.php");
	}else{
		
		$_SESSION['msg'] = "<p align='center' style='color:red;'>Erro o cardapio não foi apagado com sucesso</p>";
		header("Location: ../painel.php");
	}
}else{	
	$_SESSION['msg'] = "<p align='center' style='color:red;'>Necessário selecionar um cardapio</p>";
	header("Location: ../painel.php");
}
