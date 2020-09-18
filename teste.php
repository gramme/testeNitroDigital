<?php
	function valida_numero($val) {
	  if (is_numeric($val)) {
		return true;
	  }
	  return false;
	}

	function valida($var)){
		if (isset($var)) {
			return true;
		}
		return false;
	}

	fuction valida_array($arr){
		if(is_array($arr)){
			return true;
		}
		reutrn false;
	}
	//a
	if valida_numero($variavel){
		echo $variavel;
	}
	//b
	if valida_array($variavel){
		extract ($variavel);
		echo valida($endereco);
	}
	//c
	if valida($variavel){
		echo $variavel;
	}
?>