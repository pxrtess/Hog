<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hogwarts</title>
  <link rel="icon" type="image/x-icon" href="imgs/icone.png" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script type="text/javascript" src="js/config.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body id="main" style="background-color: rgb(236, 236, 236)">
  <header>
    <nav class="nav" id="nav">
      <a class="logoa">
        <img src="imgs/logo.png" id="logo" class="logo" />
        <img src="imgs/logow.png" id="logow" class="logo" style="display: none" />
      </a>
      <button type="button" style="background-color: black; color: white" class="btnTema btn" id="trcTema" onclick="trocaTema()">
        Dark
        <div class="btnCores">
          <button type="button" style="background-color: red; color: white" class="btnTemaRed btn" id="trcTemaRed" onclick="trocaTemaRed()"></button>
          <button type="button" style="background-color: blue; color: white" class="btnTemaBlue btn" id="trcTemaBlue" onclick="trocaTemaBlue()"></button>
          <button type="button" style="background-color: green; color: white" class="btnTemaGreen btn" id="trcTemaGreen" onclick="trocaTemaGreen()"></button>
          <button type="button" style="background-color: yellow; color: white" class="btnTemaYellow btn" id="trcTemaYellow" onclick="trocaTemaYellow()"></button>
        </div>
      </button>
    </nav>
  </header>
  <main>
    <div class="container" id="conteudo">
      <br />
      <img class="bv" id="bv" src="imgs/bv.png" />
      <img class="bv" id="bvw" src="imgs/bvw.png" style="display: none" /><br /><br />
      <p class="pbv" id="p19">
        Neste artigo, reunimos uma grande quantidade de informações para os
        fãs e quem ainda está adentrando no universo de Harry Potter, como a
        origem da saga, curiosidades, biografia da autora, informações sobre
        os livros e muito mais, boa leitura!
      </p>
      <br />
      <div class="origem">
        <h1 class="tp display-5" id="tp2">A Origem</h1>
        <br />
        <p class="po" id="p3">
          A ideia do universo de Harry Potter surgiu de forma repentina, em
          1990, como a própria autora afirma. Assim que chegou em casa, após a
          viagem de trem inspiradora, começou a escrever. Porém, sua mãe veio
          a falecer em dezembro do mesmo ano. Este fato afetou bastante a
          escrita de J.K. O fato de Harry sofrer com a ausência dos pais está
          diretamente relacionado com a realidade vivida em época por ela.
        </p>
        <p class="po" id="p4">
          Naquele momento, a sua vida não estava fácil. Sua filha, Jessica
          Isabel Rowling Arantes, havia nascido em 1993, um ano após se casar
          com Jorge Arantes, um jornalista português. O casamento durou pouco
          tempo e coube a Jo cuidar da filha. Mesmo com apenas alguns
          capítulos do livro escritos, as duas se mudaram para Edimburgo, para
          que pudessem ficar próximas à irmã de J.K.
        </p>
        <br /><br />
        <div class="video">
          <div class="ratio ratio-16x9">
            <iframe muted class="vd" src="imgs/intros.mp4" title="Intros" allowfullscreen></iframe>
          </div>
        </div>
        <br />
        <br />
        <p class="po" id="p5">
          O caminho pelo reconhecimento não foi fácil. Antes de ser publicado,
          o livro foi recusado por 12 editoras! Após um ano de tentativas
          frustradas, a obra foi aprovada pela editora Bloomsburry, de
          Londres, através do editor Barry Cunningham. A publicação, todavia,
          deve-se muito a Alice Newton, filha de oito de anos do presidente da
          editora, que leu o primeiro capítulo e exigiu a sequência para o seu
          pai. Bloomsburry publicou Harry Potter e a Pedra Filosofal em 1997
          com uma tiragem inicial de 1.000 cópias, das quais 500 foram
          destinadas à bibliotecas escolares. Meses mais tarde, ainda em 1997,
          J.K. Rowling recebeu uma concessão de 8 mil libras da Scottish Arts
          Council - um órgão escocês governamental para incentivo das artes -
          para dar continuidade a série de livros.
        </p>
        <br />
        <p class="po" id="p6">
          Os meses seguintes foram de gratas surpresas para a autora. Prêmios
          e mais prêmios foram conquistados, com traduções para diversas
          línguas e milhões de cópias vendidas no mundo todo.
        </p>
      </div>
      <br />
      <br />
      <section class="sec1">
        <div class="conte">
          <div id="carouselExampleCaptions" class="c1 carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgs/livros.png" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="ct">Livros</h5>
                  <p class="cp">
                    A saga de livros já reune o total de 8 exemplares desde
                    sua criação.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imgs/filmes.png" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="ct">Filmes</h5>
                  <p class="cp">
                    O primeiro filme da saga foi lançado em 2001, com o nome
                    "Harry Potter e a Pedra Filosofal".
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imgs/peca.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="ct">Peça</h5>
                  <p class="cp">
                    Em 2016, JK. Rowling surpreendeu os fãs ao apresentar uma
                    peça baseada na saga Harry Potter.
                  </p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="contd">
          <p id="p2" class="p">
            A história se desenvolve em volta do protagonista, Harry James
            Potter, um garoto órfão que aos 11 anos descobre que é um bruxo ao
            ser surpreendentemente convidado a estudar na Escola de Magia e
            Bruxaria de Hogwarts. O arco principal da história gira em torno
            da amizade de Harry com Hermine Granger e Ronald Weasley, além do
            diretor de Hogwarts, Dumbledore e o grande vilão: Lord Voldemort -
            "aquele-que-não-deve-ser-nomeado".
          </p>
        </div>
      </section>
      <br /><br />
      <h1 class="tp display-5" id="tp1">A Autora</h1>
      <br />
      <section class="autora">
        <div class="conte" style="width: 70%">
          <p id="p1" class="pa">
            J.K. Rowling, é uma escritora, roteirista e produtora
            cinematográfica que nasceu no dia 31 de julho de 1965 na cidade de
            Yate, Reino Unido. Atualmente com 54 anos, J.K. Rowling ficou
            mundialmente famosa logo com o seu romance infantojuvenil de
            estreia, Harry Potter e a Pedra Filosofal, em 1997.Os livros da
            série ganharam rapidamente notoriedade mundial e já venderam mais
            de 500 milhões de cópias. Tamanho sucesso fez de J.K. Rowling a
            escritora mais bem sucedida da história e transformou Harry Potter
            na série literária mais vendida de todos os tempos.
          </p>
        </div>
        <div class="contd">
          <img src="imgs/jk.png" class="jk" />
        </div>
      </section>
      <br />
      <br />
      <section class="casas">
        <h1 class="tp display-5" id="tp3">As Casas</h1>
        <br />
        <p class="po" id="p7">
          Em Hogwarts, os alunos são encaminhados para uma das Casas por meio
          da decisão do Chapéu Seletor, um artefato mágico capaz de ler a
          ambição de um indivíduo. Seu julgamento, por vezes impreciso, leva
          os estudantes para uma das quatro casas de Hogwarts: Grifinória,
          Lufa-Lufa, Corvinal e Sonserina.
        </p>
        <br /><br />

        <div id="carouselExampleIndicators" class="c2 carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgs/grif.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="imgs/corv.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="imgs/sons.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="imgs/luf.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span><br />
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br /><br />
        <p class="po" id="p18">
          Na obra, a perspectiva retrata com prioridade o cotidiano dos alunos
          da Grifinória, já que é a Casa dos protagonistas. Contudo, isso não
          diminui a qualidade das demais, que têm histórias igualmente ricas e
          curiosas. Descubra com qual você mais se identifica.
        </p>
        <br /><br />
        <div class="casal grif">
          <img src="imgs/grifesc.png" class="esc" />
          <h1 class="casat display-6" id="tp4">Grifinória</h1>
        </div>
        <br />
        <p class="pc" id="p8">
          Lar dos bravos e cavalheiros, o símbolo da Grifinória apresenta em
          seu estandarte um orgulhoso leão, acompanhado das cores vermelha e
          amarelo-dourada. A Casa valoriza feitos de coragem e superação
          pessoal que costumam ser realizados por altruísmo. Seus estudantes
          tendem a ser bastante aventureiros, mas se destacam, sobretudo, pela
          lealdade.
        </p>
        <br />
        <p class="pc" id="p9">
          Entretanto, os alunos da Grifinória podem ser imprudentes nos atos
          de bravura, muitas vezes por teimosia ou falta de melhor julgamento
          da situação — o que pode ser visto como egoísmo. Alvo Dumbledore,
          Harry Potter e Minerva McGonagall são alguns dos membros mais
          conhecidos da Casa.
        </p>
        <br /><br />
        <div class="casal corv">
          <img src="imgs/corvesc.png" class="esc" />
          <h1 class="casat display-6" id="tp5">Corvinal</h1>
        </div>
        <br />
        <p class="pc" id="p10">
          Os bruxos pertencentes à Corvinal se destacam por sua exímia
          inteligência. Nesse contexto, suas principais características são
          relacionadas a sabedoria, criatividade e personalidade única, o que
          garante a eles certa excentricidade. Contudo, a valorização
          exacerbada do academicismo pode torná-los perfeccionistas, frios,
          insensíveis e demasiadamente críticos em relação às outras Casas.
        </p>
        <br />
        <p class="pc" id="p11">
          Um misterioso corvo (ou uma águia, conforme algumas representações),
          acompanhado das cores azul e bronze, compõe o estandarte da
          Corvinal. Entre seus membros mais populares, estão Luna Lovegood,
          Gilderoy Lockhart e Garrick Olivaras. Curiosamente, Rowena Ravenclaw
          é a única entre os quatro fundadores de Hogwarts sem uma tradução
          regionalizada para seu nome.
        </p>
        <br /><br />
        <div class="casal sons">
          <img src="imgs/sonsesc.png" class="esc" />
          <h1 class="casat display-6" id="tp6">Sonserina</h1>
        </div>
        <br />
        <p class="pc" id="p12">
          Sonserina é a Casa com a pior reputação. Parte dessa fama é, de
          certa forma, justificável, já que ela abrigou alguns dos maiores
          bruxos das trevas enquanto ainda eram estudantes. Entretanto, muitos
          de seus membros têm boas qualidades que redimem a má fama, o que os
          torna grandes alunos e líderes natos.
        </p>
        <br />
        <p class="pc" id="p13">
          Os membros da Sonserina têm como características, sobretudo, a
          ambição e a busca pela grandeza, por isso estão sempre se dedicando
          a alcançar e expandir metas e se empenhando com inteligência em
          diversas áreas da magia. Por outro lado, essas qualidades podem
          promover um senso de competição muito aflorado, o que os torna
          presunçosos e egoístas.
        </p>
        <p class="pc" id="p14">
          Com uma imponente serpente como mascote, o estandarte da Sonserina é
          colorido com verde e prata. Alguns de seus membros mais populares
          são Merlin, Tom Riddle, Draco Malfoy e Dolores Umbridge.
        </p>
        <br /><br />
        <div class="casal luf">
          <img src="imgs/lufesc.png" class="esc" />
          <h1 class="casat display-6" id="tp7">Lufa-Lufa</h1>
        </div>
        <br />
        <p class="pc" id="p15">
          Os estudantes da Lufa-Lufa são dedicados, pacientes e honestos. Suas
          admiráveis características os tornam trabalhadores árduos e
          modestos, sendo receptivos a todos os demais tipos de bruxos. Por
          outro lado, o excesso dessas qualidades pode se tornar um ponto
          negativo: justamente por sua flexibilidade e compreensão, os alunos
          podem ser complacentes e muito dependentes de outras pessoas,
          tornando-se ingênuos.
        </p>
        <br />
        <p class="pc" id="p16">
          O estandarte da Lufa-Lufa apresenta vívido amarelo e preto como as
          principais cores, com um astuto texugo como mascote. Seus membros
          mais conhecidos são Newt Scamander, Cedrico Diggory e Ninfadora
          Tonks.
        </p>
      </section>
      <br /><br /><br />
      <section class="secchapeu">
        <div class="textchapeu">
          <h1 class="display-6" id="tp8">
            Descubra sua casa em Harry Potter!
          </h1>
          <br />
          <form action="validacao.php" class="formchapeu" method="post">
            <input type="text" id="nome" name="nome" class="form-control nome" placeholder="Digite seu nome e clique em enviar!" />
            <input type="submit" class="btn btn-warning" id="enviar"></input>
          </form>
          <br />
        </div>
        <div class="chapeu">
          <img src="imgs/chapeu.png" class="chapeuimg" />
        </div>
      </section>
    </div>
  </main>
</body>

</html>