<?php
//include "conexao.php";//incluir o arquivo de conexao

$nome = $_POST['NOMECOMPLETO'];
$email = $_POST['EMAIL'];
$telefone = $_POST['CELULAR'];

$sql = "INSERT INTO tb_landing 
(nome,email,telefone) values 
('$nome','$email','$telefone')";

//$salvar = mysqli_query($conexao,$sql); //guarda os dados
$cabecalho = "From: fabio@professorfabio.net";
$assunto = "assunto do php";
$msg = "mensgem <p style='color:red; font-size:30px;'>do</p> php";
$enviar = mail($email, $assunto, $msg, $cabecalho);
if ($enviar) {
	echo "ok";
}else{
	echo "falhou";
}



?>