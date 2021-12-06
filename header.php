
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


      <nav class="navbar fixed-top navbar-expand-lg navbar-warning bg-warning" id="navbar">
          <div class="container-fluid">
             
          <a class="navbar-brand" href="../Projeto-integrador/index.php">
                 <img src="../projeto-integrador/images/logo2.png" alt="logo ursinhos felizes" class="logo d-inline-block align-text-top"> </a>
              
                 <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">

               <span class="bi bi-list text-right btn-nav"></span>

               </button>

            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id = "ul-nav">
            <li class="nav-item">
              <a class="nav-link nav-home <?php if($page == "index.php"):echo "disabled"; endif; ?>"  href="../Projeto-integrador/index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link nav-home dropdown-toggle " href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Covid-19
            </a>
            <ul class="dropdown-menu" id="nav-drop">
            <li><a class="dropdown-item nav-home <?php if($page == "covid.php"):echo "disabled"; endif; ?>" href="../Projeto-integrador/covid.php" >O que é ?</a></li>
              <li><a class="dropdown-item nav-home <?php if($page == "sintomas.php"):echo "disabled"; endif; ?>" href="../Projeto-integrador/sintomas.php" id="adrop">Sintomas</a></li>
              <li><a class="dropdown-item nav-home <?php if($page == "sobrevacinas.php"):echo "disabled"; endif; ?>" href="../Projeto-integrador/sobrevacinas.php" >Vacinas</a></li>
            </ul>
            </li>
             <li class="nav-item">
              <a class="nav-link nav-home <?php if($page == "dados.php"):echo "disabled"; endif; ?>" href="../Projeto-integrador/dados.php">Dados Atualizados</a>
             </li>
             <li class="nav-item">
                <a class="nav-link nav-home <?php if($page == "contato.php"):echo "disabled"; endif; ?>" href="../Projeto-integrador/contato.php">Contatos</a>
             </li>
             <li class="nav-item">
               <a class="nav-link nav-home <?php if($page == "quem-somos.php"):echo "disabled"; endif; ?>" href="../Projeto-integrador/quem-somos.php">Quem Somos</a>
            </div>
            </ul>
          </div>
        </nav>  
    
</body>

</html>



