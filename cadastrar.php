<?php
$usu = new Usuario();
$per = new Permissao();

  function preencherDados($nome, $telefone, $nivel) {
	setTelefone($telefone);
	setNone($nome);
	$per->setNivel($nivel);
  }
  
  	
	if(!empty($usu->nome) && !empty($usu->telefone) && !empty($per->nivel)){
		cadastrar();
	}else{
		$erro = "";
		if(empty($usu->nome){
			$erro += "Nome ";
		}
		if(empty($usu->telefone){
			$erro += "Telefone ";
		}
		if(empty($per->nivel){
			$erro += "Nível ";
		}
		$erro += "precisa(m) ser preenchido(s)";
		throw new Exception($erro);
	}

function cadastrar(){
	set_data_cadastro(date("d/m/Y"));

}


echo getTelefone();
echo getNome();
echo getNivel();
echo getDataCadastro();
?>