<?php
  //Aulas sobre constantes

  //Para definir uma constante usa-se
  //define(NOME_DA_CONSTANTE, VALOR_DA_CONSTANTE);
  //Veja abaixo:

  define("CONSTANTE", "http://localhost:8000");
  define("VERSAO", "1.0");

  echo "Meu site é " . CONSTANTE . "<br>";
  echo "Versão: " . VERSAO;

?>
