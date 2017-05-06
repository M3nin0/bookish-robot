<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title> Recebendo valores do Form </title>
  </head>
  <body>
    <?php
      //Verificand se os valores fora inseridos
      //empty() retorna verdadeiro ou falso
      //empty() retorna True quando a variavel está vazia
      //empty() retorna False quando a variavel está preenchida
      //!empty -> Quando retornar True, irá ser transformada em False
      //!empty -> Quando retornar False, irá ser transformada em True


      if(isset($_POST['email']) && !empty($_POST['email'])){

        $email = $_POST['email'];

        if(isset($_POST['pass']) && !empty($_POST['pass'])){

          $senha = $_POST['pass'];

            echo "Você enviou os seguintes dados: <br>";
            echo "Email: " . $email . "<br>";
            echo "Senha: " . $senha . "<br>";

        }
      }


    ?>
    <form method="POST">
      <label>Email: </label>
      <input required type="text" name="email"><br>
      <label>Senha: </label>
      <input type="password" name="pass"><br>
      <input required type="submit" value="Enviar dados">
    </form>
  </body>
</html>
