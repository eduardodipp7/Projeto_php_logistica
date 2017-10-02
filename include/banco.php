<?php

function conectar()
{
  return pg_connect('host=localhost dbname=dexter user=postgres password=postgres');
}
conectar();
function inserir($tabela, $dados)
{
  //insert into tabela (campo1, campo2, campo3...) values (valor1, valor2, valor3, valor4...)
  foreach($dados as $campos => $valor){//separa o post em campos e valores

         $campos[] = $campo; //monta um array somente com os campos
         $valores[] = "'$valor'";//monta um array somente com os valores
  }
  $campos = implode(",", $campos); //Converte o array em string separando por virgula
  $valores = implode(",", $valores);//Converte o array em string separando por virgula
  $sql = "insert into $tabela ($campos) values ($valores)";
  return pg_query($sql);//Insere registro no banco
}

function editar($tabela, $onde, $dados)
{
  //update tabela set campo1 = 'valor1', campo2='valor2'...where id=5
  foreach($dados as $campo=>$valor){
    $sets[] = "$campo = '$valor'";
  }
    $sets = implode(",", $sets);
    $sql = "update $tabela set $sets where $onde";
    return pg_query($sql);
}

function excluir($tabela, $onde=null)
{
  //delete from $tabela where condicao
  $sql = "delete from $tabela";
  if($onde){
    $sql .= " where $onde";
  }
  return pg_query($sql);
}

function listar($tabela, $campos = "*", $onde=null, $filtro=null, $ordem=null, $limite=null)
{
  $sql = "select $campos from $tabela";

  if($onde){
    $sql .= " where $onde"; //exemplo nome  maria;
  }elseif($filtro){
    $sql .= " where $filtro";//exemplo nome like '%maria%'
  }

  if($ordem){
    $sql .= " order by $ordem";
  }
  if($limite){
    $sql .= " limit $limite";
  }
  $query = pg_query($sql);

  return pg_fetch_all($query);
}

function ver($tabela, $campos = "*", $onde)
{
  $sql = "select $campos from $tabela where $onde";
  $query = pg_query($sql); //preparar a consulta
  return pg_fetch_array($query);
}
