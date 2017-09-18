<?php

function varificarPagina($link){
	if($link['url'] == basename($_SERVER['PHP_SELF'])){
		return true;
	}else{
		return false;
	}
}
