<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Portal Covid</title>
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
<nav class="navbar navbar-expand-lg">



<a class="navbar-brand nomebrand" href="../Projeto-integrador/index.php">
                   <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top" >
                        Portal Covid
                  </a>

<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
<ul class="navbar-nav mr-auto">

<div class="lista01">
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "index.php"):echo "disabled"; endif; ?>" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "sobrevacinas.php"):echo "disabled"; endif; ?>" href="sobrevacinas.php">Vacinas</a>
</li>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "sintomas.php"):echo "disabled"; endif; ?>" href="sintomas.php">Sintomas</a>
</li>
</div>

<div class="lista02">
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "contato.php"):echo "disabled"; endif; ?>" href="contato.php">Contato</a>
</li>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "quem-somos.php"):echo "disabled"; endif; ?>" href="quem-somos.php">Quem Somos</a>
</li>
<li class="nav-item">
<a class="afooter nav-link <?php if($page == "politica-privacidade.php"):echo "disabled"; endif; ?>" href="politica-privacidade.php">Política de Privacidade</a>
</li>
</div>

</ul>
</div>
</div>

<section class="redesfooter">

<p class="predes">Acompanhe mais notícias nas nossas redes sociais</p>
<a href="https://www.facebook.com/" class="foot-redes"><span class="bi bi-facebook"></span></a>
<a href="https://www.instagram.com/accounts/login/" class="foot-redes"><span class="bi bi-instagram"></span></a>
<a href="https://twitter.com/login?lang=pt" class="foot-redes"><span class="bi bi-twitter"></span></a>
<a href="https://www.linkedin.com/login/pt" class="foot-redes"><span class="bi bi-linkedin"></span></a>

</section>



</nav>
                 

</body>

</html>






      
