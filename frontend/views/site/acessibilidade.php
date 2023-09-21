<?php

/** @var yii\web\View $this */


$this->title = 'Acessibilidade';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div id="simple-list-example">
        <div class="row">
            <div class="col d-flex justify-content-end">
                <a class="p-1 rounded me-5" href="#simple-list-item-1">Precisa de ajuda?</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-between mt-5">
        <div class="col-lg-8 col-md-7 col-12">
            <div class="ms-5">
                <div class="h2 text-azul">Acessibilidade</div>
                <hr class="mt-2" style="background-color: rgb(208, 67, 71);">
            </div>
            <div class="mt-4">
                <div class="">
                    <p>Este site foi desenvolvido para ser acessado a partir dos navegadores usuais. Melhores resultados
                        são obtidos utilizando os seguintes navegadores
                        Google Chrome 105 ou superior, Firefox 103 ou superior, Microsoft Edge 105 ou superior, Opera 91
                        ou superior e Safari 15.4 ou superior. </p>

                    <p><strong class="text-azul">Ajudando a navegar</strong></p>
                    <p>São 2 (duas) as opções de navegação: escolha a mais confortável para você. Além do menu principal
                        (todo o tempo no mesmo local),
                        você pode utilizar o mapa do site (ícone no topo ), para uma navegação mais objetiva e direta.
                    </p>

                    <p><strong class="text-azul">Ajudando a escolher</strong></p>
                    <p>O conteúdo está organizado de acordo com o Menu Principal e seus submenus. A escolha da
                        informação será por ele ou pelo campo busca (seção superior da página)
                        onde você poderá digitar a palavra ou expressão e clicar no ícone da lupa (BUSCAR). Serão
                        retornados links contendo o texto pesquisado.</p>

                    <p><strong class="text-azul">Ajudando a se localizar</strong></p>
                    <p>Utilize o pathway ou breadcrumb ou seja “migalhas de pão” (quase sempre no canto superior
                        esquerdo da tela). Ali estão os menus e submenus que você percorreu
                        desde a página inicial. </p>

                    <p><strong class="text-azul">Ajudando e tirando dúvidas</strong></p>
                    <p>O menu Dúvidas Freqüentes ou simplesmente Dúvidas está disponível com diversas perguntas e
                        respostas para auxiliá-lo. Caso ainda permaneça a dúvida Você pode
                        utilizar o Fale Conosco para enviá-la. Uma orientação no prazo de 48 horas será devolvida para o
                        seu e-mail.</p>
                    <p>Para abrir o arquivo, posicione o cursor sobre o link e pressione o botão esquerdo do mouse.
                        Caso o arquivo não abra, faça o download do programa necessário.</p>

                    <p><strong class="text-azul">Ajudando a se informar</strong></p>
                    <p>A página de abertura do sítio (inicial) já abre com a Notícia Principal atualizada.
                        As notícias anteriores são armazenadas em um Banco de Notícias de fácil acesso e consulta. </p>

                    <p>Para abrir o arquivo, posicione o cursor sobre o link e pressione o botão esquerdo do mouse.
                        Caso o arquivo não abra, faça o download do programa necessário.</p><br>

                    <p><strong class="text-azul">Programas</strong></p>
                    <p> - Adobe Reader</p>

                    <p>O Adobe Reader, antes conhecido como Adobe Acrobat Reader, é uma ferramenta essencial para o seu
                        computador.
                        Com ele você pode ler documentos em formato pdf disponíveis em páginas da Web.</p>
                    <p>- Tamanho: 21,80 MB;</p>
                    <p>- Licença: Gratuito.</p>
                    <a href="https://get.adobe.com/br/reader/" target="_blank"
                        class="btn btn-primary noChange text-decoration-none">
                        Download </a>
                    </p>
                    <h5 class="text-azul small">Publicado em
                        <?= Yii::$app->formatter->asDatetime($dateTime, 'php:d/m/Y H:i:s') ?>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 shadow h-100 d-inline-block py-2 rounded">
            <h1 class="ms-3 mt-2" style="font-size: clamp(16px, 1.2vw, 20px); color: rgb(0, 35, 125);">
                Veja Também</h1>
            <hr>
            <aside>
                <div class="row align-items-center  py-2 h-100">
                    <div class="col-12">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                            <a class="text-decoration-none"
                                href="<?= \yii\helpers\Url::to(['/site/index']) ?>">Assistência a saúde</a>
                        </div>
                    </div>
                    <hr class="my-auto mt-3">
                    <div class="col-12 mt-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                            <a class="text-decoration-none"
                                href="<?= \yii\helpers\Url::to(['/site/index']) ?>">Notícias</a>
                        </div>
                    </div>
                    <hr class="my-auto mt-3">
                    <div class="col-12 mt-3 ">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                            <a class="text-decoration-none"
                                href="<?= \yii\helpers\Url::to(['/site/index']) ?>">Editais</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</aside>