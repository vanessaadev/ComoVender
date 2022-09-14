<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <p class="Titulo"> O Cadastramento do Fornecedor na Administração Pública</p>
                        <hr>

                        <div class="bd-callout bd-callout-warning">
                            <p><strong>Objetivo:</strong> Orientar os empreendedores para o cadastramento do seu negócio nos órgãos públicos compradores.</p>
                        </div>

                        <p>Tomada a decisão de participar das compras governamentais, o empreendedor deverá fazer o seu cadastramento nos governos federal, estaduais ou municipais, conforme o seu interesse. Esse cadastro está previsto na legislação como condição importante para participar de licitações e contratar com os órgãos públicos.</p>
                        <p>A utilização do registro cadastral está prevista na Lei Federal nº 8.666/93 (lei das licitações e contratos administrativos) e, no caso do Estado do Ceará, no Decreto nº 32.901, de 17 de dezembro de 2018.</p>
                        <p>É por meio desse cadastro que os órgãos públicos podem acompanhar as condições de habilitação jurídica, regularidade fiscal e trabalhista e qualificação técnica dos fornecedores e, ainda, registrar eventuais sanções administrativas por descumprimento da legislação durante a licitação ou contratação com a Administração Pública.</p>
                        <p>Normalmente, os cadastros de fornecedores dos órgãos públicos estão disponíveis em sítios na internet, com orientações sobre cadastramento e consulta para facilitar o acesso pelo empreendedor. Dessa forma, é importante contar com pelo menos um computador com acesso a internet banda larga e uma pessoa capacitada para utilizá-lo.</p>

                        <div class="col-md-12 bd-callout bd-callout-primary">
                            <p style="font-weight: 400;">As vantagens de se cadastrar como fornecedor na Administração Pública são:</p>

                            <ul class="none">
                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O cadastramento é gratuito; </li>
                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Permite acesso a todos os dados cadastrais por meio de login e senha;</li> 
                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Acompanhamento online da situação de regularidade cadastral;</li> 
                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Agilidade na fase de habilitação dos processos de contratação pública;</li> 
                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Credenciamento para participar das compras eletrônicas (cotação eletrônica, por exemplo); e</li> 
                                <li> <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Recebimento de e-mails informativos sobre compras públicas que serão realizadas.</li>
                            </ul>
                        </div>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Atenção! Preste informações com correção e atualidade. Isso pode fazer a diferença na hora de licitar e contratar.</p>
                            </div>
                        </div>


                        <p class="wow fadeInDown" datawowdelay="0.3s" >O primeiro passo é conhecer as informações e os documentos necessários à inscrição e como fazer o cadastramento na Administração pública.</p>
                        <p class="wow fadeInRight" datawowdelay="0.6s" >Para fazer o cadastramento, o empreendedor deverá estar de posse de informações a respeito do seu negócio, tais como nome ou razão social, número de CPF ou CNPJ, natureza jurídica, atividade econômica, sócios, capital social, endereço, meios de contatos etc.</p>
                        <p class="wow fadeInLeft" datawowdelay="0.9s" >De modo geral, o empreendedor deve preencher um cadastro e apresentar a documentação que comprove a habilitação jurídica, a regularidade fiscal e trabalhista e a qualificação técnica. A maior parte desses documentos (certidões) pode ser emitida por meio da internet, desde que a pessoa física ou jurídica esteja em dia com as obrigações legais.</p>
                        <p><strong>Principais documentos apresentados no cadastramento do fornecedor:</strong></p>

                        
                        <table class="table table-bordered Tdborda">
                            <thead>
                                <tr>
                                    <th class="ColorTable" style="width: 100px; background: #44833d;">Documento</th>
                                    <th class="ColorTable" style="background: #44833d">Onde obter</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cédula de identidade dos sócios</td>
                                    <td>Secretaria de Segurança Pública e Defesa Social do Ceará e postos de atendimento
                                        
                                        <br /> <a target="_blank" href="https://www.sspds.ce.gov.br" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                                <tr>
                                    <td>Comprovante de Inscrição e de Situação Cadastral (CNPJ)</td>
                                    <td>Secretaria da Receita Federal
                                        
                                        <br /> <a target="_blank" href="http://servicos.receita.fazenda.gov.br/Servicos/cnpjreva/Cnpjreva_Solicitacao.asp" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                                <tr>
                                    <td>Registro comercial, no caso de empresa individual, Ato Constitutivo, Estatuto ou Contrato Social</td>
                                    <td>Junta Comercial do Estado do Ceará
                                        <br /> <a target="_blank" href="https://www.jucec.ce.gov.br" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                                <tr>
                                    <td>Certificado da Condição de Microempreendedor Individual, no caso de MEI</td>
                                    <td>Portal do Microempreendedor
                                        
                                        </td>
                                </tr>
                                <tr>
                                    <td>Certidão Negativa da Fazenda Estadual</td>
                                    <td>Secretaria da Fazenda do Estado do Ceará
                                    
                                    <br /> <a target="_blank" href="http://internet-consultapublica.apps.sefaz.ce.gov.br/certidaonegativa/preparar-consultar" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                                <tr>
                                    <td>Certidão Negativa de Tributos Municipais</td>
                                    <td>Secretaria de Finanças do Município de Fortaleza
                                    
                                    <br /> <a target="_blank" href="https://www.sefin.fortaleza.ce.gov.br/certidoes#?certidao-negativa-de-debitos-tributos-municipais" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                                <tr>
                                    <td>Certidão Conjunta Negativa de Débitos Relativos a Tributos Federais e à Dívida Ativa da União</td>
                                    <td>Secretaria da Receita Federal
                                    <br /> <a target="_blank" href="https://www.gov.br/receitafederal/pt-br" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                                <tr>
                                    <td>Certidão Negativa de Débitos Trabalhistas</td>
                                    <td>Tribunal Superior do Trabalho
                                        <br /> <a target="_blank" href="http://www.tst.jus.br/certidao" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                                <tr>
                                    <td>Certidão Negativa de Débito com o FGTS</td>
                                    <td>Caixa Econômica Federal
                                   
                                    <br /> <a target="_blank" href="https://consulta-crf.caixa.gov.br/consultacrf/pages/consultaEmpregador.jsf" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                                <tr>
                                    <td>Registro ou inscrição na entidade profissional competente a qual, por exigência legal, a pessoa/empresa deva ser inscrita (CRC, CRA, CREA etc.).</td>
                                    <td>Somente se <strong><span style="text-decoration: line-through;">exercer</span></strong> <span id="docs-internal-guid-7a3a3bdc-7fff-49f7-9881-84560f031bd8"><span>exerce </span></span>atividade fiscalizada por entidade profissional. Nesse caso, acesse os portais das entidades fiscalizadoras, como por exemplo:
                                        <br><br />craceara <br /> <a target="_blank" href="https://www.craceara.org.br" class="badge badge-primary">ACESSAR</a> 
                                        <br><br /> creace<br /><a target="_blank" href="http://www.creace.org.br" class="badge badge-primary">ACESSAR</a></td>
                                </tr>
                            </tbody>
                        </table>

                        <br><!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>As informações e documentos exigidos podem variar de acordo com a atividade do fornecedor.</p>
                            </div>
                        </div>

                        <br><!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Agora que você sabe da importância do cadastro, quais são os documentos e como fazer o cadastramento na Administração Pública para participar das compras governamentais, que tal visitar a área de fornecedores em alguns sítios eletrônicos e conhecer mais um pouco?</p>

                                <table class="table table-bordered BordaRoxa text-center">
                                    <thead style="background: #a042e5;" class="TableRoxa">
                                        <tr>
                                            <th>Órgão ou Entidade</th>
                                            <th>Endereço Eletrônico</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Governo do Estado do Ceará</td>
                                            <td>https://www.portalcompras.ce.gov.br/fornecedores<br /> <a target="_blank" href="https://www.portalcompras.ce.gov.br/fornecedores" class="badge badge-primary">ACESSAR</a></td>
                                        </tr>
                                        <tr>
                                            <td>Prefeitura de Fortaleza</td>
                                            <td>https://compras.sepog.fortaleza.ce.gov.br/publico/fornecedor.asp<br /> <a target="_blank" href="https://compras.sepog.fortaleza.ce.gov.br/publico/fornecedor.asp" class="badge badge-primary">ACESSAR</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Portal de Compras do Governo Federal</p>
                                            </td>
                                            <td>https://www.gov.br/compras/pt-br<br /> <a target="_blank" href="https://www.gov.br/compras/pt-br">ACESSAR</a></td>
                                        </tr>
                                        <tr>
                                            <td>Banco do Brasil – Licitacoes-e</td>
                                            <td>https://www.licitacoes-e.com.br/aop/index.jsp<br /> <a target="_blank" href="https://www.licitacoes-e.com.br/aop/index.jsp" class="badge badge-primary">ACESSAR</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <br><p class="SubSubTitulo"> Consulta à situação cadastral e emissão do Certificado de Registro Cadastral (CRC)</p>
                        <hr>

                        <p>A inscrição no Cadastro de Fornecedores é importante para o processo de compra governamental, pois é por meio dele que gestores e fornecedores emitem o Certificado de Registro Cadastral - CRC, documento previsto na lei das licitações, o qual pode ser utilizado em substituição a documentação relativa à habilitação jurídica, à qualificação técnica e à regularidade fiscal e trabalhista.</p>
                        <p>É importante ressaltar ue o CRC será exigido do fornecedor para celebrar contratos decorrentes de processos licitatórios e de aquisições por dispensa e inexigibilidade de licitação.</p>
                        <p>Qualquer fornecedor, gestor ou pessoa interessada poderá consultar a situação de regularidade e emitir o CRC, desde que disponha do CNPJ, no caso de pessoa jurídica, ou do CPF, no caso de pessoa física. No tocante ao Governo do Estado do Ceará, o acesso se dará via internet, por meio do Portal de Compras, no endereço: <a target="_blank" href="https://www.portalcompras.ce.gov.br/fornecedores/">https://www.portalcompras.ce.gov.br/fornecedores/</a>.</p>
                        <p>Na figura abaixo, observa-se um CRC emitido a partir do Cadastro de Fornecedores do Estado:</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="TituloFigura"><strong>Figura 08:</strong> Certificado de Registro Cadastral</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 08 - End -->

                        <br><!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Legal, né? Agora, para reforçar o aprendizado, clique no link abaixo para assistir o vídeo de como consultar a situação cadastral do fornecedor no Governo do Estado do Ceará. Não esqueça que é apenas um exemplo e não representa a realidade atual:</p>
                                <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oB5YJvpFeYQ?rel=0" allowfullscreen=""></iframe></div>
                            </div>
                        </div>

                        <p>Agora que estamos nos aproximando do final da aula 1, que tal visitar a área no Portal de Compras do Estado do Ceará dedicada aos pequenos negócios interessados em participar das contratações do Governo? Então, para consultar tutoriais, informações e orientações aos pequenos negócios acesse o endereço: <a target="_blank" href="https://www.portalcompras.ce.gov.br/fornecedores/mpe">https://www.portalcompras.ce.gov.br/fornecedores/mpe</a></p>
                        <p>Na figura abaixo, observa-se a página MICRO E PEQUENAS EMPRESAS do Portal de Compras do Estado:</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid" src="imagens/Figura09.png" alt="Micro e Pequenas Empresas">
                            </a>
                            <p class="TituloFigura"><strong>Figura 09</strong> </p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura09.png" alt="Micro e Pequenas Empresas">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End -->


                        <br><div class="alert alert-info">
                            <p>Caro cursista, chegamos ao final da aula 1 com a conclusão deste quarto tópico, no qual discutimos a necessidade e importância do cadastramento dos pequenos negócios na Administração Pública.</p>
                        </div>

                        <div class="alert alert-success">
                            <p>No primeiro tópico da próxima aula, abordaremos como identificar as necessidades de aquisição da Administração Pública e a importância de estudar o edital para o sucesso na licitação.</p>
                        </div>





                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>