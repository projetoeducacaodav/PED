<?php
session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location: tela-de-login.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM usuários ORDER BY id DESC";

$result = $conexao->query($sql);

//print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<style>

   /* cor de fundo da página */
   body{
    background-image: url(https://cdn.pixabay.com/photo/2018/02/10/11/43/hexagons-3143432_960_720.jpg);
    height: 100%;
    width: 100%;
    }

   /* Estilos da barra lateral */
   .sidebar {
      height: 100%;
      width: 0%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }
    
    /* Estilos menu suspenso */
    .submenu {
  display: none;
   }
   .submenu.active {
    display: block;
   }


    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 15px;
      color: #ffffff;
      display: block;
      transition: 0.3s;
     
    }
    
    .sidebar a:hover {
      color: #ffffff;
      background-color: #4da2de;
    
    }
    
    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    
    /* Estilos fundo do nome menu */
    .openbtn {
      font-size: 20px;
      cursor: pointer;
      background-color: #111;
      color: white;
      padding: 10px 30px;
      border: none;
    }

    /* Estilos icones redes sociais */
    .icones{
        display: flex;
        margin: auto;
        transition: transform 0.3s;
    }

    .icones:hover{
    transform: scale(1.1);
    }
    
    
    /* Estilos fundo do nome menu quando selecionado */
    .openbtn:hover {
      background-color: #444;
    }
    
    
    /* Estilos para telas menores */
    @media screen and (max-height: 450px) {
      .sidebar {padding-top: 15px;}
      .sidebar a {font-size: 18px;}
    }
    
    @media screen and (max-width: 100px) {
      .sidebar {
        width: 50%;
        height: auto;
        position: relative;
        padding-top: 60px;
        padding-left: 0px;
      }
      .sidebar a {float: left;}
      div.content {margin-left: 0;}
      button.openbtn {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
      }
    }

    h2{
        text-align: center;
        font-size: 250%;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        
    }

    .col-md-6{
        text-align: center;
        font-size: 150%;
        text-decoration-color: #000000;
    }

        /* Estilos para os vídeos */
    .embed-container {
     position: relative;
     padding-bottom: 56.25%;
     height: 0;
     overflow: hidden;
     max-width: 100%;
     height: auto;
     margin-top: 0px;
     margin-bottom: 30px;
    }

   .embed-container iframe, .embed-container object, .embed-container embed {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   }

    .btn {
        background-color: #ffffff;
        

    }
    

    .panel-group .panel {
      border-radius: 15;
      box-shadow: none;
      border-color: #78cbf8;
    }
    
    .panel-default > .panel-heading {
      padding: 0;
      border-radius: 0;
      color: #212121;
      background-color: #79C7EB;
      border-color: #EEEEEE;
    }
    
    .panel-title a {
      display: block;
      padding: 15px;
      text-align: left;
      font-weight: bold;
      color: #000000;
      text-decoration: none;
    }
    
    .panel-title a:active,
    .panel-title a:hover {
      color: #212121;
    }
    
    .panel-default > .panel-heading + .panel-collapse > .panel-body {
      border-top-color: #EEEEEE;
    }
    #sair{
      background: red;    }

      .m-5{
        background-color: rgba(0,0,0,0.8);
        color: white;
        margin-top: 40px;
        margin-left: 10px;
        margin-right: 10px;
        border-radius: 10px 10px 10px 10px;
      }
  </style>

</head>
<body>

<!-- Botão para abrir a barra lateral -->
<button class="openbtn" onclick="openNav()">☰ Menu</button>

<!-- Barra lateral -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<br>
  <a id="sair" href="sair.php">Sair do sistema</a>

  <!-- icones redes sociais -->
  <div class="icones">
    <!-- instagram -->
    <a href="https://www.instagram.com/projetoeducacaodav/?next=%2F"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
    width="30" height="30"
    viewBox="0 0 24 24"
    style="fill:#FFFFFF;">
        <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"></path>
    </svg></a>
    <!-- youtube -->
    <a href="https://www.youtube.com/@projetoeducacao5790"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="30" height="30"
        viewBox="0 0 50 50"
        style="fill:#FFFFFF;">
        <path d="M 44.898438 14.5 C 44.5 12.300781 42.601563 10.699219 40.398438 10.199219 C 37.101563 9.5 31 9 24.398438 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.398438 17 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.898438 40.5 17.898438 41 24.5 41 C 31.101563 41 37.101563 40.5 40.601563 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.101563 35.5 C 45.5 33 46 29.398438 46.101563 25 C 45.898438 20.5 45.398438 17 44.898438 14.5 Z M 19 32 L 19 18 L 31.199219 25 Z"></path>
        </svg></a>
        <!-- twiter -->
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="30" height="30"
            viewBox="0 0 24 24"
            style="fill:#FFFFFF;">
                <path d="M22,3.999c-0.78,0.463-2.345,1.094-3.265,1.276c-0.027,0.007-0.049,0.016-0.075,0.023c-0.813-0.802-1.927-1.299-3.16-1.299 c-2.485,0-4.5,2.015-4.5,4.5c0,0.131-0.011,0.372,0,0.5c-3.353,0-5.905-1.756-7.735-4c-0.199,0.5-0.286,1.29-0.286,2.032 c0,1.401,1.095,2.777,2.8,3.63c-0.314,0.081-0.66,0.139-1.02,0.139c-0.581,0-1.196-0.153-1.759-0.617c0,0.017,0,0.033,0,0.051 c0,1.958,2.078,3.291,3.926,3.662c-0.375,0.221-1.131,0.243-1.5,0.243c-0.26,0-1.18-0.119-1.426-0.165 c0.514,1.605,2.368,2.507,4.135,2.539c-1.382,1.084-2.341,1.486-5.171,1.486H2C3.788,19.145,6.065,20,8.347,20 C15.777,20,20,14.337,20,8.999c0-0.086-0.002-0.266-0.005-0.447C19.995,8.534,20,8.517,20,8.499c0-0.027-0.008-0.053-0.008-0.08 c-0.003-0.136-0.006-0.263-0.009-0.329c0.79-0.57,1.475-1.281,2.017-2.091c-0.725,0.322-1.503,0.538-2.32,0.636 C20.514,6.135,21.699,4.943,22,3.999z"></path>
            </svg></a>
</div>

</div>
<br>
<!-- tabela -->
<div class="m-5">
<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Senha</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Endereço</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
   <?php
    while($user_data = mysqli_fetch_assoc($result))
    {
     echo "<tr>";
     echo "<td>".$user_data['id']."</td>";
     echo "<td>".$user_data['nome']."</td>";
     echo "<td>".$user_data['senha']."</td>";
     echo "<td>".$user_data['email']."</td>";
     echo "<td>".$user_data['telefone']."</td>";
     echo "<td>".$user_data['sexo']."</td>";
     echo "<td>".$user_data['data_nasc']."</td>";
     echo "<td>".$user_data['cidade']."</td>";
     echo "<td>".$user_data['estado']."</td>";
     echo "<td>".$user_data['endereço']."</td>";
     echo "<td>ações</td>";
     echo "</tr>";
    }

   ?>
  </tbody>
</table>
</div>

<!-- script da  barra lateral -->
<script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }

    var submenus = document.querySelectorAll('.submenu');

for (var i = 0; i < submenus.length; i++) {
  submenus[i].parentNode.addEventListener('click', function(event) {
    event.preventDefault();
    this.querySelector('.submenu').classList.toggle('active');
  });
}

  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>