<!DOCTYPE html>

<?php
  $name = '';
  $age = 0;
  $coment = '';

  if(isset($_POST['user'])){
    $name = $_POST['user'];
  }
  if(isset($_POST['age'])){
    $age = $_POST['age'];
  }
  if(isset($_POST['coment'])){
    $coment = $_POST['coment'];
  }

  //Iniciando a conexão com banco de dados
  if($name !== '' && $age != 0 && $coment !== ''){
    $con = new mysqli("localhost", "root", "", "formulario");
    $sql = "INSERT INTO dados (nome, age, coment)";
    $sql .= "VALUES ('$name','$age','$coment');";
    $query = $con->query($sql);
    echo "Dados inseridos com sucesso<br>";
  }

  //Conexão com banco de dados
  $con = new mysqli("localhost", "root", "", "formulario");
  //Selecionando a tabela a ser utilizado
  $sql = "SELECT * FROM dados;";
  //Executando o comando mysql que está na variavel sql
  $query = $con->query($sql);

  //Selecionando todos os dados do DB
  //Loop para vincular os dados com os echos
  //
  while($dados = $query->fetch_array(MYSQLI_ASSOC)){
    echo "Nome: " . $dados['nome'] . "<br>";
    echo "Idade: " . $dados['age'] . "<br>";
    echo "Comentário: " . $dados['coment'] . "<br>";
    echo "___________________________________________<br>";
  }

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de cadastro único</title>
  </head>
  <body>
    <form method="post">
      <label>Usuário: </label>
      <input type="text" name="user"><br>
      <label>Idade: </label>
      <input type="text" name="age"><br>
      <label>Comentários: </label>
      <input type="text" name="coment"><br>
      <button type="submit">Gravar</button>
    </form>
  </body>

</html>
