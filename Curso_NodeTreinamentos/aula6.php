<?php
  //Escopo de variaveis

  //Escopo global
  $nome = "Felipe";
  $a = 2;
  $b = 4;
  $c = 8;

  function exibeNome(){
    //Escopo local
    global $nome; //global define a variavel para o escopo global
    echo $nome;
  }

  function exibeCidade(){
    //Escopo Local
    global $cidade; 
    $cidade = "São Paulo";
  }

  exibeNome();
  exibeCidade();

  //Acessando a variavel cidade
  echo $cidade;

  echo "<hr>";

  function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];

  }

  soma();

?>
