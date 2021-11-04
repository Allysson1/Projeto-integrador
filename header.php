<?php
echo '
<!DOCTYPE html>
<html lang="pt-br">
<body>
      
    <nav class="navbar fixed-top navbar-expand-lg" id="navbar">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">
                 <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                   NossoSite
               </a>
            <ul class="nav nav-tabs nav-fill">
                <li class="nav-item"><a class="nav-link #fff"  href="#">Home</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Covid-19
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#" >O que é ?</a></li>
                  <li><a class="dropdown-item" href="#" id="adrop">Sintomas</a></li>
                  <li><a class="dropdown-item" href="#" >Vacinas</a></li>
                </ul>
                </li>
                 <li class="nav-item"><a class="nav-link" href="#">Dados Atualizados</a></li>
                 <li class="nav-item"><a class="nav-link" href="#">Contatos</a></li>
                 <li class="nav-item"><a class="nav-link" href="#">Quem Somos</a></li>
            </ul>
          </div>
        </nav>
      
</body>

</html>';

?>
