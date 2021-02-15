<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <div class="page-title">
                <hr>
                <!-- Título -->
                <h2 class="font-bold">Titulo</h2>
                <hr>
                <!-- Sub Título -->
                <p class="SubTitulo">Sub_Titulo</p>
                <hr>
                <!-- Sub Sub Título -->
                <p class="SubSubTitulo">Sub_Sub_Titulo</p>
                <hr>
                <!-- Texto -->
                <p class="Texto">Texto</p>
                <hr>
                <!-- Importante -->
                <div>
                    <p class="ImportanteTitulo"> Importante</p>
                    <p class="ImportanteTexto">Texto_do_Importante</p>
                </div>
                <hr>
                <!-- Titulo Figura -->
                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 1:</strong> Titulo_da_Figura</p>
                    <a href="imagens/Figura01.png" data-toggle="lightbox" data-footer="Texto_Imagem_Modal">
                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt_da_Imagem">
                    </a>
                    <p class="FonteFigura">Legenda_da_Imagem</p>
                </div>
                <hr>
                <!-- Fique Atento -->
                <div>
                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                    <p class="FiqueAtentoTexto">Texto_do_Fique_Atento</p>
                </div>
                <hr>
                <!-- Curiosidade -->
                <div>
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Texto_do_Curiosidade</p>
                </div>
                <hr>
                <!-- Nota de Rodapé -->
                <p class="NotaDeRodape"> Nota_de_Rodapé_fica_aqui</p>
                <hr>
                <!-- Atividade -->
                <div>
                    <p class="AtividadeTitulo"> <br>Atividade</p>
                    <p class="AtividadeTexto">Texto_do_Atividade</p>
                </div>
                <hr>
                <!-- Saiba Mais -->
                <div>
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Texto_do_Saiba Mais</p>
                </div>

                <!-- Caixa ligaa duas caixas -->
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="alert alert-primary" id="seta" style="margin-top: 30px;">
                                Consepção Jurídica
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="row">
                                <div class="alert alert-info">
                                    Sentido Jurídico-Positivo: norma positiva suprema
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert alert-info">
                                    Sentido Lógico-Jurídico: norma hipotética fundamental
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sistemas de cards -->
                <div class="card-deck">
                    <div class="card border-info mb-3">
                        <div class="card-header text-info text-center">
                            <h3>Forma</h3>
                        </div>
                        <div class="card-body text-info">
                            <div class="card-title">
                                Constituição Escrita
                            </div>
                            <div class="card-text">
                                A Constituição escrita ou instrumental é aquela que não admite normas fundamentais que não estejam expressamente dispostas como normas jurídicas positivadas.
                            </div>
                        </div>
                    </div>
                    <div class="card border-info mb-3">
                        <div class="card-header text-info text-center">
                            <h3>Forma</h3>
                        </div>
                        <div class="card-body text-info">
                            <div class="card-title">
                                Constituição Não Escrita
                            </div>
                            <div class="card-text">
                                Também chamada costumeira ou consuetudinária, a Constituição não escrita é aquela que se baseia nos usos, costumes, jurisprudência, convenções, textos esparsos reconhecidos pela sociedade como normas fundamentais.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>