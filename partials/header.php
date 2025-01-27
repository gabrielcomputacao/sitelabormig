<?php

require  __DIR__ . "/../content.php";

// require '../content.php';



$pagePath = $_SERVER['REQUEST_URI'];
$pageSmallHeader = false;

foreach (explode('/', $pagePath) as $item) {

    if ($item === 'compactacaoSolo.php' || $item === 'groupEnsaiosSolos.php') {
        $pageSmallHeader = true;
    }
}

?>

<header>
    <div class="header">
        <div class="content-header">
            <a href="<?= getPath('main.php', 1) ?>">

                <img
                    src="<?= getPath('assets/images/logo-labormig.webp', 1) ?>"
                    alt="Labormig"
                    title="Labormig"
                    width="120"
                    height="50" />
            </a>
            <div class="menu-header">
                <div class="menus">
                    <?php if (!$pageSmallHeader): ?>
                        <a href="#home" class="menus-links">
                            <img src="<?= getPath('assets/icons/house.png', 1) ?>" alt="Labormig | Home">
                            Home</a>

                        <a href="#introduction" class="menus-links">
                            <img src="<?= getPath('assets/icons/grupo.png', 1) ?>" alt="Labormig | Nós">
                            Sobre Nós</a>
                        <a href="#service" class="menus-links">
                            <img
                                src="<?= getPath('assets/icons/servico-de-gestao.png', 1) ?>"
                                alt="Labormig | Serviços">
                            Serviços</a>

                        <div id="atuacao">
                            <img
                                src="<?= getPath('assets/icons/dashboard.png', 1) ?>"
                                alt="Labormig | Áreas de atuação" />
                            Áreas de <br />
                            Atuação
                            <div class="areas_atuacao submenu-invi">
                                <div class="areas_atuacao_menu">
                                    <!-- lembrar de trocar depois -->
                                    <a href="<?= getPath('asfalto.php', 1) ?>">Asfaltos</a>
                                    <a href="<?= getPath('concreto.php', 1) ?>">Concreto</a>
                                    <span class="menu-ensaio">Ensaios
                                        <div id="submenu-ensaios" class="submenu-ensaios">
                                            <a href="<?= getPath('groupEnsaiosSolos.php', 1) ?>">
                                                <span>Solos
                                                </span>
                                            </a>

                                        </div>

                                    </span>
                                    <a href="<?= getPath('locacao.php', 1) ?>">Locação de equipamentos</a>
                                    <a href="<?= getPath('solos.php', 1) ?>">Solos</a>
                                    <a href="<?= getPath('vendas.php', 1) ?>">Venda de equipamentos</a>
                                </div>
                            </div>
                        </div>
                        <a href="#duvidas" class="menus-links">
                            <img
                                src="<?= getPath('assets/icons/perguntas-frequentes.png', 1) ?>"
                                alt="Labormig | Dúvidas">
                            Dúvidas</a>
                        <a href="#resultados" class="menus-links">
                            <img
                                src="<?= getPath('assets/icons/resultados.png', 1) ?>"
                                alt="Labormig | Resultados">
                            Meus Resultados</a>
                    <?php else: ?>
                        <a href="<?= getPath('main.php#home', 1) ?>" class="menus-links">
                            <img src="<?= getPath('assets/icons/house.png', 1) ?>" alt="Labormig | Home">
                            Home</a>

                        <a href="<?= getPath('main.php#introduction', 1) ?>" class="menus-links">
                            <img src="<?= getPath('assets/icons/grupo.png', 1) ?>" alt="Labormig | Nós">
                            Sobre Nós</a>
                        <a href="<?= getPath('main.php#service', 1) ?>" class="menus-links">
                            <img
                                src="<?= getPath('assets/icons/servico-de-gestao.png', 1) ?>"
                                alt="Labormig | Serviços">
                            Serviços</a>

                        <div id="atuacao">
                            <img
                                src="<?= getPath('assets/icons/dashboard.png', 1) ?>"
                                alt="Labormig | Áreas de atuação" />
                            Áreas de <br />
                            Atuação
                            <div class="areas_atuacao submenu-invi">
                                <div class="areas_atuacao_menu">
                                    <!-- lembrar de trocar depois -->
                                    <a href="<?= getPath('asfalto.php', 1) ?>">Asfaltos</a>
                                    <a href="<?= getPath('concreto.php', 1) ?>">Concreto</a>
                                    <span class="menu-ensaio">Ensaios
                                        <div id="submenu-ensaios" class="submenu-ensaios">
                                            <a href="<?= getPath('groupEnsaiosSolos.php', 1) ?>">
                                                <span>Solos
                                                </span>
                                            </a>
                                        </div>
                                    </span>
                                    <a href="<?= getPath('locacao.php', 1) ?>">Locação de equipamentos</a>
                                    <a href="<?= getPath('solos.php', 1) ?>">Solos</a>
                                    <a href="<?= getPath('vendas.php', 1) ?>">Venda de equipamentos</a>
                                </div>
                            </div>
                        </div>
                        <a href="<?= getPath('main.php#duvidas', 1) ?>" class="menus-links">
                            <img
                                src="<?= getPath('assets/icons/perguntas-frequentes.png', 1) ?>"
                                alt="Labormig | Dúvidas">
                            Dúvidas</a>
                        <a href="#resultados" class="menus-links">
                            <img
                                src="<?= getPath('assets/icons/resultados.png', 1) ?>"
                                alt="Labormig | Resultados">
                            Meus Resultados</a>
                    <?php endif; ?>

                </div>

                <nav class="navbar">
                    <div class="menu-toggle" id="menuToggle">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
            </div>
        </div>


    </div>
    <div class="header-menu-mobile invisible">
        <div class="menus-mobile">
            <a href="#home">Home</a>
            <a href="#introduction">Sobre</a>
            <a href="#service">Serviços</a>
            <span id="areas">Áreas de Atuação &nbsp;
                <img
                    src="<?= getPath('assets/icons/bootstrap/caret-down-fill.svg', 1) ?> "
                    alt="Bootstrap"
                    width="16"
                    height="16" />
            </span>
            <div id="subtitleMob" class="subtitle-mobile submenu-invi">
                <a href="<?= getPath('asfalto.php', 1) ?>">Asfalto</a>
                <a href="<?= getPath('concreto.php', 1) ?>">Concreto</a>
                <a href="<?= getPath('locacao.php', 1) ?>">Locação de equipamento</a>
                <a href="<?= getPath('solos.php', 1) ?>">Solos</a>
                <a href="<?= getPath('vendas.php', 1) ?>">Venda de equipamento</a>
            </div>
            <span id="ensaios">Ensaios &nbsp;
                <img
                    src="<?= getPath('assets/icons/bootstrap/caret-down-fill.svg', 1) ?> "
                    alt="Bootstrap"
                    width="16"
                    height="16" />
            </span>
            <div id="subtitleMobEnsaios" class="subtitle-mobile submenu-invi">
                <a href="<?= getPath('groupEnsaiosSolos.php', 1) ?>">Solos</a>

            </div>
            <a href="#duvidas">Dúvidas</a>
            <a href="#resultados">Meus Resultados</a>
        </div>
    </div>
</header>