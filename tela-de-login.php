<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.png">
  <title>Tela de login</title>
  <style>
    h1 {color: white;text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    h3 {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    h4 {color: white;
      font-size: 15px;
        height: 50px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
p	{
text-align:	center;
}
div {
  text-align: center; 
background-color: rgba(12, 6, 99, 0.551);
position: center;
margin: auto;
width: 300px;
padding-left: 5%;
padding-right: 5%;
padding-top: 5%;
padding-bottom: 0.01%;
border-bottom-left-radius: 0px;
border-bottom-right-radius: 0px;
border-top-left-radius: 15px;
border-top-right-radius: 15px;
}
img {
  background: hsl(0, 0%, 100%);
  border-radius: 100px;
  width: 200px;
  height: 200px;
}
input {padding: 10px;
  padding-left: 50px;
  padding-right: 50px;
  font-size: 15px;
}
.caixa {
  position: center;
  width: 300px;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  padding-left: 5%;
  padding-right: 5%;
  padding-top: 0%;
  padding-bottom: 1%;
  font-size: 15px;
  }
  .inputSubmit{
    position: center;
    text-align: center;
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 280px;
    border-radius: 0px;
    color: white;
    font-size: 15px;
    font-family: sans-serif;
  }
  .inputSubmit {
    position: center;
    width: 300px;
    height: 50px;
    padding-left: 5%;
    padding-right: 5%;
    padding-top: 0%;
    padding-bottom: 2%;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }
  .inputSubmit:hover{
    background-color: deepskyblue;
  }
  button{
    position: center;
    background-color: dodgerblue;
    border: none;
    color: white;
    font-family: sans-serif;
    font-size: 15px;
    width: 300px;
    height: 50px;
    padding-left: 5%;
    padding-right: 5%;
    padding-top: 0%;
    padding-bottom: 2%;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }
  button:hover{
    background-color: dodgerblue;
  }
body {
  background: linear-gradient(45deg, #80FFDB, #5390D9);
  margin-bottom: 100px;
  margin-top: 50px;
  margin-right: auto;
  }
   </style>
</head>

<body>
          <div class="principal">
            <img src="logo_transparent.png" alt="logotipo do site">
             <p> <h1> FAÇA SEU LOGIN </p> 
                </h1> 
             <h4>Digite o email e senha que você cadastrou no formulário de cadastro</h4>
            </div>
             <div class="caixa">
              <form action="testLogin.php" method="POST"> 
            <input type="email" name="email"  placeholder="Seu email">
              <p> <input type="password" name="senha" placeholder="Sua senha">
              </p>
             <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            <p>
                </form>
                          <a href="#0"><font color=white>Esqueci minha senha?<font/><a/>
                        </p>
                        <br>
                        <H3>Ainda não sou aluno</H3>
                        <p><button><a href="formulario.php"><font color=white>Cadastrar-se</font</a></button></p>
                           </div>
                  

  
</body>
</html>