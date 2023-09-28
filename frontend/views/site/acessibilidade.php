<?php

/** @var yii\web\View $this */

$this->title = 'Acessibilidade';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid bg-cinza">
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-6 d-flex align-items-center mt-3">
                <div class="w-75 mx-auto">
                    <div class="text-azul h1">Acessibilidade e Inclusão</div>
                    <p class="text-disable h5">
                        Instituto de Previdência e Assistência dos Servidores Municipais de
                        Novo Hamburgo.
                    </p>
                </div>
            </div>
            <div class="col-md-6  d-flex align-items-center mt-3">
                <img class="w-75 mx-auto"
                    src="https://sebrae.com.br/Sebrae/Portal Sebrae/Fale Conosco/img_topofale.png">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 mt-4">
                <div class="card shadow mb-3 position-sticky" style="top: 20px;">
                    <div class="card-body">
                        <h1 class="ms-3 mt-2" style="font-size: clamp(16px, 1.2vw, 20px); color: rgb(0, 35, 125);">Nesta
                            página</h1>
                        <hr>
                        <div id="contatos">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                <a class="text-decoration-none" href="#contatos">Ajudando a navegar</a>
                            </div>
                        </div>
                        <hr class="my-auto mt-3">
                        <div class="col-12 mt-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                <a class="text-decoration-none" href="#localizacao">Ajudando a escolher</a>
                            </div>
                        </div>
                        <hr class="my-auto mt-3">
                        <div class="col-12 mt-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                <a class="text-decoration-none" href="/home">Ajudando a se localizar</a>
                            </div>
                            <hr class="my-auto mt-3">
                            <div class="col-12 mt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                    <a class="text-decoration-none" href="/home">Ajudando e tirando dúvidas</a>
                                </div>
                            </div>
                            <hr class="my-auto mt-3">
                            <div class="col-12 mt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                    <a class="text-decoration-none" href="/home">Ajudando a se informar</a>
                                </div>
                            </div>
                            <hr class="my-auto mt-3">
                            <div class="col-12 mt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-chevron-right text-primary-emphasis me-3"></i>
                                    <a class="text-decoration-none" href="/home">Extensões PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mt-4">
                    <div class="container text-center">
                        <div class="row-cols-6">
                            <div class="col"><strong>Compartilhar</strong>
                            </div>
                            <div class="col mt-3"><button type="button" class="btn btn-primary rounded-circle"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"
                                    id="whatsapp-button">
                                    <i class="fab fa-whatsapp"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col">
            <div class="mt-4">
                <div class="">
                    <h5 class="text-azul small mt-5 mb-3">Publicado em
                        <?= Yii::$app->formatter->asDatetime($dateTime, 'php:d/m/Y H:i:s') ?>
                    </h5>
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

                    <p><strong class="text-azul">Extensões PDF</strong></p>
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
                    <hr class="my-auto mt-4" style="width: 50%;">
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-12 col-md-6 mt-3" id="pergunta">
                                Esse conteúdo foi útil para você?
                                <button type="button" id="btn-sim"
                                    class="btn btn-outline-primary noChange text-decoration-none ms-3">Sim</button>
                                <button type="button" id="btn-nao"
                                    class="btn btn-outline-primary noChange text-decoration-none">Não</button>
                            </div>

                            <div id="feedback" class="alert alert-success alert-dismissible mt-4 col-12 col-md-6"
                                role="alert" style="display: none;">
                                <i class="fas fa-check-circle text-success"></i><strong
                                    class="text-success">Obrigado!</strong><br>
                                <small>Foi um prazer te ajudar!</small>
                                <button type="button" class="btn-close" style="width: 0; height: 0; font-size: 10px;"
                                    data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div id="erro" class="alert alert-danger alert-dismissible mt-4 col-12 col-md-6"
                                role="alert" style="display: none;">
                                <i class="fas fa-exclamation-circle text-danger"></i><strong class="text-danger">Que
                                    pena!</strong><br>
                                <small>Vamos nos esforçar mais para atende-lo</small>
                                <button type="button" class="btn-close" style="width: 0; height: 0; font-size: 10px;"
                                    data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        var btnSim = document.getElementById("btn-sim");
        var btnNao = document.getElementById("btn-nao");
        var pergunta = document.getElementById("pergunta");
        var feedback = document.getElementById("feedback");
        var erro = document.getElementById("erro");
        var btnFechar = document.getElementById("btn-fechar");

        btnSim.addEventListener("click", function () {
            pergunta.style.display = "none";
            feedback.style.display = "block";
            erro.style.display = "none"; // Ocultar o alerta de erro
        });

        btnNao.addEventListener("click", function () {
            pergunta.style.display = "none";
            feedback.style.display = "none"; // Ocultar o alerta de sucesso
            erro.style.display = "block"; // Mostrar o alerta de erro
        });

        btnFechar.addEventListener("click", function () {
            feedback.style.display = "none";
            erro.style.display = "none";
            pergunta.style.display = "block";
        });
    });






</script>