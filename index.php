<!-- CABEÇALHO PADRÃO -->
<?php
require_once("templates/header.php")
?>

<!-- CONTEÚDO DA PÁGINA PRINCIPAL -->
<!-- CSS do PP -->
<link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">

<div class=mc-main-content>

    <!-- CAMPO DE BUSCA PARA PERFIL DE RESTAURANTE ESPECÍFICO -->
    <section class="mc-search-section mc-section-margin conteiner">
        <h1>Pesquisa</h1>
    </section>

    <!-- SEÇÃO DE BOAS-VINDAS -->
    <section class="mc-welcome-section mc-section-margin">
        <h1>BOAS-VINDAS</h1>
    </section>

    <!-- EXPLICANDO SOBRE FUNCIONALIDADE DA PLATAFORMA -->
    <section class="mc-guide-section mc-section-margin">
        <h1>GUIA DO SITE</h1>
    </section>

    <!-- ÚLTIMAS AVALIAÇÕES -->
    <section class="mc-last-reviews-section mc-section-margin">
        <h1>ULTIMAS AVALIAÇÕES</h1>
    </section>

    <!-- ATUAIS PARCEIROS -->
    <section class="mc-partners-section mc-section-margin ">
        <h1>PARCEIROS</h1>
    </section>

</div>

<!-- RODAPÉ PADRÃO -->
<?php
require_once("templates/footer.php")
?>