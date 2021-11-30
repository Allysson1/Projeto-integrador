<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Portal Covid</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../Projeto-integrador/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Projeto-integrador/css/estilo.css">

</head>

<body>
  <div class="container-fluid">

    <?php include 'header.php'; ?>

    <main>
      <img src="../Projeto-integrador/images/index.png" class="img-fluid" id="img-header" alt="">
      <div class="row">
        <article class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">


          <h1 class="h1index">O que você procura ?</h1>
          <h3 class="h3last">Ultimas Notícias: </h3>



          <div class="secnews float-md-start float-lg-start float-xl-start col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <img src="../projeto-integrador/images/sintoma1.png" alt="imagem com termometro com o intuito de se referir aos sintomas do covd " class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <h2 class="text-center">Príncipais Sintomas</h2>
            <p>Atualizado em 01/11/2021</p>
            <p class="pindex">Veja agora os principais sintomas do Covid-19, o que fazer quando
              sentir algum deles, e como se previnir para que o não transmita o vírus para ninguém próximo de você como
              a família ou pessoas e amigos na rua.</p>

            <a href="sintomas.php" class="btn btn-md btnindex ">Leia Mais...</a>
          </div>


          <div class="secnews float-md-end float-lg-end float-xl-end col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <img src="../projeto-integrador/images/grafico.png" alt="imagem representando um grafico  com o intuido de se referir aos dados do Covid-19" class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
            <h2 class="Text-center">Dados do COvid-19</h2>
            <p>Atualizado em 01/11/2021</p>
            <p class="pindex">Veja agora os priíncipais dados do Covid-19 no Brasil e no mundo, vendo desde o número de infectados, até o número
              de curados, além de acompanhar algumas evoluções decorrentes da pandemia mundial. </p>
            <a href="#" class="btn btn-md btnindex">Leia Mais...</a>
          </div>


          <div class="secnews float-md-start float-lg-start float-xl-start col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <img src="../projeto-integrador/images/" alt="">
            <h3 class="h1news">O que você procura ?</h1>
              <p>01/01/2021</p>
              <p class="pindex">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Optio et cum rem. Quas accusantium, soluta iste modi minima quasi ipsum delectus ipsam
                cumque enim magnam velit inventore harum dolores? Sapiente.</p>
              <a href="#" class="btn btn-md btnindex">Leia Mais...</a>

          </div>

          <div class="secnews float-md-end float-lg-end float-xl-end col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <h3 class="h1news">O que você procura ?</h1>
              <p>01/01/2021</p>
              <img src="#" alt="">
              <p class="pindex">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Optio et cum rem. Quas accusantium, soluta iste modi minima quasi ipsum delectus ipsam
                cumque enim magnam velit inventore harum dolores? Sapiente.</p>
              <a href="#" class="btn btn-md btnindex">Leia Mais...</a>

          </div>

        </article>

        <aside class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">

          <section class="secredes">
            <h3 class="h3redes">Redes Sociais:</h3>
            <img src="../Projeto-integrador/icons/facebook.svg" alt="" class="redes">
            <img src="../Projeto-integrador/icons/instagram.svg" alt="" class="redes">
            <img src="../Projeto-integrador/icons/twitter.svg" alt="" class="redes">
            <img src="../Projeto-integrador/icons/linkedin.svg" alt="" class="redes">
          </section>

          <section class="secmais">
            <h3 class="h3mais">Mais Lidas</h3>
            <img src="#" alt="">
            <p class="pmais">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Magni maiores totam debitis facilis architecto praesentium vero beatae culpa ut.
              Velit iste nostrum maxime? Itaque ullam illum recusandae! Modi, cumque mollitia!
            </p>
            <img src="#" alt="">
            <p class="pmais">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Magni maiores totam debitis facilis architecto praesentium vero beatae culpa ut.
              Velit iste nostrum maxime? Itaque ullam illum recusandae! Modi, cumque mollitia!
            </p>
            <img src="#" alt="">
            <p class="pmais">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Magni maiores totam debitis facilis architecto praesentium vero beatae culpa ut.
              Velit iste nostrum maxime? Itaque ullam illum recusandae! Modi, cumque mollitia!
            </p>
          </section>
        </aside>
        <section class="col-sm-12 col-md-12 col-lg-12">
          <h3 class="h3risco">A Covid-19 não é brincadeira</h3>
          <p class="prisco">Mesmo o Covid-19 estar se estabilizando no Brasil, outra variante está
            atacando novamente os países da Europa, e já temos caso dessa nova variante aqui no Brasil,
            por isso o distanciamento social, o álcool em gel e a máscara ainda são importantes, por isso
            previna-se.
          </p>
        </section>
      </div>
    </main>
  </div>
  <div class="row">
    <footer class="footer">
      <?php include 'footer.php'; ?>
    </footer>
    <p class="copy"><small>&copy; Copyright - Todos os direitos reservados - Ursinhos Felizes</small></p>

  </div>


  <script src="../Projeto-integrador/js/bootstrap.bundle.min.js"></script>
</body>

</html>