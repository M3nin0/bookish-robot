<?php
  //Constantes

  //define(NOME_DA_VARIAVEL, VALOR);
  define("NOME", "Felipe");
  define("IDADE", 21);
  define("ALTURA", 1.89);
  define("CASADO", False);

  echo "Nome: " . NOME . "<br>";
  echo "Idade: " . IDADE . "<br>";
  echo "Altura: " . ALTURA . "<br>";
  echo "Casado: ";
  if(CASADO == True)
    echo "Sim <br>";
  else
    echo "Não <br>";

  //Definindo constante array
  //As constantes são globais

  define("SGBD", ["MySQL","MongoDB","SQLite","MariaDB"]);

  echo SGBD[1];

?>
