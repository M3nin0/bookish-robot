<!DOCTYPE html>

<!-- Neste código veremos como mandar valores para a propria página -->
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 5</title>
  </head>
  <body>
    <form method="get" action="testeSet_get.php">
      <label>Nome: </label>
      <input type="text" name="nome"><br>
      <label>Idade: </label>
      <input type="text" name="age"><br>
      <label>Email: </label>
      <input type="text" name="email"><br>
      <input type="submit">
    </form>
    <?php
      /* Código removido para teste do action
      $nome = $_GET['nome'];
      $idade = $_GET['age'];
      $email = $_GET['email'];

      if($nome == NULL || $idade == NULL || $email == NULL){
        echo "<br>Campos vázios! O cadastro não foi realizado";
      }else{
        echo "<br>Cadastro realizado com sucesso! Segue as informações cadastradas<br>";
        echo "Nome: $nome" . "<br>";
        echo "Idade: $age" . "<br>";
        echo "E-mail: $email" . "<br>";
      }
      */
    ?>


  </body>
</html>
