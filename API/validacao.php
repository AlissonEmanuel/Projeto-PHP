<?php 

function validaProdutos($dados){
	$erro = false;
	if($dados['titulo'] == ''){

		$erro .= '<p>Preencha o Título</p>';
	}
	if($dados['descricao'] == ''){

		$erro .= '<p>Preencha a Descrição</p>';
	}
	if($dados['valor'] == ''){

		$erro .= '<p>Preencha o Valor</p>';
	}

	return $erro;

	}