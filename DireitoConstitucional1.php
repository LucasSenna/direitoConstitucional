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

            <div class="col-12" id="sumario">
                <h2 class="font-bold">
                    Sumário <div style="font-size: 15px;">Clique em cada tópico para entender sobre o assunto.</div>
                </h2>

                <ul>
                    <li>
                        <a href="#list-apresentacao" style="color:black">
                            Apresentação
                        </a>
                    </li>
                    <li>
                        <a href="#list-objetivo" style="color:black">
                            Objetivo
                        </a>
                    </li>
                    <li>
                        <a href="#list-constituicao" style="color:black">
                            Constituiação
                        </a>
                    </li>
                    <li>
                        <a href="#list-concepcaoConstitucional" style="color:black">
                            Concepções Constitucionais
                        </a>
                    </li>
                    <li>
                        <a href="#list-constCard" style="color:black">
                            Constituição e Carta Constitucional
                        </a>
                    </li>
                    <li>
                        <a href="#list-caracteristicasConst" style="color:black">
                            Características da Constituição
                        </a>
                    </li>
                    <li>
                        <a href="#list-classificacaoConst" style="color:black">
                            Classificação da Constituição
                        </a>
                    </li>
                    <li>
                        <a href="#list-elementosConst" style="color:black">
                            Elementos da Constituição
                        </a>
                    </li>
                    <li>
                        <a href="#list-aspectosConst" style="color:black">
                            Aspectos da Constituição
                        </a>
                    </li>
                    <li>
                        <a href="#list-evolucaoConst" style="color:black">
                            Evolução Constitucional brasileira
                        </a>
                    </li>
                    <li>
                        <a href="#list-estruturaConst" style="color:black">
                            Estrutura da Constituição Federal de 1988
                        </a>
                    </li>
                    <li>
                        <a href="#referencias" style="color:black">
                            Referências Bibliográficas
                        </a>
                    </li>
                </ul>
            </div>
            <br><br><br><br><br><br><br><br>
            <div class="page-title">
                <h2 class="font-bold tituloAzul" id="list-apresentacao">
                    Apresentação
                </h2>
                <hr class="hr4">
                <div>
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h2 class="text-center">Direito Constitucional Administrativo</h2>
                        </div>
                    </div>
                </div>
                <h2 class="font-bold Azul" id="list-objetivo">
                    Objetivo
                </h2>
                <hr class="hr4">

                <p class="Texto">
                    Apresentar uma sumária conceituação de Constituição, suas concepções, características e classificações, bem como apontar a evolução histórica das Constituições brasileiras e demonstrar a estrutura da atual Carta Magna Vigente em nosso país.
                </p>
                <hr>
            </div> <!-- CLASS PAGE TITLE FIM -->

            <p class="Texto"><strong>Aula 02 – Direito Constitucional Administrativo</strong>

            <div class="aula02">
                <div class="card">
                    <div class="card-body">
                        <p class="Texto Azul"><strong>Curso:</strong> Direito Constitucional Administrativo</p>
                        <p class="Texto Azul"><strong>Autoria:</strong> Diego Luís Sousa Martins</p>
                        <p class="Texto Azul"><strong>Aula:</strong> 01</p>
                    </div>
                </div>

                <h2 class=" Azul" id="list-constituicao">
                    01 - Constituição
                </h2>
                <hr class="hr4">

                <p class="Texto">
                    <strong class="Azul">Objetivo:</strong> Apresentar o estudo da Constituição
                </p>
                <hr class="hrLaranja">

                <p class="Texto">
                    Em sentido amplo, pode-se dizer que todo Estado possui sua Constituição, entendida esta como a criação e organização de elementos essenciais do Estado.
                </p>

                <p class="Texto">
                    São basicamente 4 concepções do termo "Constituição”:
                </p>

                <div class="card" id="list-concepcaoConstitucional">
                    <div class="card-header bg-primary">
                        <h2 style="text-align: center; color: white;">Concepções da Constituição</h2>
                    </div>
                    <div class="card-body bg-info">
                        <div class="container" style="margin-top: 13px;">
                            <div class="row text-light">
                                <div class="col-sm">
                                    <h4 class="card-title">Concepção Sociológica</h4>
                                </div>
                                <div class="col-sm">
                                    <h4 class="card-title"> Concepção Política</h4>
                                    <div class="vl"></div>
                                </div>
                                <div class="col-sm">
                                    <h4 class="card-title">Concepção Jurídica </h4>
                                    <div class="vl"></div>
                                </div>
                                <div class="col-sm">
                                    <h4 class="card-title"> Concepção Cultural </h4>
                                    <div class="vl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-primary">
                    </div>
                </div>

                Clique no link de cada concepção abaixo para saber mais sobre ela:

                <div class="accordion" id="accordionExample">
                    <div class="card ">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <h3>Concepção Sociológica de Constituição</h3>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    “A Constituição é a somatória dos fatores reais do poder dentro de uma sociedade” (Ferdinand Lassale)
                                </div>
                                <p class="Texto">
                                    - Em todo agrupamento de pessoas, existem relações de poder, na sociedade também. O vetor dessas relações na sociedade formaria a Constituição em sentido sociológico;<br>
                                    - São os fundamentos sociológicos (forças sociais) que constituem o poder (análise dos fenômenos à luz de uma análise sociológica);<br>
                                    - Distinção Constituição jurídica (escrita) x Constituição real (efetiva): a Constituição não é uma lei, mas a soma dos fatores reais de poder que emanam da população;<br>
                                    - A Constituição só seria legítima se corresponder à Constituição real, representando o efetivo poder social, caso contrário, caracteriza-se como simples ''folha de papel”;
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h3>Concepção Política de Constituição</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    “A Constituição é o produto de decisão política do titular do poder constituinte” (Carl Schmitt)
                                </div>
                                <p class="Texto">
                                    - A Constituição não é uma lei, nem a soma de fatores socias de poder, mas ‘agora trata-se de decisão política fundamental do povo (corrente decisionista);<br>
                                    - Distinção Constituição x Lei Constitucional: A constituição propriamente dita só se refere à decisão política fundamental; o restante não precisaria estar nela contido;<br>
                                    - A lei emana do governo, mas a decisão política do povo é que define a Constituição (fundamento de validade da constituição na vontade política que antecede);<br>
                                    - A Constituição é um documento de caráter político (recomendação, exortação moral).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h3>Concepção Jurídica de Constituição</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    “A Constituição não se trata de um fator sociológico ou um documento meramente político, trata-se mesmo de lei, documento formal, colocando-se em supremacia às demais leis” (Hans Kelsen)
                                </div>
                                <p class="Texto">
                                    - O fundamento de validade da Constituição encontra-se na própria lei (não se precisa socorrer da sociologia ou da política, apogeu do positivismo jurídico);<br>
                                    - Para Kelsen, a Constituição é uma norma, lei, diferente de Lassale (Constituição é soma dos fatores de poder) e Schmitt (Constituição é decisão política do povo);<br>
                                    - Constituição como lei mais importante do ordenamento jurídico (supremacia formal), com o fundamento de validade em verticalidade hierárquica (pirâmide kelsiana):
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
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <h3>Concepção Culturalista de Constituição</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="alert alert-primary">“A Constituição é o conjunto de normas fundamentais, condicionadas pela Cultura Total, emanadas da vontade existencial da unidade política e reguladoras da estrutura do Estado e do modo de exercício e limites do poder político”
                                </div>
                                <p class="Texto">
                                - Todas as concepções possuem aspectos complementares que conduzem à conclusão de que a Constituição, em toda sua complexidade, possui fundamentos diversos;<br>
                                - Abrangência da Cultura Total, incluindo aspectos econômicos, sociológicos, políticos, jurídicos e filosóficos, entendendo seu conceito em perspectiva unitária;<br>
                                - Ao mesmo tempo em que é resultante da expressão cultural de determinado momento histórico, a Constituição atua também como elemento conformador dessa cultura.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="font-bold Azul" id="list-constCard">
                    02 - Constituição e Carta Constitucional
                </h2>
                <hr class="hr4">

                <p class="Texto">
                    <strong class="Azul">Objetivo:</strong> Apresentação e diferenciação de Constituição e Carta Constitucional
                </p>

                <div class="alert alert-info text-center">
                    <h4>
                        Constituição ou Carta Constitucional?
                    </h4>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm alert alert-info">
                            <h4><u>Constituição é o termo reservado às Constituições Promulgadas:</u><br>
                                Conjunto de normas elaboradas com a participação do povo;</h4>
                        </div>
                        <div class="col-sm text-center">
                            <img src="imagens/diferente.png" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="col-sm alert alert-primary">
                            <h4><u>Carta constitucional:</u><br>
                                Constituições outorgadas, fruto da imposição de uma gente revolucionário.</h4>
                        </div>
                    </div>
                </div><br><br>


                <h2 class="font-bold Azul" id="list-caracteristicasConst">
                    03 - Características da Constituição
                </h2>
                <hr class="hr4">

                <p class="Texto">
                    <strong class="Azul">Objetivo:</strong> Apresentar as características de uma constituição, seja ela promulgada ou outorgada.
                </p>

                <hr class="hrLaranja">

                <div class="text-center">
                    <a href="imagens/figura1.png" data-toggle="lightbox">
                        <img class="img-fluid wow fadeInDown" src="imagens/figura1.png" alt="Alt_da_Imagem">
                    </a>
                </div><br>

                <h2 class="font-bold Azul" id="list-classificacaoConst">
                    04 - Classificação da Constituição
                </h2>
                <hr class="hr4">

                <p class="Texto">
                    <strong class="Azul">Objetivo:</strong> Distribuir objetos em categorias, levando em consideração critérios, com o objetivo de destacar semelhanças, diferenças e ajudar a entender o assunto abordado.
                </p>

                <hr class="hrLaranja">

                <p class="Texto"> Classificação quanto á <strong>FORMA</strong>:</p>

                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Forma</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">                                
                                Constituição Escrita
                            </div>
                            <div class="card-text">
                                A Constituição escrita ou instrumental é aquela que não admite normas fundamentais que não estejam expressamente dispostas como normas jurídicas positivadas.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Não Escrita
                            </div>
                            <div class="card-text">
                                Também chamada costumeira ou consuetudinária, a Constituição não escrita é aquela que se baseia nos usos, costumes, jurisprudência, convenções, textos esparsos reconhecidos pela sociedade como normas fundamentais.
                            </div>
                        </div>
                    </div>

                </div>
                <hr>

                <p class="Texto">
                    Classificação quanto ao objeto (classificação de Leo Van Holthe e André Ramos Tavares):
                </p>

                <div class="container text-center">
                    <div class="row">
                        <div class="col-2 text-center">
                            <div class="alert alert-primary text-center" id="seta" style="margin-top: 30px;">
                                Objeto
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="row">
                                <div class="alert alert-info text-center">
                                    Liberal
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert alert-info text-center">
                                    Social
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto"> Classificação quanto á <strong>ORIGEM</strong>: </p>

                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Origem</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Promulgada
                            </div>
                            <div class="card-text">
                                Chamada também dedemocrática ou popular, é elaborada pelo povo por meio de representantes eleitos.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Outorgada
                            </div>
                            <div class="card-text">
                                Também chamada de imposta, revela-se como imposição de um poder, não há participação popular na sua elaboração.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Cesarista
                            </div>
                            <div class="card-text">
                                Feita pelo governante e submetida à apreciação do povo por referendo. Não há participação popular na elaboração,mas a eficácia fica condicionada à aprovação posterior do povo.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Pactuada
                            </div>
                            <div class="card-text">
                                Também chamada dualista,é aquela fruto do acordo entre duas forças políticas,o poder constituinte deriva de pacto entre mais de um poder ou força política interna.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto"> Classificação quanto quanto a <strong>Extensão ou Modelo ou tamanho</strong> : </p>
                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Extensão</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Sintetica
                            </div>
                            <div class="card-text">
                                A Constituição sintética, também chamada breveouconcisa, concentra-se somente nos temas principais,como os princípios fundamentais e estruturais do Estado.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Analítica
                            </div>
                            <div class="card-text">
                                A Constituição analítica, também chamada longa ou prolixa,examina e regulamenta todas as matérias consideradas relevantes para o funcionamento do ente estatal, descendo a minúcias tratando de vários temas.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">Classificação quanto à <strong>SISTEMÁTICA</strong>:</p>

                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Sistemática</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Principiológica
                            </div>
                            <div class="card-text">
                                Trata-se da Constituição em que predominam os princípios,identificados como normas constitucionais providas dealtograudeabstração, consagradoresdevalores,pelo que é necessária a mediação concretizadora.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Preceitual
                            </div>
                            <div class="card-text">
                                Trata-se da Constituição em que prevalecem as regras,individualizadas como normas constitucionais revestidas de pouco grau de abstração, concretizadora de princípios.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">Classificação quanto à <strong>ELABORAÇÃO</strong>:</p>
                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Elaboração</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Dogmatica
                            </div>
                            <div class="card-text">
                                Também chamadas sistemáticas,consubstanciam os dogmas estruturais em determinado momento histórico,ideologias bem declaradas,fruto de um trabalho constituinte e specífico traduzindo um retrato da realidade em um dado momento.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Historica
                            </div>
                            <div class="card-text">
                                Fruto de uma lenta evolução histórica, paulatinaevolução,continuoprocessodeprodução,condensando aos poucos uma Constituição em uma lenta evolução histórica,reunindo a história e as tradições de umpovo, sendo sempre costumeira.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">Classificação quanto à <strong>ESTABILIDADE</strong>:</p>
                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Estabilidade</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Imutável
                            </div>
                            <div class="card-text">
                                Não admite qualquer alteração, não pode ser modificada,não admite nenhuma emenda constitucional.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Rígida
                            </div>
                            <div class="card-text">
                                É possível a alteração por emenda,mas apenas por processo mais dificultoso que o processo legislativo ordinário.(obs:chamada super-rígida quando previsto um núcleo imutável).
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Semi-rígida
                            </div>
                            <div class="card-text">
                                Possui determinadas normas que exige procedimento mais rigoroso para alteração,e outras normas cujo procedimento de alteração é o mesmo que as demais leis.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Flexível
                            </div>
                            <div class="card-text">
                                O processo de alteração é igual em relação às demais leis.Não há forma qualificada de alteração constitucional.O controle de constitucionalidade pressupõe rigidez.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">Classificação quanto à <strong>FINALIDADE</strong>:</p>
                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Finalidade</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Garantia
                            </div>
                            <div class="card-text">
                                A Constituição garantia (negativa),possui como principal objetivo a fixação dos direitos fundamentais.Funciona como uma carta declaratória, garantindo os direitos,a ideia é apenas impor restrições ao próprio Estado.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Dirigente
                            </div>
                            <div class="card-text">
                                A Constituição dirigente (programática),não apenas estabelece garantias,mas prevê meios de atuação do Poder Público para efetivá-las.Além de fixar direitos e garantias fundamentais, fixa metas estatais, uma direção(dirigente).
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">Classificação quanto ao <strong>Critério Ontológico (Carl Loewenntein)</strong>:</p>
                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Critério Ontológico </h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Critério Semântica
                            </div>
                            <div class="card-text">
                                Usada pelos detentores do poder como objetivo de nele se perpetuar. Não traz verdadeiras normas delimitação de poder,sendo instrumento das políticas de poder ditatoria.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Nominal
                            </div>
                            <div class="card-text">
                                Apesar de legítima, trazendo verdadeiramente normas constitucionais, carece de força normativa para alterar a realidade, falta-lheefetividade, reflete mais o plano do ideal.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Normativa
                            </div>
                            <div class="card-text">
                                As normas constitucionais efetivamente dominam o processo político, possuem validade, legitimidade e efetividade,tem força normativa, conseguem conformar o processo de poder.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">Classificação quanto ao <strong>Momento (classificação de Nagib Slaibi Filho)</strong>:</p>
                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Momento</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Definitiva
                            </div>
                            <div class="card-text">
                                É a que se estabelece em uma fase de consolidação;
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição de Transição
                            </div>
                            <div class="card-text">
                                É a que se estabelece em uma fase de maturação do processo político.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">Classificação quanto à <strong>Existência (classificação de Nagib Slaibi Filho)</strong>:</p>
                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Existência</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Real ou efetiva
                            </div>
                            <div class="card-text">
                                É a que trata das relações de poder existentes na sociedade.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Ideal
                            </div>
                            <div class="card-text">
                                É a que trata das relações de poder pretendidas pela sociedade.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <h2 class="font-bold Azul" id="list-elementosConst">
                    05– Elementos das Constituições
                </h2>
                <hr class="hr4">
                <p class="Texto">
                    <strong class="Azul">Objetivo:</strong> Demonstrar os elementos das constituições.
                </p>
                <hr class="hrLaranja">

                <p class="Texto">
                    <u>Elementos das Constituições</u> não obstante a Constituição seja um todo orgânico, suas normas estão agrupadas em elementos com conteúdo e finalidade diversos:
                </p>

                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Elementos</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Elementos Orgânicos
                            </div>
                            <div class="card-text">
                                Normas que regulam a estrutura do Estado e aorganização do Poder.
                            </div>
                            <hr>
                            <div class="card-title">
                                Elementos Limitativos
                            </div>
                            <div class="card-text">
                                Normas que compõem os direitos e garantias fundamentais e limitam o Estado.
                            </div>
                            <hr>
                            <div class="card-title">
                                Elementos Socioideológicos
                            </div>
                            <div class="card-text">
                                Normas que revelam a política social e a intervenção do Estado na sociedade.
                            </div>
                            <hr>
                            <div class="card-title">
                                Elementos de Estabilização Constitucional
                            </div>
                            <div class="card-text">
                                Normas destinadas a assegurar a defesa da Constituição e do Estado.
                            </div>
                            <hr>
                            <div class="card-title">
                                Elementos Formais de Aplicabilidade
                            </div>
                            <div class="card-text">
                                Normas que estabelecem as regras de aplicação da Constituição.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <h2 class="font-bold Azul" id="list-aspectosConst">
                    06– Aspectos da Constituição
                </h2>
                <hr class="hr4">
                <p class="Texto">
                    <strong class="Azul">Objetivo:</strong> Apontar os aspectos Foram e Material das Cosntituições.
                </p>
                <hr class="hrLaranja">

                <div class="card-deck">
                    <div class="card mb-3" id="CardBorda">
                        <div class="card-header text-center" id="CardTexto">
                            <h3>Aspectos da Constituição</h3>
                        </div>
                        <div class="card-body" id="CardTexto">
                            <div class="card-title">
                                Constituição Real ou efetiva
                            </div>
                            <div class="card-text">
                                É a que trata das relações de poder existentes na sociedade.
                            </div>
                            <hr>
                            <div class="card-title">
                                Constituição Ideal
                            </div>
                            <div class="card-text">
                                É a que trata das relações de poder pretendidas pela sociedade.
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <h2 class="font-bold Azul" id="list-evolucaoConst">
                    07– Evolução Constitucional Brasileira
                </h2>
                <hr class="hr4">
                <p class="Texto">
                    <strong class="Azul">Objetivo:</strong> Exibir as constituições brasileiras e suas características desde 1824 até a Constituição cidadão de 1988.
                </p>

                <div class="text-center">
                    <hr class="hrLaranja">
                    <img src="imagens/Figura2.png" class="img-fluid wow fadeInLeft" alt="Responsive image">
                </div>

                Clique no link de cada contituição brasileira abaixo para saber suas características:

                <div class="accordion" id="accordionExample">
                    <div class="card ">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <h3>Características da Constituição de 1824</h3>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    - Foi marcada por forte centralismo administrativo e unitarismo político (regime absolutista, constituição outorgada, vontade da majestade imperial);<br>
                                    - Governo: monárquico, hereditário, constitucional e representativo. Tratava-se de forma unitária de Estado, com nítida centralização político-administrativa;<br>
                                    -Território brasileiro dividido em províncias, com presidentes nomeados pelo Imperador e exoneráveis ad nutum (conveniência e oportunidade do imperador);<br>
                                    - O catolicismo era a religião oficial do Estado (confessional);<br>
                                    - Os Poderes Políticos reconhecidos pela Constituição do Império do Brasil são quatro: Legislativo, Executivo, Judiciário, além do chamado Poder Moderador;<br>
                                    - Sufrágio censitário, baseando-se em condições econômico-financeiras de seus titulares (para votar e ser votado).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <h3>Características da Constituição de 1891</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <p class="Texto">
                                - Primeira Constituição Republicana (eletividade e temporariedade), surgiu com um golpe militar em 15/11/1889, banimento da família imperial do território nacional;<br>
                                - Sistema de governo presidencialista e forma de Estado federal, abandonando o unitarismo, além da forma de governo republicana em substituição à monárquica;<br>
                                - União perpétua e indissolúvel das antigas Províncias, transformando-as em Estados Unidos do Brasil e vedando, assim, a possibilidade de secessão;<br>
                                - O catolicismo deixou de ser religião oficial. O Brasil constitucionaliza-se como um país leigo, laico ou não confessional;<br>
                                - Poder Moderador passa a ser extinto, adotando-se a teoria clássica de tripartição de Poderes: Legislativo, Executivo e Judiciário, harmônicos e independentes entre si;<br>
                                - Sufrágio passa a ser exercido de forma direta e aberta (voto de cabresto).
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <h3>Características da Constituição de 1934</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto" style="text-align:justify">
                                    -Surgimento de novas classes sociais decorrentes do processo de urbanização e industrialização: o proletariado ou operariado;<br>
                                    - Constituição que evidencia os direitos humanos de segunda dimensão e a perspectiva de um Estado social de direito (democracia social);<br>
                                    - Mantidos alguns princípios fundamentais, como a República, a Federação, a tripartição de Poderes, o presidencialismo e o regime representativo;<br>
                                    - Constitucionaliza-se o voto feminino, com valor igual ao masculino, além da constitucionalização do voto secreto;<br>
                                    - Constitucionalização de vários direitos sociais (décimo terceiro salário, licença-maternidade, jornada diária de 8h, aposentadoria, etc..).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <h3>Características da Constituição de 1937</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    - O Brasil luta na segunda guerra mundial ao lado de nações aliadas, contra o nazismo e o fascismo, sendo um contrassenso a conservação no Brasil de um regime político semelhante aos que haviam sido derrubados na Europa;<br>
                                    - Fim do Estado Novo e expulsão de Vargas do poder pelas Forças Armadas;<br>
                                    - Momento da chamada redemocratização do país, sendo instalada Assembleia Constituinte repudiando-se o Estado totalitário que até então vigorava desde 1930;<br>
                                    - Inspirou-se nas ideias liberais da Constituição de 1891 e nas ideias sociais da de 1934, além de harmonizar o princípio da livre-iniciativa com o da justiça social;<br>
                                    - Restauração do sistema de separação de poderes;<br>
                                    - Retomado o regime democrático
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <h3>Características da Constituição de 1946</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    - O Brasil luta na segunda guerra mundial ao lado de nações aliadas, contra o nazismo e o fascismo, sendo um contrassenso a conservação no Brasil de um regime político semelhante aos que haviam sido derrubados na Europa;<br>
                                    - Fim do Estado Novo e expulsão de Vargas do poder pelas Forças Armadas;<br>
                                    - Momento da chamada redemocratização do país, sendo instalada Assembleia Constituinte repudiando-se o Estado totalitário que até então vigorava desde 1930;<br>
                                    - Inspirou-se nas ideias liberais da Constituição de 1891 e nas ideias sociais da de 1934, além de harmonizar o princípio da livre-iniciativa com o da justiça social;<br>
                                    - Restauração do sistema de separação de poderes;<br>
                                    - Retomado o regime democrático.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <h3>Características da Constituição de 1967</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <p class="Texto">
                                - A Constituição de 1946 foi superada pelo Golpe Militar de 1964. Apesar de continuar existindo formalmente, o País era governado pelos Atos Institucionais;<br>
                                - Nova suspeita de investida comunista, instalava-se nova ordem revolucionária;<br>
                                - Junta Militar assume o poder e determina a suspensão dos direitos individuais, dos direitos políticos, extinção de partidos políticos e a exclusão de apreciação judicial;<br>
                                - Constituição outorgada, haja vista que o Congresso Nacional não mais possuía legitimidade política para a representação da vontade popular;<br>
                                - Forte preocupação com a segurança nacional e centralização do poder; - AI-5, de 13.12.1968: o mais violento ato baixado pela ditadura, perdurando até a sua revogação pela EC n. 11, de 17.10.1978.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <h3>Características da Constituição de 1969</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <p class="Texto">
                                - A Constituição de 1967 foi amplamente modificada pela emenda Constitucional 01 em 1969, a ponto de ser considerada verdadeiramente uma nova Constituição;<br>
                                - Consagra-se no Brasil um governo de "Juntas Militares'', sendo a EC n. 01/69 um Ato baixado pelos Militares, já que o Congresso Nacional estava fechado;<br>
                                - Dado o seu caráter revolucionário, podemos considerar a EC n. 1/69 como a manifestação de um novo poder constituinte originário, outorgando uma nova Carta, que "constitucionalizava" a utilização dos Atos Institucionais;<br>
                                - O País experimenta o denominado "milagre econômico “, que trouxe uma pequena ilusão de pontos positivos ao novo regime (extremamente duro e autoritário); - Período em que se instaura revolução popular com o movimento "Diretas Já".
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    <h3>Características da Constituição de 1988</h3>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <p class="Texto">
                                - Considerada a Constituição Cidadã, tendo em vista a ampla participação popular durante a sua elaboração e a constante busca de efetivação da cidadania;<br>
                                - Solidificação da transição entre o antigo regime e a "Nova República";<br>
                                - Primeiro plebiscito no Brasil, com a população mantendo a república constitucional e do sistema presidencialista de governo;<br>
                                -Valores supremos de uma sociedade fraterna, pluralista, fundada na harmonia social e comprometida com os ideais republicanos e democráticos;<br>
                                - Princípios democráticos e defesa dos direitos individuais e coletivos dos cidadãos consolidados no texto, consagrando direitos fundamentais de maneira inédita.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="font-bold Azul" id="list-estruturaConst">
                    08– Estrutura da Constituição Federal de 1988
                </h2>
                <hr class="hr4">
                <p class="Texto">
                    <strong class="Azul">Objetivo:</strong> Apresentar a estruturação da Constituição vigente.
                </p>
                <hr class="hrLaranja">

                <p class="Texto">Analisar a estrutura da Constituição significa analisar suas partes componentes:</p>

                <div class="text-center">
                    <img src="imagens/Figura3.png" class="img-fluid wow fadeInLeft" alt="Responsive image">
                </div><br>

                <div class="accordion" id="accordionExample">
                    <div class="card ">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseUm" aria-expanded="false" aria-controls="collapseUm">
                                    <h3>Preâmbulo Constitucional</h3>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseUm" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                <h4>Tese Adotada no Brasil (entendimento STF):</h4>
                                </p>
                                <div class="alert alert-primary">
                                    “O preâmbulo não se situa no âmbito do Direito, mas no domínio da política, refletindo posição ideológica do constituinte. Não contém o preâmbulo, portanto, relevância jurídica. O preâmbulo não constitui norma central da Constituição, de reprodução obrigatória na Constituição do Estado-membro. O que acontece é que o preâmbulo contém, de regra, proclamação ou exortação no sentido dos princípios inscritos na Carta. Esses princípios sim, inscritos na Constituição, constituem normas centrais de reprodução obrigatória.”
                                </div>
                                <blockquote class="blockquote text-right">
                                    <small>(ADI 2.076, Rel. Min. Carlos Velloso, DJ 08-08-2003)</small>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card ">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseDois" aria-expanded="false" aria-controls="collapseDois">
                                    <h3>Texto Constitucional (Art. 1º ao Art. 250)</h3>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseDois" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    “São as normas constitucionais propriamente ditas, agrupados em títulos, divididos em capítulos. Cada capítulo pode ser subdividido em seções e subseções.”
                                </div>
                                <p class="Texto">
                                    OBS: Cada artigo é formado por um caput (cabeça do artigo), podendo ter incisos (algarismos romanos), alínea (letra minúscula do alfabeto) e parágrafos. O corpo da Constituição é chamado de parte fixa ou permanente.<br>
                                    Alguns doutrinadores dividem o corpo da Constituição em duas partes:
                                </p>
                                <div class="text-center">
                                    <img src="imagens/Figura4.png" class="img-fluid wow fadeInDown" alt="Responsive image">
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card ">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-info btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                                    <h3>Ato das Disposições Constitucionais Transitórias (Art. 1º ao Art. 100)</h3>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTres" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="alert alert-primary">
                                    “Quando o Poder Constituinte Originário dá início a uma nova conformação jurídica da comunidade, por vezes se defronta com situações que se alongaram no tempo e que motivaram expectativas de permanência estimadas justas. Para não frustrá-las, o constituinte originário muitas vezes opta por mantê-las, em certos limites, dispondo um regime jurídico único transitório para casos específicos”
                                    <blockquote class="blockquote text-right">
                                        <small>
                                            Gilmar Mendes
                                        </small>
                                    </blockquote>
                                </div>
                                <p class="Texto">
                                    OBS: A finalidade do ADCT é estabelecer regras de transição entre o antigo ordenamento jurídico e o novo, instituído pela manifestação do poder constituinte originário, providenciando a acomodação e a transição do antigo e do novo direito edificado.<br>
                                    O ADCT possui duas funções:
                                </p>
                                <div class="text-center">
                                    <img src="imagens/Figura5.png" class="img-fluid wow fadeInUp alt="Responsive image">
                                </div><br>
                                <p class="Texto">
                                    O ADCT é formado por dois tipos de normas:
                                </p>
                                <div class="text-center">
                                    <img src="imagens/Figura8.png" class="img-fluid wow fadeInDown" alt="Responsive image">
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div id="TeoriaDoBlocoDeConstitucionalidade">
                    <ul>
                        <li style="color: #286ce6">
                            <h4><strong>Teoria do Bloco de Constitucionalidade</strong></h4>
                        </li>
                    </ul>
                    <div class="text-center">
                        <img src="imagens/Figura7.png" class="img-fluid wow fadeInUp" alt="Responsive image">
                    </div><br>
                    <p class="Texto">
                        Teoria do Bloco de Constitucionalidade (criada pelo francês Louis Favoreu)<br>
                        Compreende a totalidade das normas constitucionais, expressas ou implícitas, constantes da Constituição formal. Logo, a Constituição não se resume ao seu texto fechado, mas é possível haver também normas formalmente constitucionais que não estão contidas expressamente nela, formando o chamado Bloco de Constitucionalidade.
                    </p>
                </div>
                <hr>

                <div id="PrincipiosConstitucionaisFundamentais">
                    <ul>
                        <li style="color: #286ce6">
                            <h4><strong>Princípios Constitucionais Fundamentais</strong></h4>
                        </li>
                    </ul>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="jumbotron">
                                    <div class="container font-size:1.5rem">
                                        <p class="font-bold text-center">
                                            PRINCÍPIOS ESTRUTURANTES
                                        </p>
                                        <p>
                                            CF, Art. 1º A República Federativa do Brasil,formada pela união indissolúvel dos Estados e Municípios e do Distrito Federal,constitui-se em Estado Democrático de Direito(...): Parágrafo único. Todo poder emana do povo,que o exerce por meio de representantes eleitos ou diretamente, nos termos desta Constituição.
                                        </p><br>
                                        <p>
                                            CF, Art. 2º. São poderes da União,independentes e harmônicos entre si, o Legislativo,o Executivo e o Judiciário.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <p class="font-bold text-center">
                                            FUNDAMENTOS DA REPÚBLICA
                                        </p>
                                        <p>
                                            CF, Art. 1º A República Federativa do Brasil,formada pela união indissolúvel dos Estados e Municípios e do Distrito Federal, constitui-se em Estado Democrático de Direito e tem como Fundamentos:
                                        <ol type="I">
                                            <li>A soberania;</li>
                                            <li>A cidadania;</li>
                                            <li>A dignidade da pessoa humana;</li>
                                            <li>Os valores sociais do trabalho e a livre iniciativa;</li>
                                            <li>O pluralismo políticoX- concessão de asilo político.</li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <p class="font-bold text-center">
                                            OBJETIVOS DA REPÚBLICA
                                        </p>
                                        <p>
                                            Constituem objetivos fundamentais da República Federativa do Brasil:
                                        <ol type="I">
                                            <li>Construir uma sociedade livre, justa e solidária;</li>
                                            <li>Garantir o desenvolvimento nacional;</li>
                                            <li>Erradicar a pobreza e a marginalização e reduzir desigualdades sociais e regionais;</li>
                                            <li>Promover o bem de todos, sem preconceitos de origem, raça,sexo,cor, idade e quaisquer outras formas de discriminação</li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <p class="font-bold text-center">
                                            PRINCÍPIOS DAS RELAÇÕES INTERNACIONAIS
                                        </p>
                                        <p>
                                            CF, Art. 4º: A República Federativa do Brasil rege-se nas suas relações internacionais pelos seguintes princípios:
                                        <ol type="I">
                                            <li>Independência nacional;</li>
                                            <li>Prevalência dos direitos humanos;</li>
                                            <li>Auto determinação dos povos;</li>
                                            <li>Não intervenção;</li>
                                            <li>Igualdade entre os estados;</li>
                                            <li>Defesa da paz;</li>
                                            <li>Solução pacifica dos conflitos;</li>
                                            <li>Repúdio ao terrorismo e ao racismo</li>
                                            <li>Cooperação entre os povos para o progresso da humanidade;</li>
                                            <li>Concessão de asilo político.</li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div id="SupremaciaConstitucional">
                    <ul>
                        <li style="color: #286ce6">
                            <h4><strong>Supremacia Constitucional ou Superlegalidade ou Princípio da Constitucionalidade das leis</strong></h4>
                        </li>
                    </ul>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col">
                                <p class="Texto">
                                    A ordem jurídica brasileira é uma construção escalonada de diferentes níveis de normas jurídicas, ou seja, existem normas jurídicas superiores e inferiores.<br>
                                    A supremacia constitucional é o princípio implícito na Constituição.<br>
                                    Existem duas espécies de supremacia constitucional:
                                </p>
                                <div class="text-center">
                                    <img src="imagens/Figura9.png" class="img-fluid wow fadeIn" alt="Responsive image">
                                </div><br>
                                <p class="Texto">
                                    A adoção do referido Princípio gera os seguintes efeitos:
                                </p>
                                <div class="text-center">
                                    <img src="imagens/Figura10.png" class="img-fluid wow fadeIn" alt="Responsive image">
                                </div><br>
                                <p class="Texto">
                                    Em matéria de supremacia Constitucional, é importante mencionar a teoria do escalonamento normativo. Para ser válida, necessita buscar seus fundamentos de validade em norma superior. A representação gráfica da ordem jurídica é a de uma estrutura piramidal. Vejamos:
                                </p>
                                <div class="text-center">
                                    <img src="imagens/Figura11.png" class="img-fluid wow fadeInUp" alt="Responsive image">
                                </div><br>
                                <p class="Texto">
                                    Cada norma extrai seu fundamento de validade de outra norma superior e a CF dá fundamento de validade para todas as demais normas da ordem jurídica.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>


                <h3 class="font-bold" id="referencias">Referências</h3><br>

                <ul class="left" style="list-style: none;">
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        Constituição da República Federativa do Brasil, de 05.10.1988. Brasília, 1988. Disponível em: <a href="https://www.planalto.gov.br/ccivil_03/Constituicao" target="_blank">Clique aqui nesse Link</a>.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book CorLaranja" aria-hidden="true"></i>
                        BONAVIDES, Paulo. Curso de direito constitucional. 11. ed. São Paulo: Malheiros, 2000.
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        KELSEN, Hans. Teoria Pura do Direito. 6ª ed. São Paulo: Martins Fontes, 1998.
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        LASSALE, Ferdinand. A essência da constituição. Lumen Júris, 2001.
                    </li>

                </ul>


            </div>
            <!-- </div> CLASS AULA 02 FIM -->


            <br><br>

            <div class="text-center">
                <a href="DireitoConstitucional2.php" type="button" class="btn btn-outline-success btn-sm">Direito Constitucional Administrativo 2</a>
            </div>

            <!-- Btn back to top (index.js) -->
            <div class="botao_btt invisivel">
                <i class="fas fa-angle-double-up"></i>
            </div>

            <!-- SCRIPT LIGHTBOX -->
            <script>
                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
                });

                $(function() {
                    $('[data-toggle="popover"]').popover()
                })

                $('.popover-dismiss').popover({
                    trigger: 'focus'
                })
            </script>


        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->

    <?php include('layout/js.php') ?>

</body>

</html>