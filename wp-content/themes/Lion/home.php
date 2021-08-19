<?php
/*
/ Template Name: Home
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <main id="home">
            <section class="topo">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php get_home_url(); ?>">
                            <img class="logo img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo.svg">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="#sec02">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="#sec03">Nossos Recursos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="#sec04">Porque nascemos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="#sec05">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4" href="#sec06">Como contratar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
            <section class="sec01">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4 py-5">
                            <h3 class="title" data-aos="fade-right" data-aos-duration="1000">Transforme a <span class="title-bold">experiência</span> do seu ecommerce</h3>
                            <div data-aos="zoom-in" data-aos-duration="1000">
                                <a class="button-saiba-mais" href="#sec04">Saiba mais</a>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="sec02 py-5" id="sec02">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-8">
                            <figure><img class="img-fluid" data-aos="fade-right" data-aos-duration="1000" src="<?php bloginfo('template_directory'); ?>/img/img-sec02.png"></figure>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="title" data-aos="fade-left" data-aos-duration="1100">Personalização,
                                integração e <span class="title-bold">evolução!</span></h3>
                            <p class="description pt-3">A Lion Suite surgiu em um mercado em que há poucas plataformas grandes
                                de e-commerce.
                                Esse segmento se desenvolveu muito e, por isso, fusões, aquisições, joint ventures e movimentos
                                abruptos atrapalharam o desenvolvimento dos clientes.
                                Nossa plataforma surge para oferecer um serviço estável, robusto, flexível, completo e
                                escalonável, permitindo customizações para negócios B2C, B2B ou híbridos.
                            </p>
                            <div data-aos="zoom-in" data-aos-duration="1000">
                                <a class="button-como-contratar" href="#sec06">Como Contratar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec03" id="sec03">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="title text-center py-5">Nossos <span class="title-bold">Recursos</span></h3>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="1000">
                            <h5 class="title-recursos pt-4">CUSTOMIZAÇÃO</h5>
                            <figure class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/sec03-img1.svg">
                            </figure>
                            <p class="description">
                                Adequamos a plataforma às necessidades e anseios de cada projeto.
                            </p>
                        </div>
                        <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="1000">
                            <h5 class="title-recursos pt-4">IMPLANTAÇÃO</h5>
                            <figure class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/sec03-img2.svg">
                            </figure>
                            <p class="description">
                                Realizamos todo o processo de implantação do site com foco nas respectivas funcionalidades e
                                usabilidade do site para o melhor resultado para o cliente.
                            </p>
                        </div>
                        <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="1000">
                            <h5 class="title-recursos pt-4">MIGRAÇÃO</h5>
                            <figure class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/sec03-img3.svg">
                            </figure>
                            <p class="description">Realizamos de forma ágil e com máxima dedicação a mudança entre sistemas.
                                Também contamos com uma equipe especializada para dar todo suporte para uma migração de sucesso.
                            </p>
                        </div>
                        <div class="col-lg-3" data-aos="zoom-in" data-aos-duration="1000">
                            <h5 class="title-recursos pt-4">GESTÃO INTELIGENTE</h5>
                            <figure class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/sec03-img4.svg">
                            </figure>
                            <p class="description">A Lion conta com suporte de ferramentas e funcionalidades para uma variedade
                                de estratégias de marketing com foco em desenvolver o seu negócio.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="funcionalidade">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-5">
                            <img class="img-fluid" data-aos="fade-left" data-aos-duration="1100" src="<?php bloginfo('template_directory'); ?>/img/img-funcionalidade.svg">
                        </div>
                        <div class="col-lg-7">
                            <h3 class="title text-left pt-5">Funcionalidades <span class="title-bold">Lion</span></h3>
                            <p class="subtitle py-3">Entre as funcionalidades disponíves, destacamos: </p>
                            <div class="d-flex justify-content-start">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/icon-check.svg">
                                <p class="item ml-2">Painel com resumo das movimentações</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/icon-check.svg">
                                <p class="item ml-2">Gerenciamento de vendas e produtos</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/icon-check.svg">
                                <p class="item ml-2">Customização para tipos de produto</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/icon-check.svg">
                                <p class="item ml-2">Gerenciamento de categorias</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/icon-check.svg">
                                <p class="item ml-2">Termos de pesquisa e clientes</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/icon-check.svg">
                                <p class="item ml-2">Controle de estoque</p>
                            </div>
                            <div class="d-flex justify-content-start">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/icon-check.svg">
                                <p class="item ml-2">URLs curtas e muito mais.</p>
                            </div>
                            <div class="pt-3">
                                <a href="#sec06" class="btn-saber-mais" data-aos="zoom-in" data-aos-duration="1000">Quero saber mais!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec02" id="sec04">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-lg-5">
                            <h3 class="title pt-5 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">A
                                plataforma de e-commerce para negócios <span class="title-bold">B2B, B2C ou Híbridos</span></h3>
                            <p class="description py-3">Oferecemos a possibilidade de vender de acordo com a demanda do cliente.
                                Seja apenas para B2B,
                                permitindo o direcionamento somente para lojistas por meio do cadastro, funcionalidades e
                                condições especiais; B2C, de
                                forma convencional; ou em um mix entre as duas modalidades.</p>
                            <a class="button-como-contratar aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000" href="#sec06">Como Contratar</a>
                        </div>
                        <div class="col-lg-7">
                            <figure><img class="img-fluid pt-4" data-aos="fade-left" data-aos-duration="1100" src="<?php bloginfo('template_directory'); ?>/img/img-sec04.svg"></figure>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec05" id="sec05">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center align-items-center">
                            <h3 class="title pb-5 pb-lg-0" data-aos="zoom-in" data-aos-duration="1000">Clientes <span class="title-bold">Lion</span></h3>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-10 pt-5">
                            <div class="carousel-clientes">
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-cliente1.png" alt="casa-produtor">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-clientes2.svg" alt="vanessa-taques">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-clientes3.svg" alt="bon-marche">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-cliente1.png" alt="casa-produtor">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-clientes3.svg" alt="bon-marche">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-clientes4.svg" alt="real-3d">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-clientes5.svg" alt="dr-debora">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-clientes6.png" alt="grama-cultivo">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-clientes7.jpg" alt="pet-passion">
                                </div>
                                <div class="d-flex justify-content-center"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo-clientes8.png" alt="microgen">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec06" id="sec06">
                <div class="container">
                    <div class="row pt-5 d-flex justify-content-center align-items-center">
                        <div class="col-lg-7">
                            <figure><img class="img-fluid" data-aos="fade-right" data-aos-duration="1000" src="<?php bloginfo('template_directory'); ?>/img/sec06-img.png"></figure>
                        </div>
                        <div class="col-lg-5">
                            <h3 class="title">Quer ver seu negócio decolar com a <span class="title-bold">plataforma Lion?</span></h3>
                            <h5 class="subtitle py-3">Preencha o formulário e em breve iremos conversar!</h5>
                            <div id="retornoHTML">

                                <?php echo do_shortcode('[contact-form-7 id="10" title="Como Contratar"]'); ?>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="rodape">
                <div class="container pt-5 pb-3">
                    <div class="row">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <img class="logo img-fluid" src="<?php bloginfo('template_directory'); ?>/img/logo.svg">
                        </div>
                        <div class="col-lg-3 pt-3 pt-lg-0">
                            <h5 class="contact">contato@lionsuite.com.br</h5>
                            <h5 class="contact">(41) 41 9 8448-4384</h5>
                            <h5 class="contact">(41) 3024-1834</h5>
                        </div>
                        <div class="col-lg-3 pt-3 pt-lg-0 pb-3 pb-lg-0">
                            <h5 class="address">Rua Monsenhor Celso, 225, Centro, Conjunto 301, 3º andar CEP: 80010-150
                            </h5>
                        </div>
                        <div class="col-lg-3">
                            <div class="row d-flex justify-content-center">
                                <div class="col-3 col-lg-2 d-flex justify-content-center align-items-center d-none">
                                    <a href="#" target="_Blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.svg"></a>
                                </div>
                                <div class="col-3 col-lg-2 d-flex justify-content-center align-items-center">
                                    <a href="https://www.instagram.com/lion.suite/" target="_Blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-instagram.svg"></a>
                                </div>
                                <div class="col-3 col-lg-2 d-flex justify-content-center align-items-center d-none">
                                    <a href="#" target="_Blank"><img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-lg-5">
                            <h5 class="obs">© Copyright 2021 Lion Suite - Todos os direitos reservados.</h5>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php endwhile ?>
<?php endif ?>
<?php get_footer(); ?>
<script>
    AOS.init();
</script>
<script>
    $('.carousel-clientes').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992, // aqui define até que largura será as configs abaixo
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false
            }
        }, ]
    });
</script>