<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>
<?php
$page = 'Topico01';
include('layout/header.php');
?>

<html>
<meta charset="utf-8">
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<body>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <!--INÍCIO CONTEUDO PARTE 01-->
        <section id="pt01">
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <!-- LINHA pt01 -->
                        <div class="col-md-1"></div>
                        <div class="col-md-10">

                            <!-- INICIO CONTEUDO -->

                            <!-- Título -->
                            <h2 class="Titulo">Como Identificar as Necessidades de Aquisição da Administração Pública</h2>
                            <hr>
                            <div class="bd-callout bd-callout-warning">
                                <p><strong>Objetivo:</strong> Orientar como identificar as necessidades de aquisição da Administração Pública e discutir a importância de estudar o edital para o sucesso na licitação.</p>
                            </div>
                            <p>Geralmente, os órgãos públicos compram bens e contratam serviços que estão previamente registrados em um catálogo, no qual constam as especificações, unidades de fornecimento e demais características dos itens que irão compor os editais de licitação.</p>
                            <p>O catálogo de itens é utilizado para classificação e catalogação de bens, materiais e serviços nos padrões de qualidade e de desempenho exigidos pela Administração Pública, permitindo a uniformidade e a padronização das especificações. Dessa forma, é importante que o empreendedor acesse os catálogos disponibilizados pelos governos federal, estaduais e municipais, de modo a conhecer as especificações dos itens e se preparar para as licitações, conforme o seu interesse.</p>
                            <p>No caso do Governo do Estado do Ceará, a Secretaria do Planejamento e Gestão (SEPLAG) disponibiliza o catálogo dos bens, materiais e serviços por meio do Portal de Compras, no endereço: <a href="http://s2gpr.sefaz.ce.gov.br/catalogo-web/paginas/catalogo/ItemMaterialServicoListCompleto.seam" target="_blanc"> https://s2gpr.sefaz.ce.gov.br/catalogo-web/paginas/catalogo/ItemMaterialServicoListCompleto.seam</a>
                            </p>

                            <p>Na figura abaixo, observa-se a tela de consulta aos itens do catálogo do Governo do Estado:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft"><strong>Figura 01:</strong> Catálago de material</p>

                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" data-wow-delay="0.5s" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                            <p>Conforme observado na figura, é possível consultar o histórico de aquisição de todos os itens do catálogo do Estado, clicando nos links da coluna “ADJUDICADO DESDE”. Dessa forma, o empreendedor poderá conhecer os compradores, os vendedores, os preços, as quantidades, as marcas e as demais informações do processo de aquisição, permitindo uma avaliação com maior segurança quanto a viabilidade de participar das próximas contratações públicas.</p>

                            <p>Na figura abaixo, observa-se a tela de consulta aos itens adjudicados (comprados) pelos órgãos e entidades do Governo do Estado:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft"><strong>Figura 02:</strong> Banco de itens adjudicados</p>

                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura02.png" data-wow-delay="0.5s" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>Fácil, né? Para melhorar ainda mais o aprendizado, clique no link abaixo e veja o vídeo de como consultar o catálogo de itens e os preços adjudicados no Governo do Estado do Ceará:</p>

                                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rMMXtJeG684?rel=0" allowfullscreen=""></iframe>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <p>No ambito do Governo Federal, o Ministério da Economia disponibiliza no Portal Comprasgovernamentais o seu catálogo de bens, materiais e serviços, que pode ser acessado no endereço:
                            </p>

                            
                            <div class="alert alert-success">
                                <p class="text-center"><a href="http://siasgnet-consultas.siasgnet.estaleiro.serpro.gov.br/siasgnet-catalogo/#." target="_blank" rel="noopener noreferrer"><span style="color: black;">https://siasgnet-consultas.siasgnet.estaleiro.serpro.gov.br/siasgnet-catalogo/#.</span></a></p>
                            </div>
                        
                            
                            <p>Na figura abaixo, observa-se a tela de consulta aos itens do catálogo de materiais e serviços do Governo Federal:
                            </p>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft"><strong>Figura 03:</strong> Catálogo de materiais e serviços do Governo Federal</p>

                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura03.png" data-wow-delay="0.5s" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <!-- Sub Título -->
                            <p class="SubTitulo">O Plano Anual de Compras da Administração Pública</p>
                            <hr>
                            <p>Outra ferramenta muito importante para a execução dos processos de compras governamentais é o Plano Anual de Compras, elaborado a partir do planejamento de compra dos órgãos e entidades da Administração Pública, cujo objetivo é identificar as estimativas de aquisição de bens, materiais e serviços, com vista a definir e coordenar estratégias que assegurem maior eficiência na gestão dos gastos.</p>
                            <p>Nesse sentido, os pequenos negócios podem e devem utilizar essa ferramenta para tomar conhecimento das necessidades de aquisição de bens e serviços pelos órgãos compradores e se prepararem para participar das contratações públicas, inclusive realizando adequações necessárias nos seus processos internos.</p>
                            <p>No caso do Governo do Estado do Ceará, cabe à SEPLAG coordenar o planejamento anual de compras, que em 2021 envolveu mais de 800 unidades contratantes e quase 12 mil itens planejados, entre bens e serviços. Ao final do planejamento anual, as estimativas de aquisição são consolidadas e é elaborado o Plano Anual de Compras, disponível para consulta no Portal de Compras do Estado:</p>

                            <div class="alert alert-success">
                                <p class="text-center"><a href="https://www.portalcompras.ce.gov.br/compras/menu-planejamento-de-compras" target="_blank" rel="noopener noreferrer"><span style="color: black;">https://www.portalcompras.ce.gov.br/compras/menu-planejamento-de-compras</span></a></p>
                            </div>

                            <p>Na figura abaixo, observa-se a tela de consulta ao Plano Anual de Compras do Governo do Estado do Ceará:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft"><strong>Figura 04:</strong> Plano Anual de Compras do Governo do Estado do Ceará</p>

                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura04.png" data-wow-delay="0.5s" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <p>Note que é possível pesquisar por diversos filtros: unidade contratante, região e município do comprador, grupo e classe do material/serviço e código e descrição do item.</p>
                            <p>No Âmbito do município de Fortaleza, a Secretaria do Planejamento Orçamento e Gestão (SEPOG) também disponibiliza o Plano Anual de Compras por meio portal “e-compras”, no endereço:</p>

                            <div class="alert alert-success">
                                <p class="text-center"><a href="https://compras.sepog.fortaleza.ce.gov.br/publico/painel.asp" target="_blank" rel="noopener noreferrer"><span style="color: black;">https://compras.sepog.fortaleza.ce.gov.br/publico/painel.asp</span></a></p>
                            </div>

                            <br><p>Na figura abaixo, observa-se a página do Plano Anual de Compras da Prefeitura de Fortaleza:
                            </p>
                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft"><strong>Figura 05:</strong> Plano Anual de Compras da Prefeitura de Fortaleza</p>

                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura05.png" data-wow-delay="0.5s" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <!-- Sub Título -->
                            <p class="SubTitulo">Tomando Conhecimento dos Editais e Convites Publicados Pelos Órgãos Compradores</p>
                            <hr>
                            <p>Os editais e cartas-convite são instrumentos de convocação (ou chamamento) dos interessados em participar das licitações. Tais instrumentos estabelecem as regras do processo de licitação a serem cumpridas tanto pelo licitante quanto pelo órgão público.</p>
                            <p>O empreendedor deve acompanhar sistematicamente a publicação dos editais, os quais são publicados na imprensa oficial, nos jornais e, na maioria dos casos, na internet. A Lei nº 8.666/93 permite a publicação dos convites apenas em quadros de aviso dos órgãos compradores.</p>
                            <p>No âmbito do Estado do Ceará, o Governo disponibiliza os editais, cartas-convite e demais instrumentos convocatórios de todos os órgãos e entidades no seu Portal de Compras, além dos meios estabelecidos na legislação. O endereço eletrônico para consulta das publicações no Portal de Compras do Estado é:</p>

                            <div class="alert alert-success">
                                <p class="text-center"><a href="https://www.portalcompras.ce.gov.br/compras/menu-licitacoes-licitaweb" target="_blank" rel="noopener noreferrer"><span style="color: black;">https://www.portalcompras.ce.gov.br/compras/menu-licitacoes-licitaweb</span></a></p>
                            </div>

                            <br><p>Na figura abaixo, observa-se a tela de consulta aos editais dos órgãos e entidades do Governo do Estado do Ceará:</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft"><strong>Figura 06:</strong> Consulta aos editais dos órgãos e entidades do Governo do Estado do Ceará</p>

                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura06.png" data-wow-delay="0.5s" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <p>Por outro lado, se o empreendedor se interessar em vender para municípios, deve se informar sobre os meios de publicação dos editais e convites das licitações realizadas pelos órgãos do ente municipal. Uma boa dica é visitar os sítios dos municípios na internet.</p>
                            <p>No caso do Município de Fortaleza, conforme apresentado na figura abaixo, a consulta aos editais dos órgãos e entidades compradores pode ser realizada por meio o portal e-compras, no endereço:</p>

                            <div class="alert alert-success">
                                <p class="text-center"><a href="https://compras.sepog.fortaleza.ce.gov.br/publico/licitacoes.asp?tipo=Toda" target="_blank" rel="noopener noreferrer"><span style="color: black;">https://compras.sepog.fortaleza.ce.gov.br/publico/licitacoes.asp?tipo=Toda</span></a></p>
                            </div>

                            <br><p>Na figura abaixo, observa-se a página de consulta aos editais dos órgãos e entidades da prefeitura de Fortaleza:
                            </p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft"><strong>Figura 07:</strong> Consulta aos editais dos órgãos e entidades da prefeitura de Fortaleza</p>

                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura07.png" data-wow-delay="0.5s" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <div class="ImportanteTexto">
                                    <p><strong>Por que é importante ler o edital?</strong> 

                                    <br>A leitura prévia do edital é indispensável para quem quer vender para órgãos públicos, pois, como dissemos, neste instrumento constam as regras, prazos e demais condições do fornecimento do produto ou prestação do serviço.</p>
                                    <p>Ao ler o edital, o empreendedor poderá, se for o caso, solicitar esclarecimentos ao presidente da comissão ou pregoeiro; ou, ainda, requerer a impugnação daquele instrumento, se constatar descumprimento da legislação pertinente. Em ambos os casos, o próprio edital prevê prazos para a manifestação do interessado e para as providências do órgão licitante.</p>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12"><br />
                                <ul class="list-group">
                                    <li class="list-group-item bg-success font-weight-bold text-white text-center" style="font-size: 1.5em;"><strong>Fique atento para as informações que você encontrará no edital!</strong></li>
                                    <li class="list-group-item">Qual é o órgão comprador (licitante);</li>
                                    <li class="list-group-item">Qual a modalidade/forma de licitação (dispensa, convite, pregão etc.);</li>
                                    <li class="list-group-item">Qual o regime de contratação (fornecimento integral ou parcelado, obra ou serviço por preço global ou unitário, empreitada integral ou por tarefa);</li>
                                    <li class="list-group-item">Qual é o bem ou material a ser fornecido ou o serviço a ser contratado;</li>
                                    <li class="list-group-item">Qual o local, a data e hora da licitação;</li>
                                    <li class="list-group-item">Quais as condições de participação (se há previsão de tratamento diferenciado e favorecido às MPEs);</li>
                                    <li class="list-group-item">Quais os documentos a serem exigidos;</li>
                                    <li class="list-group-item">Qual a forma de apresentação da proposta comercial;</li>
                                    <li class="list-group-item">Quais os prazos para esclarecimentos, impugnações e recursos;</li>
                                    <li class="list-group-item">Qual o prazo para assinatura do contrato;</li>
                                    <li class="list-group-item">Quais as condições de pagamento;</li>
                                    <li class="list-group-item">Quais as penalidades cabíveis pelo descumprimento das normas que regem a contratação.</li>
                                </ul>
                            </div>
                            <br><br>
                            <div class="alert alert-info">
                                <p>Caro cursista, chegamos ao final do primeiro tópico da aula 2, no qual abordamos como identificar as necessidades de aquisição da Administração Pública e a importância de estudar o edital para o sucesso na licitação.</p>
                            </div>
                            <br>
                            <div class="alert alert-success">
                                <p>Caro cursista, chegamos ao final do primeiro tópico da aula 2, no qual abordamos como identificar as necessidades de aquisição da Administração Pública e a importância de estudar o edital para o sucesso na licitação.</p>
                            </div>

                            <br><br><br>









                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });
                                $('#myModal').on('shown.bs.modal', function() {
                                    $('#myInput').trigger('focus')
                                })
                            </script>

                            <!-- FIM SCRIPT LIGHTBOX -->

                            <!-- Botões de navegação -->

                            <div class="text-center">
                                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <!-- Fim Botões de navegação -->


                        </div> <!-- FIM DIV col-md-10 -->
                        <div class="col-md-1"></div>
                    </div><!--  FIM ROW -->
                </div><!--  FIM PAGE TITULO -->


            </div> <!-- FIM DIV CONTEINE  -->

        </section>
        <!--FIM SELECTION-->





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>