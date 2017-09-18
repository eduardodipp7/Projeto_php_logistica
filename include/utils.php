<?php

function varificarPagina($link){
	if($link['url'] == basename($_SERVER['PHP_SELF'])){
		return true;
	}else{
		return false;
	}
}

function validar($post){
	$erros = array();
	foreach($post as $campo => $valor){
		if(!$valor){
			$erros[] = $campo;
		}
	}
	if($erros){
		return $erros;
	}else{
		return null;
	}
}
