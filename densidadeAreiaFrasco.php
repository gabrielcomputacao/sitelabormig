<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labormig - Ensaio de densidade in situ</title>
    <meta name="description" content="A Labormig é especialista em ensaios de densidade in situ pelo método do frasco de areia, garantindo a avaliação precisa da compactação do solo diretamente no campo. Conte conosco!" />


    <link rel="icon" type="image/png" sizes="16x16" href="./assets/icons/predio.png" />

    <link href="./css/reset.css" rel="stylesheet" />
    <link href="./css/styles.css" rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php require './partials/header.php' ?>
    <?php
    require "./partials/whatsapp.php";
    ?>
    <?php require './partials/banner.php' ?>


    <main>

        <div id="introduction" class="container">
            <section>
                <div class="introduction introduction-ensaios">
                    <h1 class="title-ensaios">ENSAIO DE DENSIDADE IN SITU MÉTODO FRASCO DE AREIA</h1>
                    <div class="content-introduction">
                        <div class="introduction-text">
                            <p>
                                O ensaio de densidade in situ - método do frasco de areia é uma técnica utilizada para determinar a densidade aparente seca do solo diretamente no campo. <br><br> O ensaio surgiu nos Estados Unidos no ano de 1980 e não tem um único criador conhecido, pois é uma técnica que evoluiu ao longo do tempo com contribuições de diversos engenheiros e pesquisadores na área de engenharia geotécnica. <br><br> Ele foi desenvolvido como uma técnica prática para medir a densidade aparente seca do solo diretamente no campo, comparando-a com a densidade obtida em testes laboratoriais.
                            </p>
                        </div>
                        <div class="introduction-img">
                            <img
                                src="./assets/images/densidadeAreia.webp"
                                alt="Labormig | Densidade in situ (método frasco de areia)"
                                title="Labormig | Densidade in situ (método frasco de areia)" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="process">
            <div class="container process-wrapper">
                <h2>Procedimento</h2>
                <div class="process">
                    <div class="content-process">
                        <div class="item-process">
                            <span class="span-number"> 1</span> - <span class="span-title">Preparação do Local</span> : A superfície do solo é nivelada e limpa de qualquer vegetação ou detritos.

                        </div>
                        <div class="item-process">
                            <span class="span-number"> 2</span> - <span class="span-title">Corte do Solo:</span> Um furo é feito no solo usando um cilindro de diâmetro específico.
                            3 - Coleta e Pesar do Solo: O solo removido do furo é coletado e pesado para determinar a massa do solo.
                        </div>
                    </div>
                    <div class="content-process">
                        <div class="item-process">
                            <span class="span-number"> 3</span> - <span class="span-title">Coleta e Pesar do Solo:</span> O solo removido do furo é coletado e pesado para determinar a massa do solo.
                        </div>
                        <div class="item-process">
                            <span class="span-number"> 4</span> - <span class="span-title">Preenchimento com Areia:</span> O furo é preenchido com areia de densidade conhecida, utilizando um frasco de areia.
                        </div>
                    </div>
                    <div class="content-process">
                        <div class="item-process">
                            <span class="span-number"> 5</span> - <span class="span-title">Pesar do Frasco de Areia:</span> O frasco de areia é pesado após o preenchimento para determinar a massa de areia utilizada.
                        </div>
                        <div class="item-process">
                            <span class="span-number"> 6</span> - <span class="span-title">Cálculo da Densidade:</span> A densidade aparente seca do solo é calculada dividindo a massa do solo pela massa de areia e multiplicando pelo fator de densidade da areia.
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <?php require './partials/cta.php' ?>


        <section id="objective">
            <div class="content-objective">
                <div class="objective-title">
                    <div>

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#036752" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                        </svg>
                    </div>
                    <h2>Norma Técnica no Brasil</h2>
                </div>
                <div class="wrapper-objective">
                    <div class="wrapper-content-objective">
                        No Brasil, este ensaio é regulamentado pela ABNT NBR 7185:20163. <br><br> Essa norma no Brasil foi publicada pela primeira vez em 1986. Esta norma especifica o método para determinar a massa específica aparente do solo in situ com o uso do frasco de areia, garantindo procedimentos padronizados e precisos
                    </div>
                </div>
            </div>
        </section>


    </main>








    <?php require './partials/footer.php' ?>

</body>

</html>