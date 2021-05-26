<?php
$maquina = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_landing";

$conexao = mysqli_connect($maquina,$usuario,$senha,$banco);

if ($conexao) {
		
}else{
		echo "Falha na conexão";
}

?>