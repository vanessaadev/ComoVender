<?php
$page = 'Topico02';
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
                            <h2 class="Titulo">As Formas de Participação nas Compras da Administração Pública</h2>
                            <hr>
                            <div class="bd-callout bd-callout-warning">
                                <p><strong>Objetivo:</strong> Apresentar as formas e etapas dos procedimentos de licitação e contratação direta.</p>
                            </div><br>
                            <p>A legislação determina que a regra das compras governamentais é a licitação, que é um procedimento administrativo formal em que a Administração Pública convoca, mediante condições estabelecidas em ato próprio (edital, carta-convite etc.), interessados na apresentação de propostas para o fornecimento de bens ou a contratação de obras e serviços. Vencerá a licitação aquele que apresentar a proposta mais vantajosa para a Administração Pública.</p>
                            <p>As principais modalidades de licitação para aquisição de bens e contratação de obras ou serviços são: Concorrência, Tomada de Preço, Convite e Pregão. A diferença entre uma modalidade e outra se deve ao objeto ou valor a ser contratado.</p>
                            <p>Considerando o valor estimado, pode-se dizer que as formas mais adequadas à participação dos pequenos negócios nas compras governamentais são: dispensa por valor, convite e pregão, como vimos no início deste curso.</p>
                            <p>A Administração Pública poderá, também, realizar contratação direta por “dispensa de licitação”, para aquisição de bens e contratação de obras e serviços em razão do objeto ou de pequenos valores; ou, ainda, por “inexigibilidade de licitação”, nos casos em que a licitação não é possível, por inviabilidade de competição.</p>
                            <p>O procedimento mais utilizado nas aquisições por dispensa de licitação em razão do valor é a cotação eletrônica, em que os órgãos compradores se utilizam dessa forma de dispensa que envolve disputa, porém sem sessão pública, por meio da internet.</p>
                            <p>Abaixo podemos observar as principais modalidades e respectivos critérios, limites e instrumentos convocatórios utilizados nas aquisições dos órgãos e entidades do Governo do Estado do Ceará:</p>
                            <br>
                            <!-- Accordion Fase 01 - Begin  -->

                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <!-- Sub Título -->

                                <p class="SubTitulo">Clique nas caixas para ver mais informações sobre cada modalidade</p>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Concorrência</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p><strong>Caracteristica:</strong> Para quaisquer interessados que comprovem qualificação na fase de habilitação.</p>
                                            <p><strong>Critério de julgamento das propostas:</strong> Menor preço, melhor técnica ou técnica e preço.</p>
                                            <p><strong>Limite de valor estimado do objeto: </strong> Para compras e outros serviços (art. 23,II, “c”): acima de R$ 1.430.000,00
                                                Para obras e serviços de engenharia (art. 23, I, “c”): acima de R$ 3.300.000,00.</p>
                                            <p><strong>Instrumento e prazo mínimo de divulgação:</strong> Edital – 30 ou 45 dias.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Tomada de Preços</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p><strong>Caracteristica:</strong> Para cadastrados até o 3º dia anterior ao recebimento das propostas.</p>
                                            <p><strong>Critério de julgamento das propostas:</strong> Menor preço, melhor técnica ou técnica e preço.</p>
                                            <p><strong>Limite de valor estimado do objeto: </strong> Para compras e outros serviços (art. 23,II, “b”): até R$ 1.430.000,00 Para obras e serviços de engenharia (art. 23, I, “b”): até R$ 3.300.000,00.</p>
                                            <p><strong>Instrumento e prazo mínimo de divulgação:</strong> Edital – 15 ou 30 dias.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Convite </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p><strong>Caracteristica:</strong> Para cadastrados ou não, em nº mínimo de 3, extensivo aos demais cadastrados que se manifestarem até 24 horas antes da abertura das propostas.</p>
                                            <p><strong>Critério de julgamento das propostas:</strong> Menor preço, melhor técnica ou técnica e preço.</p>
                                            <p><strong>Limite de valor estimado do objeto: </strong> Para compras e outros serviços (art. 23,II, “a”): até R$ 176.000,00 .Para obras e serviços de engenharia (art. 23, I, “a”): até R$ 330.000,00.</p>
                                            <p><strong>Instrumento e prazo mínimo de divulgação:</strong> Carta-convite – 5 dias úteis.</p>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                            <strong>Pregão (Presencial ou Eletrônico) </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p><strong>Caracteristica:</strong> Para a contratação de bens e serviços comuns.</p>
                                            <p><strong>Critério de julgamento das propostas:</strong> Menor preço.</p>
                                            <p><strong>Limite de valor estimado do objeto: </strong> Não há limite de valor.</p>
                                            <p><strong>Instrumento e prazo mínimo de divulgação:</strong> Edital – 8 dias úteis.</p>
                                            </p>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                            <strong>Dispensa por Valor (*) </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p><strong>Caracteristica:</strong> Para aquisição de bens e materiais e contratação de obras ou serviços de pequeno valor.</p>
                                            <p><strong>Critério de julgamento das propostas:</strong> Menor preço.</p>
                                            <p><strong>Limite de valor estimado do objeto: </strong> Para compras e outros serviços (art. 24, II): até R$ 17.600,00 Para obras e serviços de engenharia (art. 24, I): até R$ 33.000,00.</p>
                                            <p><strong>Instrumento e prazo mínimo de divulgação:</strong> Não previsto.</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>

                            <!-- FIM Accordion Fase 01 - Begin  -->

                            <p><em>* Não é modalidade de licitação. O Governo do Estado do Ceará adota a Cotação Eletrônica para aquisição de bens e de serviços comuns, dispensáveis de licitação, por meio da internet. O instrumento de convocação é o “Termo de Participação” e o prazo mínimo de divulgação é de 24 horas.</em></p>
                            <p>No procedimento de licitação, a Administração Pública deve adotar critérios para seleção da proposta mais vantajosa. O julgamento das propostas de uma licitação deve ser objetivo, devendo o agente público responsável pela licitação realizá-lo em conformidade com os seguintes tipos (exceto para as modalidades concurso e leilão):</p>
                            <br><br>

                            <table class="table table-bordered border-success">
                                <thead>
                                    <tr style="background-color:#44833d; color: white; text-align: center;">
                                        <th>Critério (Tipo)</th>
                                        <th>Definição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Menor Preço</td>
                                        <td>Quando o critério de seleção da proposta mais vantajosa para a administração é a de menor preço.</td>
                                    </tr>
                                    <tr>
                                        <td>Melhor Técnica</td>
                                        <td>É o critério de seleção em que a proposta mais vantajosa para a Administração é escolhida com base em fatores de ordem técnica. É utilizada exclusivamente para a contratação de serviços de natureza predominantemente intelectual.</td>
                                    </tr>
                                    <tr>
                                        <td>Técnica e Preço</td>
                                        <td>Critério de seleção em que a proposta mais vantajosa para a Administração é escolhida com base na maior média ponderada, considerando-se as notas obtidas nas propostas de preço e de técnica. É obrigatório nas aquisições de bens e serviços de informática, nas modalidades tomadas de preços e concorrência.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <!-- Sub Título -->
                            <p class="SubTitulo"> A Fase Externa ou Executória da Licitação</p>
                            <hr>
                            <p>A fase externa ou executória tem início com a divulgação do ato convocatório (edital ou carta-convite) e a execução do processo licitatório propriamente dito (habilitação dos licitantes, abertura e julgamento das propostas, julgamento dos recursos e impugnações, adjudicação do objeto e homologação do resultado da licitação) e se encerra com a assinatura do contrato ou a emissão de documento que o substitua.</p>
                            <p>No processo licitatório, a fase externa é composta por um conjunto de atos administrativos, dos quais o órgão público não pode abrir mão, pois são de cumprimento obrigatório definido em lei. Vejamos quais são:</p>
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item active bg-success font-weight-bold text-white text-center" ><strong><span style="font-size: 1.5em;"> Atos Administrativos e Definições</span></strong></li>

                                    <li class="list-group-item"><strong> Publicação do edital ou carta-convite</strong><br />Procedimento pelo qual o órgão dá publicidade aos atos e fases do processo licitatório por meio de veículos de comunicação, tais como: diários oficiais, jornais, boletins, internet, quadro de avisos etc.</li>

                                    <li class="list-group-item">
                                        <strong>Habilitação dos licitantes</strong><br />
                                        Condição exigida para a contratação, referente à:<br />
                                        <i class="fas fa-dot-circle CorVerdeClaroEstado"></i> Habilitação jurídica, por meio do ato constitutivo, estatuto, contrato social, registro comercial, cédula de identidade.<br />
                                        <i class="fas fa-dot-circle CorVerdeClaroEstado"></i> Regularidade fiscal, por meio de inscrição no CNPJ/CPF; regularidade com relação à Fazenda Federal, Estadual e Municipal, INSS e FGTS; Certidão Conjunta Negativa de Débitos Relativos a Tributos Federais e à Dívida Ativa da União.<br />
                                        <i class="fas fa-dot-circle CorVerdeClaroEstado"></i> Qualificação Técnica, por meio do registro ou inscrição na entidade profissional competente; capacidade técnico-operacional; capacidade técnico-profissional; atestados de capacidade técnica; vistoria ou visita técnica.<br />
                                        <i class="fas fa-dot-circle CorVerdeClaroEstado"></i> Qualificação econômico-financeira, por meio de balanço patrimonial e demonstrações contábeis; garantia de participação etc.<br />
                                        <i class="fas fa-dot-circle CorVerdeClaroEstado"></i> Cumprimento do disposto no inciso XXXIII do art. 7º da CF, que proíbe o trabalho do menor.
                                    </li>

                                    <li class="list-group-item"><strong>Julgamento objetivo das propostas</strong><br />O órgão licitante deve observar critérios objetivos definidos no edital para o julgamento da documentação e das propostas, afastando interpretações subjetivas.</li>

                                    <li class="list-group-item"><strong>Homologação do processo licitatório</strong><br />É o ato de responsabilidade da autoridade máxima do órgão que ratifica todo o procedimento licitatório e confere aos atos praticados aprovação para que produzam os efeitos jurídicos necessários.</li>

                                    <li class="list-group-item"><strong>Adjudicação ao vencedor</strong><br />É o ato pelo qual o órgão contratante atribui ao licitante vencedor o objeto da licitação.</li>
                                </ul>
                            </div>
                            <br><br><br>
                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">Não se preocupe! O órgão contratante não poderá fazer exigências desnecessárias ou irrelevantes para a execução do objeto. Por exemplo: não será exigido do licitante atestado de capacidade técnico-operacional para fornecer apenas material de expediente.</p>
                            </div>

                            <br><br>

                            <!-- Sub Título -->
                            <p class="SubTitulo"> Como Participar das Cotações Eletrônicas do Estado para Aquisições de Pequeno Valor</p>

                            <hr><br>

                            <!-- Saiba Mais -->

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">Conforme o Decreto Estadual nº 33.486/2020, a sistemática de cotação eletrônica é um conjunto de procedimentos para aquisição de bens e serviços comuns de pequeno valor pelos órgãos e entidades do Governo do Estado, por meio da internet.</p>
                            </div><br><br>

                            <p><strong>A Cotação Eletrônica ocorre por meio de disputa sem sessão pública, processada por meio de sistema disponibilizado pela SEPLAG, observando os passos a seguir:</strong></p>

                            <!-- LISTA EM MOVIMENTO-->
                            <div>
                                <ul class="none">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> O órgão promotor cadastra a cotação eletrônica, anexa o instrumento de convocação (Termo de Participação), insere os itens (bens ou serviços) e publica o procedimento;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Durante o período (mínimo de 24 horas) disponibilizado para acolhimento de propostas, previsto no Termo de Participação, os fornecedores, previamente inscritos no Cadastro de Fornecedores do Estado, efetuam seus lances;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Ao compararem as condições e valores já registrados por outros disputantes, os fornecedores podem ofertar novos lances abaixo da sua melhor oferta;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> No horário estabelecido no Termo de Participação, as propostas serão abertas e o órgão promotor da cotação poderá negociar e/ou declarar vencedor o arrematante da melhor proposta, desde que atenda aos requisitos exigidos no instrumento convocatório.</li>

                                </ul>
                            </div>
                            <br>
                            <p>Na figura abaixo, observa-se o diagrama do processamento da cotação eletrônica, com as etapas do processo e principais atribuições dos envolvidos:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft">Figura 8: Diagrama do processamento da cotação eletrônica</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura wow fadeInLeft">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br><br>

                            <div class="alert alert-success" role="alert">
                                <p>Para consultar informações e as regras de como participar das cotações eletrônicas promovidas pelos órgãos e entidades do Governo do Estado, o empreendedor deve acessar o Portal de Compras, no endereço:</p>
                                <p style="text-align:center;"><a href="https://www.portalcompras.ce.gov.br/compras/menu-cotacao-eletronica" target="_blank" rel="noopener noreferrer"><span style="color: black;">www.portalcompras.ce.gov.br</span></a></p>
                            </div>



                            <br><br>
                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p>Legal, né? Quer aprender como enviar uma proposta para as cotações eletrônicas dos órgãos e entidades do Governo do Estado do Ceará? Então, clique no link abaixo para ver o vídeo:</p>

                                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/865YRHM7r2E?rel=0" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <!-- Sub Título -->
                            <p class="SubTitulo"> Como Participar do Pregão Eletrônico</p>
                            <hr><br>
                            <!-- Saiba Mais -->

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">No pregão eletrônico, a disputa de preços entre os fornecedores ocorre em sessão pública denominada “sala virtual de disputa”, com a utilização dos recursos da tecnologia da informação (internet).</p>
                            </div><br>
                            <p>Reunidos virtualmente, por meio de computadores conectados à internet, em horário de referência (horário de Brasília) estabelecido em edital de convocação, o pregoeiro e os representantes dos fornecedores promovem negociação direta mediante oferecimento de propostas e lances sucessivos com valores sempre inferiores ao seu último lance registrado no sistema, até a proclamação de um arrematante.</p>
                            <p>Encerrada a etapa de lances e, após as negociações, o licitante arrematante entregará a proposta de preços, com os respectivos valores readequados ao lance vencedor, por meio do sistema eletrônico, no prazo de até 24h, tudo contado a partir do encerramento da etapa de lances. Após essa etapa, se a proposta e as amostras, quando exigidas no edital, forem consideradas aceitáveis, o arrematante será declarado vencedor.</p>
                            <p>A Administração Pública Estadual, por meio da Central de Licitações, realiza seus pregões eletrônicos utilizando os sistemas “Licitações-e” (do Banco do Brasil) e “Compras Governamentais” (do Ministério da Economia). Para participar dos pregões eletrônicos, o empreendedor deverá fazer um cadastro prévio e obter um usuário e senha privativa, acessando os respectivos portais.</p>
                            <p>Por sua vez, as orientações de como utilizar os sistemas eletrônicos de compras estão disponíveis abaixo:</p>
                            <br>
                            <!-- Accordion Fase 01 - Begin  -->

                            <div class="accordion accordion-flush" id="AccordionFase02">

                                <!-- Sub Título -->

                                <p class="SubTitulo">Clique nos títulos abaixo para mais informações</p>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                                            <strong>Governo Federal - Compras Governamentais</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p><strong>Botão “Pregão Eletrônico - Fornecedor”</strong> <br><a href="http://antigo.comprasgovernamentais.gov.br/index.php/publicacoes2/manuais" target="_blank" rel="noopener noreferrer">http://antigo.comprasgovernamentais.gov.br/index.php/publicacoes2/manuais</a>
                                            </p>
                                            <p><strong>Tutorial Comprasnet Pregão Eletrônico - Fornecedor</strong> <br><a href="https://demonstra.serpro.gov.br/tutoriais/comprasnet_pregao_eletronico_20191202-16-28-20/html/demo_7.html" target="_blank" rel="noopener noreferrer">https://demonstra.serpro.gov.br/tutoriais/comprasnet_pregao_eletronico_20191202-16-28-20/html/demo_7.html</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                                            <strong>Banco do Brasil</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase02">
                                        <div class="accordion-body">
                                            <p>
                                            <p><strong>Botão “Introdução às Regras do Jogo”</strong><br>
                                                <a href="http://www.licitacoes-e.com.br" target="_blank" rel="noopener noreferrer">http://www.licitacoes-e.com.br</a>
                                            </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>

                            <!-- FIM Accordion Fase 01 - Begin  -->
                            <br>
                            <p>Na figura abaixo, observa-se a página de consulta aos manuais de como participar dos pregões eletrônicos realizados por meio da plataforma “Comprasgovernamentais” do Governo Federal:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft">Figura 9: Página de consulta aos manuais</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura ">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br>
                            <p>Na figura abaixo, observa-se como r acessaos manuais de como participar dos pregões eletrônicos realizados por meio da plataforma “licitacoes-e” do Banco do Brasil:</p>
                            <br><br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura wow fadeInLeft">Figura 10: Plataforma “licitacoes-e” do Banco do Brasil</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura ">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Figura 01 - End -->
                            <br><br><br>
                            <!-- Saiba Mais -->

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <div class="SaibaMaisTexto">
                                    <p> Agora, para reforçar o aprendizado, vamos assistir aos vídeos do canal “Sistema Comprasnet para fornecedores” sobre como participar dos pregões no Portal Comprasgovernamentais: <br>
                                        Acesse a playlist clicando no link abaixo </p><br>
                                    <div class="alert alert-success" role="alert" style="text-align:center;"><a href="https://youtu.be/lHnmtJKWDFI?list=PLCDO8oMmhbxukLSjSdNY_JN5xoqvNZckW" target="_blank" rel="noopener noreferrer"><span style="color: black;">www.youtube.com/playlist</span></a></div>

                                </div>
                            </div>
                            <br><br>
                            <div class="alert alert-info" role="alert"> Caro cursista, chegamos ao final do segundo tópico da aula 2, no qual apresentamos as formas e etapas dos procedimentos de licitação e contratação direta mais utilizados pelos órgãos públicos para comprar dos pequenos negócios.
                            </div>
                            <br><br>
                            <div class="alert alert-success" role="alert"> No próximo tópico, abordaremos como funciona o contrato administrativo e apresentaremos os riscos e recomendações a quem vende para a Administração Pública.
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
                                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                            <!-- Fim Botões de navegação -->

                            <!-- FIM DIV col-md-10 -->
                        </div>
                        <div class="col-md-1"></div>
                    </div><!--  FIM ROW -->
                    <!--  FIM PAGE TITULO -->
                </div>
                <!-- FIM DIV CONTEINE  -->
            </div>
            <!--FIM SELECTION-->
        </section>





    </div> <!--  FIM DIV MAIN -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>