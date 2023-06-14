<?php

  if(isset($_POST['submit']))
  {
    // print_r('Nome:' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Senha:' . $_POST['senha']);
    // print_r('<br>');
    // print_r('Email:' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone:' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo:' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de Nascimento:' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade:' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado:' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço:' . $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nas = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereço = $_POST['endereco'];

    $resul = mysqli_query($conexao, "INSERT INTO usuários(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereço) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nas','$cidade','$estado','$endereço')");

    header('location: tela-de-login.php');
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png">
    <title>Cadastro online</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #0C9AF2, #1644DB);
        }
        .box{
            color: white;
            position: center;
            margin: auto;
            width: 360px;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputuser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 5px;
        }
        .inputuser:focus ~ .labelinput,
        .inputuser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 5px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, #0C9AF2, #3f18c1); 
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, #0C9AF2, #1644DB);
        }
        img{
            width: 105px;
            height: 105px;
            border-radius: 100px;
            object-position: center;
        }
        .imagemlogo{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <p class="imagemlogo"><img src="logo.png" alt="logotipo"></p>
        <form action="formulario.php" method="POST">
         <fieldset>
         <legend><b>Cadastro de Alunos</b></legend>  
         <br>
          <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputuser" required> 
            <label for="nome" class="labelinput">Nome completo</label>
          </div>
          <br><br>
        <div class="inputBox">
            <input type="text" name="senha" id="senha" class="inputuser" required> 
            <label for="senha" class="labelinput">Crie uma senha</label>
          </div>
          <br><br>
          <div class="inputBox">
            <input type="text" name="email" id="email" class="inputuser" required> 
            <label for="email" class="labelinput">Email</label>
          </div>
          <br><br>
          <div class="inputBox">
            <input type="tel" name="telefone" id="telefone" class="inputuser" required> 
            <label for="telefone" class="labelinput">Telefone</label>
          </div>
        <br>
          <p>Sexo</p>
          <input type="radio" id="feminino" name="genero" value="feminino" required>
          <label for="feminino">Feminino</label>
          <br>
          <input type="radio" id="masculino" name="genero" value="masculino" required>
          <label for="masculino">Masculino</label>
          <br>
          <input type="radio" id="outro" name="genero" value="outro" required>
          <label for="outro">Outro</label>
        <br><br>
        <label for="data_nascimento"> <b>Data de nascimento:</b></label>
        <input type="date" name="data_nascimento" id="data_nascimento" required> 
        <br><br>
          <div class="inputBox">
            <input type="text" name="cidade" id="cidade" class="inputuser" required> 
            <label for="cidade" class="labelinput">Cidade</label>
        </div>
        <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputuser" required> 
                <label for="estado" class="labelinput">Estado</label>
        </div>
        <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputuser" required> 
                    <label for="endereco" class="labelinput">Endereço</label>
        </div>
        <br><br>
                    <input type="submit" name="submit" id="submit">
         </fieldset>   
        </form>
    </div>
</body>
</html>