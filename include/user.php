<?php

function logar($email, $senha){ //faz a autenticação do usuario no banco
  //login : email senha: senha armazenada no banco

  $retorno = ver ('funcionarios', "email = '$email' and senha = '$senha' and prf_id = '1'");
    if($retorno){
      $_SESSION['logado'] = true;
      $_SESSION['usuario'] = $retorno['nome'];
      $_SESSION['id'] = $retorno['id'];
      return true;
    }else{
      return false;
    }
}

function deslogar(){//destroi as sessoes de login ativa

  session_start();
  session_destroy();
  header('location:login.php');
}

function verificaLogin(){//verifica se o usuario está logado
  if(isset($_SESSION['logado'])){
    return true;
  }else{
    return false;
  }
}
