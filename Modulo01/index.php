<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Apresentacao';
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
            
                <div class="main-content container-fluid" id="#Apresentacao"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">
                            
                            
                                <h2 class="Titulo">Apresentação</h2>
                                <hr>

                                <!-- Logo do Curso  -->
                                <img src="imagens/banner.png" alt="Como Vender Para a Administração Pública" width="1120" height="350" class="img-rounded img-fluid rounded" style="display: block; margin-left: auto; margin-right: auto;" />

                                <br><p>Neste módulo abordaremos as compras públicas como oportunidade de negócio para os microempreendedores individuais (MEIs), as microempresas (ME) e as empresas de pequeno porte (EPPs); as providências que o empreendedor deve tomar ao decidir participar das compras públicas; a necessária observância à legislação e as regras para o cadastramento na Administração Pública, com foco no âmbito do Governo do Estado do Ceará.</p>

                                <h2 class="Titulo">Objetivo</h2>
                                <hr>

                                <ul class="none">
                                    <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Apresentar as compras públicas como oportunidades para os pequenos negócios;</li>
                                    <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Apresentar a legislação das compras governamentais, especialmente, os dispositivos legais que beneficiam os pequenos negócios;</li>
                                    <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Discutir a importância do empreendedor se preparar para vender para a Administração Pública;</li>
                                    <li><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Orientar os empreendedores para o cadastramento nos órgãos públicos compradores.</li>
                                </ul>


                                <br><!-- SCRIPT INTERAÇAO COM ALUNO-->
                                <ul class="none ">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                                        <h4>
                                            Olá! <?php echo $NomeUsuario ?>, Bem-vindo(a) ao módulo 01 do curso Como Vender Para a Administração Pública! Esperamos que o conteúdo proposto contribua para aprimorar o seu conhecimento acerca do tema. Bons estudos!
                                        </h4>
                                    </li>
                                </ul>
                                <!-- FIM SCRIPT INTERAÇAO COM ALUNO--> <br><br>
                            

                            
                            
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                }); 

                                $(function () {
                                  $('[data-toggle="tooltip"]').tooltip()
                                });   

                                $(function () {
                                    $('.example-popover').popover({
                                        container: 'body'
                                    })
                                });                
                            </script>

                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->

                    <br>
                    <br>
                    
                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
