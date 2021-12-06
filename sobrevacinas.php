<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Sobre as vacinas</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../Projeto-integrador/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Projeto-integrador/css/estilo.css">
</head>

<body class="bodyvac">
  <header>
    <?php include 'header.php'; ?>
  </header>

  <img src="../Projeto-integrador/images/index.png" class="img-fluid" id="img-header" alt="imagem principal do topo do portal covid">

  <div class="container-fluid">

    <div class="col-12 justify-content-center p-5">
      <nav>
        <ul class="nav">

          </li>
          <li class="nav-item">
            <a class="nav-link aref" href="../Projeto-integrador/perguntasvac.php">
              3 perguntas frequentes sobre as vacinas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link aref" href="../Projeto-integrador/terceiradose.php">Como
              vai funcionar a 3º dose</a>
          </li>
          <li class="nav-item">
            <a class="nav-link aref" href="https://www.vacinaja.sp.gov.br/">Vacina já</a>
          </li>
        </ul>
      </nav>
    </div>




    <div class="row">
      <article>

        <h1 class="p-5 text-center">Vacinas no Brasil</h1>
        <p class="text-center col-10 col-xl-10 text">Hoje em dia podemos encontrar quatro tipos de vacinas do covid-19 sendo aplicadas na população
          brasileira. Porém muitos ainda possuem dúvidas sobre elas e sobre se deve tomar ou não. Aqui descrevemos um
          pouco sobre cada uma, suas reações, tempo necessário, de acordo com estudos, entre a primeira dose e a segunda
          dose.</p>

        <div class="container-fluid">

          <div class="row justify-content-center  p-5">

            <div class="box col-sm-10 col-md-4 col-lg-4">

              <img class="imgvac col-11" src="../Projeto-integrador/images/coronavac1.jpg" alt="ampola de vacina atrás e na frente escrito Coronavac">

              <h2 class="text-center">Vacina Coronavac/Sinovac</h2>

              <p class="p-4 text-center">Fabricada pela empresa chinesa Sinovac em conjunto com o instituto Butantan, foi a primeira a ser
                liberada no Brasil pela Anvisa, seguindo todos os protocolos exigidos.</p>

              <p class="p-4 text-center">Ela é uma vacina de vírus vivo inativo (Sars-CoV-2) desenvolvida em laboratório, sendo utilizada uma
                substância para que ele não consiga se multiplicar no organismo humano, do mesmo modo que é fabricado a
                vacina da gripe, sendo apenas para ativar os anticorpos. Tendo demonstrado uma eficácia no início de 50,7%
                contra o vírus. Para sua eficácia é necessário tomar duas doses com um intervalo de 04 e semanas entre as
                duas.</p>

              <h3 class="text-center">Reações adversas:</h3>

              <p class="p-4 text-center">Os sintomas mais comuns apresentados por quem já tomou a vacina foi dor de cabeça e dor no local da
                aplicação. Outras reações que podem aparecer: febre, cansaço, diarreia e náusea. Hematomas no local,
                diminuição de apetite e vômito foram descritos nos participantes de estudos, porém raramente e algo mais
                grave não foi relatado até o momento.</p>
            </div>

            <div class="card col-sm-10 col-md-4 col-lg-4">

              <img class="imgvac2 col-11" src="../Projeto-integrador/images/astrazenica1.jpg" alt="ampola de vacina atrás e na frente escrito Astrazenica">

              <h2 class="text-center">Vacina Astrazenica</h2>

              <p class="p-4 text-center">Fabricada na Inglaterra pela Universidade de Oxford em conjunto com Fundação Osvaldo Cruz (FIOCRUZ), ao
                contrario da vacina Coronavac a Astrazenica é uma vacina é por meio de um vetor viral, onde em um
                laboratório , os cientistas modificam geneticamente uma partícula do vírus. Ele também é alterado para não
                se multiplicar, não sendo capaz de provocar a doença. Sua eficácia variou de 62% e 90% no início dos
                estudos, sendo liberado assim também pela Anvisa, seguindo todos os protocolos exigidos. Para sua eficácia
                é necessário tomar duas doses com um intervalo entre 04 e 12 semanas entre as duas.</p>

              <h3 class="text-center">Reações adversas:</h3>

              <p class="p-4 text-center">Dor, calor, coceira e hematomas no local da picada são os sintomas as mais comuns apresentados. Uma parte
                mínima dos imunizados também relataram febre, dor no corpo, mal-estar e cansaço. Sendo um desconforto leve
                que dura cerca de 48 horas. </p>
            </div>
          </div>
        </div>

        <div class="container-fluid">

          <div class="row justify-content-center p-5">

            <div class="box col-sm-10 col-md-4 col-lg-4">

              <img class="imgvac col-11" src="../Projeto-integrador/images/pfizer1.jpg" alt="ampola de vacina atrás e na frente escrito Pfiser">

              <h2 class="text-center">Vacina Pfiser</h2>

              <p class="p-4 text-center">Fabricada pela Pfizer e BioNTech localizadas na Alemanha é uma vacina de RNA mensageiro, onde é criado em
                laboratório um corpo contendo apenas um trecho do código do Sars-CoV-2 (como se fosse uma receita de
                bolo), onde esse código é lido pelos anticorpos mostrando quem é o vírus e como devem se defender. Sua
                eficácia foi de 95% no início dos estudos, sendo também liberado pela Anvisa, seguindo todos os protocolos
                exigidos. Para sua eficácia é necessário tomar duas doses com um intervalo maior ou igual a 21 dias entre
                as duas. Já nos dias atuais está sendo indicada para ser aplicada em jovens acima de 12 anos e gestantes.
              </p>

              <h3 class="text-center">Reações adversas:</h3>

              <p class="p-4 text-center">As mais comuns relatadas são dor e inchaço no local da injeção, cansaço, dor de cabeça e nas
                articulações, febre, calafrios e diarreia. Alguns voluntários tiveram sinais de hipersensibilidade, como
                erupções e coceiras na pele e inchaço nas pequenas glândulas que possuem no sistema linfático.</p>
              <p class="p-4 text-center">Nos Estados Unidos foram relatados pós-vacinação alguns casos de reação anafilática, um evento alérgico
                grave que exige atendimento imediato. Mas ainda sim as vacinas de RNA costumam ser seguras para a maioria
                dos alérgicos. </p>
            </div>

            <div class="box col-sm-10 col-md-4 col-lg-4">

              <img class="imgvac col-11" src="../Projeto-integrador/images/jassen1.jpg" alt="ampola de vacina atrás e na frente escrito Jassen">

              <h2 class="text-center">Vacina Jassen</h2>

              <p class="p-4 text-center">Fabricada pela Johnson & Johnson é a única vacina de dose única. Ela usa um adenovírus (vírus tipo que
                causa resfriado comum) modificado geneticamente para não se multiplicarem, nem causar resfriado. </p>

              <p class="p-4 text-center">Sua eficácia foi de 66% no início dos estudos, sendo também liberado pela Anvisa, seguindo todos os
                protocolos exigidos.</p>

              <h3 class="text-center">Reações adversas:</h3>

              <p class="p-4 text-center">Foram relatados após dois dias da aplicação cansaço, dor de cabeça, dores musculares, calafrios, febre e
                náusea, dor e vermelhidão no local da vacina.</p>
            </div>

          </div>
        

        <h1 class="p-5 text-center">Vacinas com autorização para importação excepcional</h1>


          <div class="row justify-content-center">

            <div class="box col-sm-10 col-md-4 col-lg-4">
              <img class="imgvac col-11" src="../Projeto-integrador/images/sputnik.jpg" alt="ampola de vacina atrás e na frente escrito Sputnik">
              <h2 class="text-center">Vacina Sputnik</h2>
              <p class="p-4 text-center">Fabricada na Rússia pela empresa. Ela usa um adenovírus, porém ao contrário das outras vacinas ela não
                pode ser utilizada em gestantes, puérperas, lactantes e indivíduos com comorbidades. </p>
              <p class="p-4 text-center">Foi liberada a importação para alguns estados apenas. Dentre eles estão: Bahia, Maranhão, Sergipe,
                Pernambuco, Pará, entre outros.</p>
              <p class="p-4 text-center">Faixa etária autorizada a receber o imunizante são pessoas com idades: maiores ou igual a de 18 anos e
                menores de 60 anos.</p>
            </div>

            <div class="box col-sm-10 col-md-4 col-lg-4">
              <img class="imgvac col-11" src="../Projeto-integrador/images/covaxin.jpg" alt="ampola de vacina atrás e na frente escrito Covaxin">
              <h2 class="text-center">Vacina Covaxin (SUSPENSA)</h2>
              <p class="p-4 text-center">Fabricada na Índia, a vacina Covaxin teve seu processo de importação suspenso como uma medida cautelar
                devido a empresa que a fabricava , empresa Precisa não possuir mais autorização para representar a empresa
                desenvolvedora na Índia, a empresa Bharat Biotech. </p>
              <p class="p-4 text-center">É fabricada com o vírus inativo.</p>
            </div>
          </div>
        </div>


        <h2 class="p-5 text-center">Brasil pós vacina</h2>

        <p class="text-center text col-10 col-xl-10">Queda no número de mortes é o principal indício do efeito da vacinação no Brasil, mostrando a
          efetividade no uso das mesmas, porém cientistas ainda alertam que a pandemia ainda não está controlada devido as
          variantes do Coronavírus que estão surgindo, exemplo: Delta. </p>
        <p class="float-end col-sm-3 col-md-4"><a class="btn btn-primary" href="https://g1.globo.com/bemestar/coronavirus/noticia/2021/07/02/queda-das-mortes-por-covid-aponta-indicio-do-efeito-da-vacinacao-no-brasil-veja-o-que-se-sabe-e-os-alertas.ghtml">Leia
            mais ...</a></p>
    </div>



    <div class="container-fluid p-5">

      <div class="row justify-content-center">

        <div class="box quatvac col-sm-8 col-md-4 col-lg-5 ">
          <h4 class="text-center">Vacinas aplicadas em todo o Brasil</h4>
          <p class="quat">314.158.730</p>
        </div>

        <div class="box quatvac col-sm-8 col-md-4 col-lg-5">
          <h4 class="text-center">Doses distribuidas em todo o Brasil</h4>
          <p class="quat">378.531.734</p>
        </div>
      </div>
    </div>


      <h6 class="text-center">Atualizada 05/12/2021 às 21:00hr.</h6>
      </article>

    

  </div>

  <div class="row">
    <footer class="footer">
      <?php include 'footer.php'; ?>
    </footer>


  </div>


  <script src="../Projeto-integrador/js/bootstrap.bundle.min.js"></script>
</body>

</html>