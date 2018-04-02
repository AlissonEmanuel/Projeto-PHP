<?php 
function getUsuarios(){
	$dados = [

		["nome" =>"Vinicius","email" =>"visacastelani@gmail.com"],
		["nome" =>"Mateus","email" =>"mateus@gmail.com"],
		["nome" =>"Richard","email" =>"richard@gmail.com"]

	];

	return $dados;
}

function exibeUsuario(){
	$usuarios = getUsuarios();
	$html = "";

	foreach($usuarios as $chave => $usuario){
		$nome = $usuario["nome"];
		$email = $usuario["email"];
		$html .= "<li>Nome: $nome  -  Email: $email     </li>";

	}



	echo $html;
}