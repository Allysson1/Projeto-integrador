<?php
echo '
<!DOCTYPE html>
<html lang="pt-br">
<body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-warning bg-warning" id="navbar">
          <div class="container-fluid">
              <a class="navbar-brand" href="../Projeto-integrador/index.php">
                 <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                     Portal Covid
               </a>
               <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="bi bi-list text-right btn-nav"></span>
               </button>

            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id = "ul-nav">
            <li class="nav-item">
              <a class="nav-link "  href="../Projeto-integrador/index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Covid-19
            </a>
            <ul class="dropdown-menu" id="nav-drop">
            <li><a class="dropdown-item" href="../Projeto-integrador/covid.php" >O que é ?</a></li>
              <li><a class="dropdown-item " href="../Projeto-integrador/sintomas.php" id="adrop">Sintomas</a></li>
              <li><a class="dropdown-item " href="../Projeto-integrador/sobrevacinas.php" >Vacinas</a></li>
            </ul>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../Projeto-integrador/3-dados.php">Dados Atualizados</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="../Projeto-integrador/contato.php">Contatos</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../Projeto-integrador/quem-somos.html">Quem Somos</a>
            </div>
            </ul>
          </div>
        </nav>  
    
</body>

</html>';
