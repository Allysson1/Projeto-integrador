<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Dados COVID-19</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../Projeto-integrador/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Projeto-integrador/css/estilo.css">
  <script src="/js/bootstrap.min.js"></script>
</head>


<body class="body-dados">

<div class="row">
  
    <?php include 'header.php'; ?>

    
    <img src="../Projeto-integrador/images/index.png" class="img-fluid" id="img-header" alt="imagem principal do topo do portal covid">
  

  
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
      <!--     conteúdo principal-->

      <article class="row p-3">
        <h1 class="text-center p-4 h1index">Corona Virus no Brasil</h1>

        <!--            img gráfica dos dados do corona brasil-->
        <img id="taxa" src="images/dados-covid-1.png" alt="Imagem retratando os dados de mortalidade desde o Início do Conrona Vírus" class="col-sm-8 col-md-8 col-lg-9 border" />

        <nav class="nav-tablet col-sm-4 col-md-3 lh-1">
          <!-- lh-1 = line height -->

          <ul class="nav nav-fill">
            <li><a class="nav-link anavdados" href="dados.php#taxa">Taxa de mortalidade</a></li>
            <li><a class="nav-link anavdados" href="dados.php#dadosB">Dados Do Brasil</a></li>
            <li><a class="nav-link anavdados" href="dados.php#dadosM">Dados Do mundo</a></li>
            <li>
              <a class="nav-link anavdados" href="dados.php#contmundo">contaminação do mundo</a>
            </li>
            <li>
              <a class="nav-link anavdados" href="dados.php#outros">Outros assuntos</a>
            </li>
          </ul>
        </nav>

        <div class="col-md-8 col-lg-3">
          <p class="pimg">
            Imagem representando a taxa de mortalidade por semana no Brasil
            desde Abril de 2020
          </p>

          <a href="https://especiais.gazetadopovo.com.br/coronavirus/numeros/" class="pimg aref">Referência: Gazeta do Povo</a>
        </div>

        <h3 id="dadosB" class="text-center espacamento">Dados No Brasil</h3>

        <!--texto principal brasil-->
        <p>
          Desde 26 de fevereiro de 2020, data em que foi descoberto o primeiro
          caso de corona vírus no Brasil, muitas pessoas acharam que o vírus
          não chegaria ao Brasil, e por isso não se prepararam. Mas esse foi o
          erro de muitos e que contribuiu para o alastramento vírus pelo país.
          Os casos de COVID-19 continuaram subindo continuamente por todo o
          Brasil dando início a quarentena, e posteriormente ao desemprego e o
          abalo na economia.
        </p>

        <p>
          Com o caos estabelecido, deu-se início então ao desenvolvimento de
          vacinas no Brasil, como a do Instituto Butantan em parceria com a
          Sinovac nomeada de CoronaVac e a Astrazeneca da Fundação Oswaldo
          Cruz em parceria com a universidade de Oxford. Em 17 de Janeiro de
          2021, com a aprovação da Anvisa, se aplica a primeira vacina no
          Brasil, com um tempo recorde de menos de um ano para a produção da
          vacina, coisa que antes nunca havia acontecido no mundo.
        </p>

        <p>
          Mesmo com vacinas sendo aplicadas em todo o território brasileiro,
          os casos positivos para COVID-19 junto com as estatísticas de morte
          não paravam de crescer, hoje o número de mortos pelo vírus no Brasil
          passa de 610 mil mortes. Mas mesmo com um número tão alto de mortes,
          não pode ser deixado de lado que mais de 19 milhões de pessoas foram
          curadas do COVID, somos o terceiro país no mundo que mais vacina
          diariamente com 59% da população vacinada, o que nos deixa em
          segundo lugar como país com a maior parte da população já imune ao
          vírus.
        </p>

        <div class="sct-sm">
          <a href="sobrevacinas.php"><img src="images/seringa2.jpg" alt="imagem representando uma seringa para fazer referencia as vacinas." class="col-6 col-sm-4 imglink-sm border" /></a>

          <p class="text-center col-sm-8 col-md-8 pimglink">
            Acompanhe agora as principais vacinas que estão sendo asplicadas
            na população, suas reações, e a quantidade de pessoas vacinadas no
            Brasil.
          </p>
        </div>
        <a class="anavdados aimglink" href="https://br.pinterest.com/pin/569142471671144799/">Referência: Pinterest</a>

        <h1 id="dadosM" class="text-center espacamento">
          Conona Virus no Mundo
        </h1>

        <!--            img gráfica dos dados do corona do mundo-->

        <img id="contmundo" src="images/dados-covid-19.jpg" alt="imagem representando as taxas de contaminação do mundo pelo Corona Virus" class="col-sm-12 col-md-12 col-lg-9" />
        <div class="col-md-12 col-lg-3">
          <p class="pimg">
            Imagem representando a contaminação dos paises pelo Corona Virus
          </p>
          <a class="pimg aref" href="https://www.techtudo.com.br/listas/2020/03/mapa-do-coronavirus-no-mundo-sites-mostram-casos-confirmados-em-tempo-real.ghtmlhttps://www.techtudo.com.br/listas/2020/03/mapa-do-coronavirus-no-mundo-sites-mostram-casos-confirmados-em-tempo-real.ghtml">Referência: Tech Tudo</a>
        </div>

        <h3 class="text-center espacamento">Dados No Mundo</h3>

        <p>
          Em 8 de dezembro de 2019 se tem notícia dos primeiros casos de
          corona Vírus no mundo, no hospital Wuhan, na China. Data que o mundo
          começou a passar por uma das piores pandemias de todos os tempos,
          com o vírus se espalhando rápido pela cidade de Wuhan, e
          posteriormente por toda a China. Visitantes e imigrantes de outros
          países começam a voltar para suas terras atais levando consigo o
          vírus que como podemos ver na imagem acima, quase nenhum país ficou
          sem uma pessoa contrair o vírus. O vírus afetou em grande maioria as
          pessoas mais idosas no qual o sistema imunológico é mais fraco.
          Países da Europa sofreram bastante com isso pois grande parte da
          população neste continente é mais velha. Estados Unidos mesmo
          fechando as fronteiras como muitos outros países não escaparam do
          vírus e desde o início da pandemia teve uma alta taxa de casos e
          mortalidade.
        </p>

        <p>
          De acordo com a AFP (Agence France-Presse), a covid-19 matou mais de
          4,5 milhões de pessoas ao redor do mundo incluindo idosos, adultos e
          crianças desde o início da pandemia. Com um total de 10000 mortes
          por dia ao redor do mundo, o número de mortes mundial aumenta cada
          vez mais. Por causa da vacina estar sendo aplicada em todos os
          países do mundo, muitas pessoas acham que a pandemia já acabou e
          começaram a aglomerar, o que faz pessoas continuarem contraindo o
          vírus e morrendo por causa disso. Mesmo com altas taxas de morte,
          outro número que não para de crescer é o de pessoas curadas ao redor
          do mundo que já supera a marca dos 150 milhões de curados.
        </p>

        <div class="sct-sm">
          <a href="sintomas.php"><img src="images/sintomad.jpg" class="col-sm-4 col-lg-3 imglink-sm" alt="imagem represnetando os sintomas doi Covid-19" /></a>
          <p class="text-center col-sm-8 col-md-8 col-lg-8 pimglink">
            Veja agora os principais sintomas do Covid-19, o que fazer quando
            sentir algum deles, e como se previnir para que o não transmita o
            vírus para ninguém próximo de você como a família ou pessoas e
            amigos na rua.
          </p>
        </div>
        <a class="anavdados aimglink" href="https://www.cemigsaude.org.br/site/home">Referência: Cemig Saúde</a>

        <h3 id="evolucao" class="text-center espacamento">
          Evoluções decorrentes da Pandemia
        </h3>
        <p>
          Mesmo a pandemia tendo acabado com a economia e vidas de muitos
          países, coisas boas também aconteceram devido a sua vinda. Um
          exemplo mais conhecido disso são as vacinas. Vacinas antigamente
          demoravam anos para serem desenvolvidas, mas com o corona vírus foi
          diferente. Havia vacinas que já estavam sendo testadas com apenas 6
          meses de desde o início da pandemia. De fato, o investimento dos
          governos ajudou bastante, mesmo assim desenvolver uma vacina do zero
          é uma tarefa bem difícil. Novas tecnologias também foram
          desenvolvidas, não só apenas para desenvolver vacinas, mas também
          tecnologias aplicadas ao trabalho. Muitas empresas na quarentena
          buscaram trabalho Home office, o que se tornou tendência no mundo
          todo e vai ficar no pós pandemia. Novos softwares de aprendizado e
          lives online também surgiram em grande número como o Microsoft
          teams, google meet, discord etc. Outras tecnologias que podemos
          citar que melhorou muito foi o sistema de delivery, não podendo
          comer em restaurantes e lanchonetes, empresas começaram a entregar
          comida na casa das pessoas, dando mais conforto ao cliente.
          Medidores de temperatura também entram na lista, visto que hoje em
          dia existem câmeras que já captam o calor na pessoa através de
          sistemas com inteligência artificial. O ensino EAD cresceu muito,
          fazendo escolas se adaptarem a novas tecnologias, que antigamente
          eram pouco utilizadas, o que trouxe até atualizações e melhorias
          para elas. Como foi dito, a pandemia não foi uma coisa boa, mas teve
          grande influencia na necessidade de tecnologias novas.
        </p>

        <div id="outros">
          <a href="covid.php"><img src="images/compleementar1.png" alt="imagem para fazer concatenação com a pagina Covid-19" class="border col-sm-4 col-lg-3 imglink-dados" /></a>
          <a href="sobrevacinas.php"><img src="images/complementar2.png" alt="imagem para fazer concatenação com a pagina vacinas" class="border col-sm-4 col-lg-3 imglink-dados" /></a>
          <a href="sintomas.php"><img src="images/complementar3.png" alt="imagem para fazer concatenação com a pagina sintomas" class="border col-sm-4 col-lg-3 imglink-dados" /></a>
        </div>
      </article>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
      <aside class="asidedados">
        <!--navegação de segundoi grau-->
        <nav class="col-lg-10">
          <ul class="nav">
            <li>
              <a class="nav-link anavdados" href="dados.php#taxa">Taxa de mortalidade</a>
            </li>
            <li>
              <a class="nav-link anavdados" href="dados.php#dadosB">Dados Do Brasil</a>
            </li>
            <li>
              <a class="nav-link anavdados" href="dados.php#dadosM">Dados Do mundo</a>
            </li>
            <li>
              <a class="nav-link anavdados" href="dados.php#contmundo">contaminação do mundo</a>
            </li>
            <li>
              <a class="nav-link anavdados" href="dados.php#outros">Outros assuntos</a>
            </li>
          </ul>
        </nav>

        <!--indicações de assunto que levam a outra pagina-->
        <div class="imgaside">
          <a href=""><img src="images/seringa2.jpg" alt="imagem representado uma seringa para fazer referencia a vacina" class="mx-auto d-block col-lg-6 rounded" /></a>
          <a class="anavdados aimglink" href="https://br.pinterest.com/pin/569142471671144799/">Referência: Pinterest</a>
        </div>
        <p class="text-center col-sm-8 col-md-8 col-lg-8 paside">
          Acompanhe agora as principais vacinas que estão sendo asplicadas na
          população, suas reações, e a quantidade de pessoas vacinadas no
          Brasil
        </p>

        <div class="imgasides">
          <a href="sintomas.php"><img src="images/sintomad.jpg" class="mx-auto d-block col-lg-6 rounded" alt="imagem represnetando os sintomas doi Covid-19" /></a>

          <a class="anavdados aimglink" href="https://www.cemigsaude.org.br/site/home">Referência: Cemig Saúde</a>
        </div>
        <p class="text-center col-sm-8 col-md-8 col-lg-8 paside">
          Veja agora os principais sintomas do Covid-19, o que fazer quando
          sentir algum deles, e como se previnir para que o não transmita o
          vírus para ninguém próximo de você como a família ou pessoas e
          amigos na rua.
        </p>
      </aside>
    </div>
  </div>
  <footer>
    <?php include 'footer.php'; ?>
  </footer>
  <script src="../Projeto-integrador/js/bootstrap.bundle.min.js"></script>
</body>


</html>