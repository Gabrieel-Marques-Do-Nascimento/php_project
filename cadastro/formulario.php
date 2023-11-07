<?php

if (isset($_POST['submit'])) { // entre $_post [parenteses] fican os id s 
  // # code...
  // print_r('Nome ' . $_POST['nome']);
  // print_r('<br>');
  // print_r('E-mail '.$_POST['email']);
  // print_r('<br>');
  // print_r('Telefone '.$_POST['telefone']);

include_once('confg.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$date_nasc = $_POST['data'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,date_nasc) VALUES ($nome','$email','$telefone','$date_nasc')");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
</head>
<style type="text/css" media="all">
*{
  margin: 0;
  padding: 0;
}
body{
  background: white;
}
  form{
    width: 100vw;
    position: relative;
                      position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  
      .center{
        font-size: 22px;
    color: white;
    width: 70vw ;
   background: #00000085; 
   margin: 10px;
   padding: 10px;
   position: relative;
   left:50%;
   transform: translate(-50%);

  }
  }
     .input{
       position: relative;
    left: 50%;
    transform: translate( -50%);
  }
  
input{
  outline: 0;
  font-size: 20px;
  padding: 6px;
  margin:0 10px 5px 0;
border-radius: 10px;
}
    button{
    font-size: 20px;
      width: 100%;
      height: 40px;
      border-radius: 10px;
    }
    
</style>
<body>
    <form action="formulario.php" method="post">
<div class="center">
          <div lang="en" class="input"> <!-- nome email telefone data -->
            <label for="nome">Name</label> <input type="text" name="nome" id="nome">
        </div>
        <div class="input"> <!-- nome email telefone data -->
            <label for="email">E-mail</label> <input type="text" name="email" id="email">
        </div>
        <div  class="input"> <!-- nome email telefone data -->
            <label for="telefone">Fone</label> <input type="number" name="telefone" id="telefone">
        </div>

        <div lang="en" class="input"> <!-- nome email telefone data -->
            <label for="data">Nascmento</label> <input type="date" name="data" id="data">
        </div>
        <div>
          <input type="submit" id="submit" name="submit">
        </div>
</div>

    </form>
</body>
</html>