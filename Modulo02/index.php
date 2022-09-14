<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>
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
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Título -->
                    <h2 class="Titulo">Apresentação</h2>
                    <hr>
                    <!-- Titulo Figura -->
                    <div class="text-center">
                            <img class="img-fluid" src="imagens/banner.png" alt="Como Vender Para a Administração Pública">
                        
                    </div>
                    
                    <br><p>Caro Cursista <br>
                        Neste módulo apresentaremos as informações e ferramentas utilizadas pela Administração Pública para realizar as compras governamentais, abordando o acesso às demandas de bens e serviços, as exigências do edital e os principais procedimentos de contratação. Por fim, trataremos do contrato administrativo e dos riscos e recomendações a quem vende para a Administração Pública.
                    </p>
                    <!-- Título -->
                    <h2 class="Titulo">Objetivo</h2>
                    <hr>
                    <!-- LISTA EM MOVIMENTO-->
                    <div>
                        <ul class="none">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Orientar como identificar as necessidades de aquisição da Administração Pública e discutir a importância de estudar o edital para o sucesso na licitação;</li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Apresentar as formas e etapas dos procedimentos de licitação e contratação direta;</li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Discutir como funciona o contrato administrativo e apresentar os riscos e recomendações a quem vende para a Administração Pública.</li>

                        </ul>
                    </div>
                    <br><br>




                    <!-- SCRIPT INTERAÇAO COM ALUNO-->
                    <ul class="none ">
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i></i>
                            <h4>
                                Olá! <?php echo $NomeUsuario ?>, Bem-vindo(a) ao módulo 02 do curso Como Vender Para a Administração Pública! Esperamos que o conteúdo proposto contribua para aprimorar o seu conhecimento acerca do tema. Bons estudos!
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

                        $('#myModal').on('shown.bs.modal', function() {
                            $('#myInput').trigger('focus')
                        })
                    </script>
                    <!--  FIM SCRIPT LIGHTBOX -->
                    <!-- Botões de navegação -->
                    <div class="text-center">

                        <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!--  Fim Botões de navegação -->

                    <!-- FIM DIV col-md-10 -->
                </div>
                <div class="col-md-1"></div>
                <!--  FIM DIV ROW -->
            </div>
            <!-- FIM DIV CONTEINER  -->
        </div>
        <!-- FIM DIV MAIN  -->
    </div>

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>