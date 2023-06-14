<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.png">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <style>

    /* borda da página */
    body{
      margin: 0;
      padding: 0;
    }

    /* estilo do header */
  header {
  background-color: #47a4de;
  color: #fff;
  padding: 30px;
  display: flex;
  justify-content: space-between;
  
  /* estilo do logo */
}
#logo{
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 50px;
}

/* estilo dos links do header */
nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-right: 10px;
  margin-top: 8px;
}

nav a {
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-weight: bold;
  color: #fff;
  text-decoration: none;
  border: solid;
  border-radius: 15px;
  padding: 15px;
}

nav a:hover {
  text-decoration: none;
  background-color: #fff;
  color: #47a4de;
  }
  
  /* estilo do slide */
  .carousel-item{
    height: 100%;
    object-position: center;
  }

    /* estilo dos cartões */
  .card {
    margin-left: 5px;
    margin-right: 5px;
   display: inline-flex;
   padding-left: 10px;
   background-color: #00000019;
   width: 100%;
   
   }
  
  </style>

  <body>
    <!-- Header -->
    <header>
      <img id="logo" src="logo_transparent.png" alt="Logo da empresa">
      <nav>
        <ul>
          <li><a href="tela-de-login.php">Área do aluno</a></li>
          <li><a href="formulario.php">Cadastre-se</a></li>
        </ul>
      </nav>
    </header>
     
    <!-- Conteúdo da Página -->
    <!-- slide pricipal -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- slide 1 -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href=""><img src="slide1.jpg" class="d-block w-100" alt="..."></a>
        </div>

        <!-- slide 2 -->
        <div class="carousel-item">
          <a href=""><img src="slide2.png" class="d-block w-100" alt="..."></a>
        </div>

        <!-- slide 3 -->
        <div class="carousel-item">
          <a href=""><img src="slide3.png" class="d-block w-100" alt="..."></a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <!-- cartão 1-->
    <div class="card mb-3" style="max-width: 98%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://cdn.pixabay.com/photo/2023/02/09/16/36/bridge-7779222__340.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

    <!-- cartão 2-->
    <div class="card mb-3" style="max-width: 98%;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://cdn.pixabay.com/photo/2023/02/09/16/36/bridge-7779222__340.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- rodapé-->

    <footer> rodapé</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
  </body>
</html>