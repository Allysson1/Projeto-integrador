<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../Projeto-integrador/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Projeto-integrador/css/estilo.css">
</head>

<body>
           
<?php $page = basename($_SERVER['PHP_SELF']) ?>



<div class="row col-12">

<nav>

<div class="col-12 col-sm-2 col-md-2 col-lg-1 col-xl-2 m-5 m-sm-5 m-md-5 m-lg-5 float-sm-start float-md-start float-lg-start">
<a class="navbar-brand nomebrand" href="../Projeto-integrador/index.php"><img src="../projeto-integrador/images/logo2.png" alt="logo ursinhos felizes" class="d-inline-block align-text-top" ></a>
</div>


<div class="lista01 col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3 text-center float-sm-start float-md-start float-lg-start">
<ul>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "index.php"):echo "disabled"; endif; ?>" href="index.php">Home</a>
</li>
<li class="nav-item ">
<a class="afooter nav-link <?php if($page == "sobrevacinas.php"):echo "disabled"; endif; ?>" href="sobrevacinas.php">Vacinas</a>
</li>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "sintomas.php"):echo "disabled"; endif; ?>" href="sintomas.php">Sintomas</a>
</li>
</ul>
</div>

<div class="lista02 col-12 col-sm-3 col-md-4 col-lg-3 col-xl-3 text-center float-sm-start float-md-start float-lg-start">
<ul>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "contato.php"):echo "disabled"; endif; ?>" href="contato.php">Contato</a>
</li>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "quem-somos.php"):echo "disabled"; endif; ?>" href="quem-somos.php">Quem Somos</a>
</li>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "politica-privacidade.php"):echo "disabled"; endif; ?>" href="politica-privacidade.php">Política de Privacidade</a>
</li>
</ul>
</div>


<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 float-lg-end pt-lg-4">

<p class="predes">Acompanhe mais notícias nas nossas redes sociais</p>
<a href="https://www.facebook.com/" class="espaco foot-redes"><span class="bi bi-facebook"></span></a>
<a href="https://www.instagram.com/accounts/login/" class="foot-redes"><span class="bi bi-instagram"></span></a>
<a href="https://twitter.com/login?lang=pt" class="foot-redes"><span class="bi bi-twitter"></span></a>
<a href="https://www.linkedin.com/login/pt" class="foot-redes"><span class="bi bi-linkedin"></span></a>
</div>
</nav>
     
</div>

<p class="copy"><small>&copy; Copyright - Todos os direitos reservados - Ursinhos Felizes</small></p>
</body>
</html>
</div>





      
