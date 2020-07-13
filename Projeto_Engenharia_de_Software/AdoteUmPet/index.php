<?php
//Busca no banco de dados e lista todos os usuarios cadastrados
$servername = "localhost";
$username = "root";
$password = "";
$db = "unityacess";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$sql = "SELECT logo FROM patrocinio";
$result = mysqli_query($conn, $sql);
$cont = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ONG - Adote um pet</title>

  <!--Parte do slide do patrocinio -->
  <style>
        #slider{
            overflow: hidden;
        }

        #slider figure{
            position:relative;
            width: 500%;
            margin:0;
            left:0;
            animation: 10s slider infinite;
        }
        #slider figure img{
            float: left;
            width: 20%
        }
        <?php if($cont == 2){?>
        @keyframes slider{
            0%{
                left:0;
            }
            20%{
                left:0;
            }
            25%{
                left:-100%;
            }
            50%{
                left: -100%;
            }

        }
    <?php  }?>
    
    </style>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">ONG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/adoteumpet/login.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/adoteumpet/registrar.html">Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/adoteumpet/cadastrar_doacaoForm.php">Fazer uma doação</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
          <div class="col-lg-7">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="https://blog.dogu.pet/wp-content/uploads/2019/08/teste1-900x400.png" alt="">
          </div>
          <!-- /.col-lg-8 -->
          <div class="col-lg-5">
            <h1 class="font-weight-light">ONG - Adote um Pet</h1>
            <p>É uma ong criada com a finalidade de ajudar cachorros e gatos que precisam ser adotados!</p>
            <a class="btn btn-primary" href="/adoteumpet/login.html">Logar-se!</a>
          </div>
          <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Call to Action Well -->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
          <div class="card-body">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="https://s3.amazonaws.com/super_viralatas/uploads/anuncios/arquivos/56afc86b6ebe6.jpg" alt="">
          </div>
        </div>
        <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div id="slider">
        <h1>Patrocinadores</h1>

        <figure>    
            <?php while($dado = $result->fetch_array()){ ?>
                <td><img src="<?php echo "./ImagensPatrocinio/".$dado["logo"]?>"width="300" height="300"/></td>        
            <?php } ?>
        </figure>
        </div>
        </div>
        
        <!-- Content Row -->
        <div class="row">
          <div class="col-md-4 mb-5">
            <div class="card h-100">
              <div class="card-body">
                <h2 class="card-title">Adote</h2>
                <p class="card-text">Adote um cachorro ou um gato de forma super simples!</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary btn-sm">Mais Informações</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-5">
            <div class="card h-100">
              <div class="card-body">
                <h2 class="card-title">Varios cachorros e gatos cadastrados!</h2>
                <p class="card-text">Temos uma vasta quantidade de cachorros e gatos cadastrados no nosso sistema.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary btn-sm">Mais Informações</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-5">
            <div class="card h-100">
              <div class="card-body">
                <h2 class="card-title">Como adotar?</h2>
                <p class="card-text">Cadastre-se no nosso site e consigua acesso a lista de cachorros e gatos que podem ser adotados!</p>
              </div>
              <div class="card-footer">
                <a href="/adoteumpet/registrar.html" class="btn btn-primary btn-sm">Registre-se</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->

        </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
