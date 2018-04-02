<?php

function getInfo($atributo){

	//$dados = array("Titulo","Descrição");
	$dados = ["titulo"=>"Site Modelo", "descricao"=>"PHP"];
	return $dados[$atributo];
}