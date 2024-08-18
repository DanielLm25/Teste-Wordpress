<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Barra Verde no Topo da Tela -->
    <header id="bar-topo"></header>

    <!-- View 1 com Imagem de Fundo -->
    <section id="view1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Bg-Topo.png'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;">
        <div class="container-flex">
            <!-- Caixa Chamada-Topo -->
            <div id="chamada-topo" class="chamada-topo">
                <!-- Logotipo -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-BRLot.png" alt="Logotipo" class="logo">
                <!-- Texto Principal -->
                <p class="texto-principal">Experiência Nacional e Tecnologia Internacional de ponta a serviço dos Estados.</p>
                <!-- Retângulo de Estilização -->
                <div class="retangulo"></div>
                <!-- Texto Novidades -->
                <p class="texto-novidades">Novidades em breve!</p>
            </div>
            <!-- Nova Caixa com Imagem -->
            <div id="imagem-container" class="imagem-container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-Topo.png" alt="Imagem" class="imagem">
            </div>
        </div>
        <!-- Círculo SVG -->
        <div class="circulo-container">
            <svg width="590" height="590" viewBox="0 0 590 590" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <!-- Definição do gradiente linear -->
                    <linearGradient id="gradiente-verde" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#258D3D" />
                        <stop offset="100%" stop-color="#015A1B" />
                    </linearGradient>
                    <!-- Definição da sombra projetada -->
                    <filter id="dropshadow" x="0" y="0" width="150%" height="150%">
                        <feDropShadow dx="0" dy="4" stdDeviation="4" flood-color="rgba(0, 0, 0, 0.5)" />
                    </filter>
                </defs>
                <!-- Círculo com gradiente, contorno e sombra -->
                <circle cx="295" cy="295" r="295" fill="url(#gradiente-verde)" stroke="#274B32" stroke-width="1" filter="url(#dropshadow)" />
            </svg>
        </div>
    </section>
    <!-- Botão de Rolagem para Abaixo -->
    <div class="scroll-button">
        <button onclick="scrollToView('view2')">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mouse-scroll.png" alt="Scroll Button" class="scroll-icon">
        </button>
    </div>
    <!-- View 2 com Imagem e Texto -->
    <section id="view2" style="position: relative;">
        <!-- Container Flex para Dividir Imagem e Texto -->
        <div class="container-flex">
            <!-- Caixa de Imagem -->
            <div class="imagem-box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/iPAd.png" alt="Imagem View 2" class="imagem-view2">
            </div>
            <!-- Caixa de Texto -->
            <div class="texto-box">
                <p class="titulo">O QUE É BRLOT</p>
                <div class="retangulo-v2"></div>
                <p class="descricao1">A BRLOT é uma empresa que nasceu para contribuir com as loterias estaduais.</p>
                <p class="descricao2">
                    A <strong>BRLOT</strong>, empresa parceira do grupo Sorte Online, nasce<br>
                    com o objetivo de desenvolver o novo mercado de<br>
                    Loterias Estaduais no Brasil.
                </p>
            </div>
        </div>
        <!-- Botão de Rolagem para Abaixo -->
        <div class="scroll-button">
            <button onclick="scrollToView('view3')">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mouse-scroll.png" alt="Scroll Button" class="scroll-icon">
            </button>
        </div>

    </section>

    <!-- View 3 -->
    <section id="view3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Pattern.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="view3-container" style="display: flex; align-items: flex-start;">
            <!-- Lado Esquerdo -->
            <div class="left-side" style="flex: 1;">
                <!-- Caixa de Texto com Retângulo -->
                <div class="text-box" style="margin-bottom: 20px;">
                    <p>
                        <span class="text1">A BRLOT É PARCEIRA DO GRUPO</span>
                        <span class="text2">SORTE ONLINE</span>
                    </p>
                    <div class="rectangle"></div>
                </div>
                <!-- Grid de Imagens -->
                <div class="image-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sorte-online-cor.png" alt="Imagem 1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-lotosuper.png" alt="Imagem 2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Logo-LB%20(2).png" alt="Imagem 3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logotipo_doctor_lotto_(h)(n2).png" alt="Imagem 4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_lottocap_azul.png" alt="Imagem 5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-arena22.png" alt="Imagem 6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/lotto.com.png" alt="Imagem 7">
                </div>
            </div>

            <!-- Lado Direito -->
            <div class="right-side" style="flex: 0.5;"> <!-- Ajuste a largura do lado direito -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/rapaz-note.png" alt="Imagem Rapaz com Notebook" class="right-image">
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-content">
            <p class="f1">contato@brlot.com.br</p>
            <p class="f2">BRLOT - Loteria Brasil 2021</p>
        </div>
    </footer>

    <!-- Botão de Rolagem para Cima -->
    <div class="fixed-button">
        <button onclick="scrollToView('view1')">
            <i class="fas fa-chevron-up"></i>
        </button>
    </div>

    <?php wp_footer(); ?>
    <script>
        function scrollToView(viewId) {
            document.getElementById(viewId).scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>