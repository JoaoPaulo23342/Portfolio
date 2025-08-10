<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Paulo - Dev Fullstack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    },
                    animation: {
                        'gradient': 'gradient 8s ease infinite',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        gradient: {
                            '0%, 100%': {
                                'background-position': '0% 50%'
                            },
                            '50%': {
                                'background-position': '100% 50%'
                            },
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)',
                            },
                            '50%': {
                                transform: 'translateY(-10px)',
                            },
                        }
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen dark:bg-gray-900 font-sans">
    <!-- Animação de Bolhas no Background -->
    <div class="bubbles-container">
        <div class="bubble small"></div>
        <div class="bubble medium"></div>
        <div class="bubble large"></div>
        <div class="bubble small"></div>
        <div class="bubble medium"></div>
        <div class="bubble large"></div>
        <div class="bubble small"></div>
        <div class="bubble medium"></div>
        <div class="bubble large"></div>
        <div class="bubble small"></div>
        <div class="bubble medium"></div>
        <div class="bubble large"></div>
        <div class="bubble small"></div>
        <div class="bubble medium"></div>
        <div class="bubble large"></div>
        <div class="bubble small"></div>
        <div class="bubble medium"></div>
        <div class="bubble large"></div>
        <div class="bubble small"></div>
        <div class="bubble medium"></div>
    </div>

    <!-- Botão Voltar ao Topo -->
    <button id="backToTop" class="fixed bottom-8 right-8 z-50 p-3 bg-primary-600 text-white shadow-lg hover:bg-primary-700 transition-all duration-300 opacity-0 invisible dark:bg-primary-500 dark:hover:bg-primary-600 rounded-full">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <header class="fixed w-full top-0 z-40 transition-all duration-300" id="navbar">
        <nav class="bg-white/90 backdrop-blur-md shadow-md dark:bg-gray-900/90 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center" id="casa">
                        <a href="index.html" class="text-primary-600 dark:text-primary-400 text-lg font-bold flex items-center">
                            <img src="assets/icons/Logotipo_empresa_de_programação_sistemas_e_tecnologia-removebg-preview.png" alt="Logo" class="h-12 mr-2">
                            <span class="hidden sm:block">João Paulo</span>
                        </a>
                    </div>
                    
                    <!-- Menu Desktop -->
                    <div class="hidden md:flex space-x-1 items-center">
                        <a href="#home" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Home</a>
                        <a href="#sobre" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Sobre</a>
                        <a href="projetos.html" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Projetos</a>
                        <a href="formacao.php" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Formação</a>
                        <a href="#contato" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Contato</a>
                        
                        <div class="flex space-x-2 ml-4">
                            <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" class="social-icon-btn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/joaopaulo-dev" target="_blank" class="social-icon-btn">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                        
                        <!-- Botão Dark Mode -->
                        <button id="theme-toggle" type="button" class="ml-4 p-2 rounded-full bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-300 focus:outline-none">
                            <i id="theme-icon" class="fas fa-moon text-gray-700 dark:text-yellow-300"></i>
                        </button>
                    </div>
                    
                    <!-- Botão Mobile -->
                    <div class="md:hidden flex items-center space-x-3">
                        <!-- Botão Dark Mode Mobile -->
                        <button id="theme-toggle-mobile" type="button" class="p-2 rounded-full bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-300 focus:outline-none">
                            <i id="theme-icon-mobile" class="fas fa-moon text-gray-700 dark:text-yellow-300"></i>
                        </button>
                        
                        <button class="relative w-8 h-8 flex flex-col justify-center items-center gap-1 focus:outline-none p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-300" id="menu-btn" aria-label="Menu">
                            <div class="hamburger-line-1"></div>
                            <div class="hamburger-line-2"></div>
                            <div class="hamburger-line-3"></div>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Menu Mobile -->
            <div class="mobile-menu md:hidden bg-white/95 backdrop-blur-md dark:bg-gray-900/95 shadow-lg rounded-b-2xl" id="mobile-menu">
                <ul class="px-4 py-6 space-y-3">
                    <li class="menu-item">
                        <a href="#home" class="mobile-nav-link">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="#sobre" class="mobile-nav-link">Sobre</a>
                    </li>
                    <li class="menu-item">
                        <a href="projetos.html" class="mobile-nav-link">Projetos</a>
                    </li>
                    <li class="menu-item">
                        <a href="formacao.php" class="mobile-nav-link">Formação</a>
                    </li>
                    <li class="menu-item">
                        <a href="#contato" class="mobile-nav-link">Contato</a>
                    </li>
                    <li class="menu-item flex space-x-4 justify-center py-3">
                        <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" class="social-icon-btn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com/joaopaulo-dev" target="_blank" class="social-icon-btn">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <!-- Hero Section -->
    <main class="flex-grow">
        <section id="home" class="min-h-screen pt-32 pb-16 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-white dark:from-gray-900 dark:to-gray-800 opacity-50 dark:opacity-80 z-0"></div>
            
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Texto -->
                    <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
                        <div class="bg-white/30 dark:bg-gray-800/30 backdrop-blur-sm p-8 rounded-3xl shadow-xl border border-white/20 dark:border-gray-700/20">
                            <div class="inline-block px-4 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 rounded-full text-sm font-medium mb-4">
                                Desenvolvedor Fullstack
                            </div>
                            
                            <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-4 leading-tight">
                                Hello <span class="text-primary-600 dark:text-primary-400">World</span>! <br>
                                Eu sou <span class="text-primary-600 dark:text-primary-400">João Paulo</span>
                            </h1>
                            
                            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8 leading-relaxed">
                                Transformo necessidades em aplicações reais e funcionais. 
                                Desenvolvo sistemas através da minha paixão por tecnologia, 
                                criando soluções inovadoras para desafios complexos.
                            </p>
                            
                            <div class="flex flex-wrap gap-3 mb-8">
                                <a href="#contato" class="btn-primary">
                                    <?= "Fale Comigo"?>
                                    <i class="fas fa-paper-plane ml-2"></i>
                                </a>
                                <a href="projetos.html" class="btn-secondary">
                                    Ver Projetos
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                            
                            <!-- Tecnologias -->
                            <div class="mt-8">
                                <p class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-3">Tecnologias que utilizo:</p>
                                <div class="tech-tags flex flex-wrap gap-2">
                                    <span class="tech-tag">
                                        <img src="./assets/icons/tech/github.svg" alt="GitHub" class="tech-icon">
                                        GitHub
                                    </span>
                                    <span class="tech-tag">
                                        <img src="./assets/icons/tech/html.svg" alt="HTML" class="tech-icon">
                                        HTML
                                    </span>
                                    <span class="tech-tag">
                                        <img src="./assets/icons/tech/css.svg" alt="CSS" class="tech-icon">
                                        CSS
                                    </span>
                                    <span class="tech-tag">
                                        <img src="./assets/icons/tech/javascript.svg" alt="JavaScript" class="tech-icon">
                                        JavaScript
                                    </span>
                                    <span class="tech-tag">
                                        <img src="./assets/icons/tech/reactjs.svg" alt="React" class="tech-icon">
                                        React
                                    </span>
                                    <span class="tech-tag">
                                        <img src="./assets/icons/tech/nodejs.svg" alt="Node.js" class="tech-icon">
                                        Node.js
                                    </span>
                                    <span class="tech-tag">
                                        <img src="./assets/icons/tech/php.svg" alt="PHP" class="tech-icon">
                                        PHP
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Imagem -->
                    <div class="order-1 lg:order-2 flex justify-center" data-aos="fade-left" data-aos-duration="1000">
                        <div class="relative">
                            <!-- Círculo decorativo -->
                            <div class="absolute -inset-4 rounded-full bg-gradient-to-r from-primary-400 to-blue-500 dark:from-primary-600 dark:to-blue-700 opacity-20 blur-2xl animate-pulse"></div>
                            
                            <!-- Foto de perfil -->
                            <div class="relative overflow-hidden rounded-full border-4 border-white dark:border-gray-800 shadow-2xl h-64 w-64 sm:h-80 sm:w-80 bg-white dark:bg-gray-800">
                                <img src="assets/images/perfil.webp" alt="João Paulo" class="w-full h-full object-cover">
                            </div>
                            
                            <!-- Elementos decorativos flutuantes -->
                            <div class="absolute -top-4 -right-4 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-float">
                                <img src="./assets/icons/tech/reactjs.svg" alt="React" class="w-8 h-8">
                            </div>
                            <div class="absolute -bottom-4 -left-4 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-float" style="animation-delay: 1s;">
                                <img src="./assets/icons/tech/nodejs.svg" alt="Node.js" class="w-8 h-8">
                            </div>
                            <div class="absolute top-1/2 -right-8 bg-white dark:bg-gray-800 rounded-full p-3 shadow-lg animate-float" style="animation-delay: 0.5s;">
                                <img src="./assets/icons/tech/javascript.svg" alt="JavaScript" class="w-8 h-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Scroll Down Button -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
                <button id="scrollToProjects" class="flex flex-col items-center group cursor-pointer animate-bounce">
                    <span class="text-sm text-gray-600 dark:text-gray-300 mb-2 font-medium">Role para baixo</span>
                    <div class="w-6 h-6 border-r-2 border-b-2 border-primary-600 dark:border-primary-400 transform rotate-45 group-hover:border-primary-800 dark:group-hover:border-primary-300 transition-colors duration-300"></div>
                </button>
            </div>
        </section>

    <!-- Seção de Projetos -->
<section id="projetos" class="py-24 px-4 sm:px-6 lg:px-8 relative">
    <div class="max-w-7xl mx-auto">
        <!-- Cabeçalho com efeito de gradiente -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
            <div class="inline-block px-4 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 rounded-full text-sm font-medium mb-4">
                Meus Trabalhos
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Projetos em <span class="text-primary-600 dark:text-primary-400">Destaque</span>
            </h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Conheça alguns dos projetos que desenvolvi, aplicando as melhores práticas e tecnologias modernas para criar soluções eficientes e inovadoras.
            </p>
        </div>



        <!-- Grid de Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="project-cards">
            <!-- Card 1 -->
            <div class="project-card-modern" data-category="web" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                <div class="project-image-wrapper">
                    <img src="assets/images/thumbnail/card01.png" alt="Client CLI" class="project-image-modern">
                    <div class="project-overlay-modern">
                        <div class="project-tech-stack">
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">CLI</span>
                            <span class="tech-badge">JavaScript</span>
                        </div>
                    </div>
                </div>
                <div class="project-content-modern">
                    <div class="project-header">
                        <h3 class="project-title">Client CLI</h3>
                        <div class="project-status">
                            <span class="status-badge completed">Concluído</span>
                        </div>
                    </div>
                    <p class="project-description">
                        Interface de linha de comando para gerenciamento de clientes com funcionalidades CRUD completas e relatórios automatizados.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-terminal mr-1"></i>CLI</span>
                        <span class="feature-tag"><i class="fas fa-users mr-1"></i>Clientes</span>
                        <span class="feature-tag"><i class="fas fa-chart-bar mr-1"></i>Relatórios</span>
                    </div>
                    <div class="project-actions">
                        <a href="#" class="btn-project-primary">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Ver Demo
                        </a>
                        <a href="#" class="btn-project-secondary">
                            <i class="fab fa-github mr-2"></i>
                            Código
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="project-card-modern" data-category="web api" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="project-image-wrapper">
                    <img src="assets/images/thumbnail/card02.webp" alt="API CAR" class="project-image-modern">
                    <div class="project-overlay-modern">
                        <div class="project-tech-stack">
                            <span class="tech-badge">React</span>
                            <span class="tech-badge">API</span>
                            <span class="tech-badge">FIPE</span>
                        </div>
                    </div>
                </div>
                <div class="project-content-modern">
                    <div class="project-header">
                        <h3 class="project-title">API CAR</h3>
                        <div class="project-status">
                            <span class="status-badge completed">Concluído</span>
                        </div>
                    </div>
                    <p class="project-description">
                        Aplicação que consome a API da tabela FIPE para buscar informações de veículos, como preço, marca, modelo e ano de fabricação.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-car mr-1"></i>Veículos</span>
                        <span class="feature-tag"><i class="fas fa-search mr-1"></i>Busca</span>
                        <span class="feature-tag"><i class="fas fa-dollar-sign mr-1"></i>Preços</span>
                    </div>
                    <div class="project-actions">
                        <a href="#" class="btn-project-primary">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Ver Demo
                        </a>
                        <a href="#" class="btn-project-secondary">
                            <i class="fab fa-github mr-2"></i>
                            Código
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="project-card-modern" data-category="web" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
                <div class="project-image-wrapper">
                    <img src="assets/images/thumbnail/card03.jpg" alt="RC Barbearia" class="project-image-modern">
                    <div class="project-overlay-modern">
                        <div class="project-tech-stack">
                            <span class="tech-badge">HTML</span>
                            <span class="tech-badge">CSS</span>
                            <span class="tech-badge">JavaScript</span>
                        </div>
                    </div>
                </div>
                <div class="project-content-modern">
                    <div class="project-header">
                        <h3 class="project-title">RC Barbearia</h3>
                        <div class="project-status">
                            <span class="status-badge completed">Concluído</span>
                        </div>
                    </div>
                    <p class="project-description">
                        Página institucional responsiva para divulgar serviços, preços e contatos da barbearia para agendamentos.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-cut mr-1"></i>Serviços</span>
                        <span class="feature-tag"><i class="fas fa-calendar mr-1"></i>Agendamento</span>
                        <span class="feature-tag"><i class="fas fa-mobile-alt mr-1"></i>Responsivo</span>
                    </div>
                    <div class="project-actions">
                        <a href="#" class="btn-project-primary">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Ver Demo
                        </a>
                        <a href="#" class="btn-project-secondary">
                            <i class="fab fa-github mr-2"></i>
                            Código
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="project-card-modern" data-category="web" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <div class="project-image-wrapper">
                    <img src="assets/images/thumbnail/card06.jpg" alt="Gerenciador De Grupos" class="project-image-modern">
                    <div class="project-overlay-modern">
                        <div class="project-tech-stack">
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">MySQL</span>
                            <span class="tech-badge">Bootstrap</span>
                        </div>
                    </div>
                </div>
                <div class="project-content-modern">
                    <div class="project-header">
                        <h3 class="project-title">Gerenciador De Grupos</h3>
                        <div class="project-status">
                            <span class="status-badge completed">Concluído</span>
                        </div>
                    </div>
                    <p class="project-description">
                        Sistema completo para gerenciamento de grupos universitários, facilitando a organização de projetos e atividades acadêmicas.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-users mr-1"></i>Grupos</span>
                        <span class="feature-tag"><i class="fas fa-tasks mr-1"></i>Projetos</span>
                        <span class="feature-tag"><i class="fas fa-graduation-cap mr-1"></i>Acadêmico</span>
                    </div>
                    <div class="project-actions">
                        <a href="#" class="btn-project-primary">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Ver Demo
                        </a>
                        <a href="#" class="btn-project-secondary">
                            <i class="fab fa-github mr-2"></i>
                            Código
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="project-card-modern" data-category="web" data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">
                <div class="project-image-wrapper">
                    <img src="assets/images/thumbnail/card05.avif" alt="Conversor de Moedas" class="project-image-modern">
                    <div class="project-overlay-modern">
                        <div class="project-tech-stack">
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">API</span>
                            <span class="tech-badge">CSS3</span>
                        </div>
                    </div>
                </div>
                <div class="project-content-modern">
                    <div class="project-header">
                        <h3 class="project-title">Conversor de Moedas</h3>
                        <div class="project-status">
                            <span class="status-badge completed">Concluído</span>
                        </div>
                    </div>
                    <p class="project-description">
                        Converta moedas de forma rápida e precisa com nosso conversor online! Taxas atualizadas em tempo real e interface simples.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-exchange-alt mr-1"></i>Conversão</span>
                        <span class="feature-tag"><i class="fas fa-clock mr-1"></i>Tempo Real</span>
                        <span class="feature-tag"><i class="fas fa-coins mr-1"></i>Moedas</span>
                    </div>
                    <div class="project-actions">
                        <a href="#" class="btn-project-primary">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Ver Demo
                        </a>
                        <a href="#" class="btn-project-secondary">
                            <i class="fab fa-github mr-2"></i>
                            Código
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="project-card-modern" data-category="web" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="project-image-wrapper">
                    <img src="assets/images/thumbnail/card04.jpeg" alt="Calculadora" class="project-image-modern">
                    <div class="project-overlay-modern">
                        <div class="project-tech-stack">
                            <span class="tech-badge">HTML</span>
                            <span class="tech-badge">CSS</span>
                            <span class="tech-badge">JavaScript</span>
                        </div>
                    </div>
                </div>
                <div class="project-content-modern">
                    <div class="project-header">
                        <h3 class="project-title">Calculadora</h3>
                        <div class="project-status">
                            <span class="status-badge completed">Concluído</span>
                        </div>
                    </div>
                    <p class="project-description">
                        Calculadora prática e eficiente para operações matemáticas básicas e avançadas com interface moderna.
                    </p>
                    <div class="project-features">
                        <span class="feature-tag"><i class="fas fa-calculator mr-1"></i>Cálculos</span>
                        <span class="feature-tag"><i class="fas fa-desktop mr-1"></i>Interface</span>
                        <span class="feature-tag"><i class="fas fa-cogs mr-1"></i>Avançado</span>
                    </div>
                    <div class="project-actions">
                        <a href="#" class="btn-project-primary">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Ver Demo
                        </a>
                        <a href="#" class="btn-project-secondary">
                            <i class="fab fa-github mr-2"></i>
                            Código
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Botão Ver Mais -->
        <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="450">
            <a href="projetos.html" class="btn-primary inline-flex items-center">
                Ver Mais Projetos
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
    <!-- Seção de Formação Acadêmica -->
    <section id="formacao" class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-950 relative overflow-hidden">
        <!-- Elementos decorativos de fundo -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10 pointer-events-none">
            <div class="absolute -top-24 -left-24 w-64 h-64 rounded-full bg-primary-300 dark:bg-primary-700 blur-3xl"></div>
            <div class="absolute top-1/2 -right-24 w-80 h-80 rounded-full bg-blue-300 dark:bg-blue-700 blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Cabeçalho da seção -->
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-block px-4 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 rounded-full text-sm font-medium mb-4">
                    Educação & Certificações
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Minha <span class="text-primary-600 dark:text-primary-400">Formação Acadêmica</span>
                </h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Conheça minha trajetória educacional e as certificações que obtive para aprimorar minhas habilidades e conhecimentos.
                </p>
            </div>

            <!-- Timeline de formação -->
            <div class="relative">
                <!-- Linha central da timeline -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-primary-500 to-blue-500 rounded-full"></div>
                
                <div class="space-y-12 md:space-y-0">
                    <!-- Formação 1 -->
                    <div class="md:grid md:grid-cols-2 md:gap-8 md:items-center" data-aos="fade-up" data-aos-duration="800">
                        <div class="md:text-right md:pr-12 mb-8 md:mb-0">
                            <div class="hidden md:block absolute right-1/2 top-0 transform translate-x-1/2 w-5 h-5 rounded-full bg-primary-500 border-4 border-white dark:border-gray-900 shadow-lg"></div>
                            <span class="inline-block px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 rounded-full text-sm font-medium mb-2">2023 - 2025</span>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Análise e Desenvolvimento de Sistemas</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Uniceub - Centro Universitário de Brasília</p>
                            <p class="text-gray-700 dark:text-gray-300">Graduação com foco em desenvolvimento de software, arquitetura de sistemas, banco de dados e engenharia de software.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                            <div class="flex items-center">
                                <div class="bg-gradient-to-br from-primary-500 to-blue-600 p-4 rounded-lg mr-4">
                                    <i class="fas fa-graduation-cap text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Habilidades Adquiridas</h4>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">Programação</span>
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">Banco de Dados</span>
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">Arquitetura de Sistemas</span>
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">Engenharia de Software</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Formação 2 -->
                    <div class="md:grid md:grid-cols-2 md:gap-8 md:items-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="md:order-2 md:text-left md:pl-12 mb-8 md:mb-0">
                            <div class="hidden md:block absolute left-1/2 top-1/3 transform -translate-x-1/2 w-5 h-5 rounded-full bg-blue-500 border-4 border-white dark:border-gray-900 shadow-lg"></div>
                            <span class="inline-block px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-2">2020 - 2022</span>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Ensino Médio</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Colégio Estadual de Educação do Campo Joaquim Cavalcante de Lima</p>

                        </div>
                        <div class="md:order-1 bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                            <div class="flex items-center">
                                <div class="bg-gradient-to-br from-blue-500 to-green-600 p-4 rounded-lg mr-4">
                                    <i class="fas fa-certificate text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Tecnologias Estudadas</h4>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">HTML5</span>
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">CSS3</span>
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">JavaScript</span>
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">React</span>
                                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md text-xs">Node.js</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Botão para ver mais certificações -->
            <div class="text-center mt-16" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <a href="formacao.php" class="btn-primary inline-flex items-center">
                    Ver Todas as Certificações
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
        <!-- Seção Sobre Mim -->
<section id="sobre" class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Elementos decorativos de fundo -->
    <div class="absolute top-0 right-0 -z-10 opacity-10 dark:opacity-5">
        <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#4F46E5" d="M37.5,-65.1C46.9,-55.3,51.2,-40.5,56.8,-27.3C62.3,-14.2,69.2,-2.7,67.4,7.8C65.7,18.2,55.3,27.5,45.9,36.3C36.5,45.1,28.1,53.3,17.8,57.9C7.4,62.5,-5,63.4,-17.5,61.2C-30.1,59,-42.9,53.7,-51.5,44.3C-60.1,34.9,-64.6,21.3,-67.4,7.2C-70.2,-6.9,-71.3,-21.5,-65.8,-33.2C-60.3,-44.9,-48.2,-53.7,-35.8,-62C-23.4,-70.3,-11.7,-78.1,1.6,-80.6C14.9,-83.1,29.8,-80.3,37.5,-65.1Z" transform="translate(100 100)" />
        </svg>
    </div>
    <div class="absolute bottom-0 left-0 -z-10 opacity-10 dark:opacity-5">
        <svg width="300" height="300" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#4F46E5" d="M47.7,-73.2C59.5,-65.3,65.9,-48.2,71.1,-31.9C76.3,-15.6,80.3,-0.1,76.8,13.2C73.4,26.5,62.6,37.6,50.9,47.4C39.2,57.2,26.5,65.7,11.9,70.7C-2.8,75.7,-19.3,77.2,-32.4,71.3C-45.5,65.4,-55.1,52.1,-62.4,37.8C-69.7,23.5,-74.6,8.1,-74.1,-7.2C-73.6,-22.5,-67.7,-37.8,-57.3,-47.8C-46.9,-57.8,-32,-62.5,-18.1,-69.5C-4.2,-76.5,8.8,-85.8,23.9,-84.8C39,-83.8,56.2,-72.5,47.7,-73.2Z" transform="translate(100 100)" />
        </svg>
    </div>
    
    <div class="max-w-7xl mx-auto">
        <!-- Cabeçalho da seção -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
            <div class="inline-block px-4 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 rounded-full text-sm font-medium mb-4">
                Conheça-me Melhor
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Sobre <span class="text-primary-600 dark:text-primary-400">Mim</span>
            </h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Desenvolvedor apaixonado por criar soluções digitais elegantes e funcionais, sempre em busca de novos desafios.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Coluna de imagem com efeito de profundidade -->
            <div class="relative" data-aos="fade-right" data-aos-duration="1000">
                <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl transform transition-transform hover:scale-105">
                    <img src="assets/images/perfil.webp" alt="Minha foto" class="w-full h-auto">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-6 text-white">
                            <p class="font-medium text-lg">Desenvolvedor Web Full Stack</p>
                            <p class="text-sm opacity-80">Transformando ideias em código</p>
                        </div>
                    </div>
                </div>
                <!-- Elementos decorativos -->
                <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-primary-200 dark:bg-primary-800 rounded-lg -z-10 animate-float"></div>
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-blue-200 dark:bg-blue-800 rounded-full -z-10 animate-float animation-delay-1000"></div>
            </div>
            
            <!-- Coluna de texto e métricas -->
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="space-y-6">
                    <p class="text-gray-700 dark:text-gray-300 text-lg">
                        Olá, meu nome é João Paulo e sou apaixonado por transformar ideias em código! Iniciei meus estudos em 2023 na graduação em Análise e Desenvolvimento de Sistemas. Desde então, venho me dedicando a criar soluções tecnológicas inovadoras e tenho apenas experiência com projetos reais.
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">
                        Atualmente, tenho o privilégio de atuar como Desenvolvedor Fullstack, trabalhando com diversas tecnologias para construir aplicações web completas e eficientes. Meu foco principal está em desenvolver sistemas robustos, interfaces intuitivas e experiências digitais que realmente agregam valor aos usuários.
                    </p>
                    
                    <!-- Métricas de experiência com design moderno -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center space-x-4">
                                <div class="bg-gradient-to-br from-primary-500 to-blue-600 p-3 rounded-lg">
                                    <i class="fas fa-calendar-alt text-white text-xl"></i>
                                </div>
                                <div>
                                    <span class="block text-3xl font-bold text-primary-600 dark:text-primary-400">02+</span>
                                    <span class="text-gray-600 dark:text-gray-400 text-sm">Anos de Estudos</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center space-x-4">
                                <div class="bg-gradient-to-br from-blue-500 to-purple-600 p-3 rounded-lg">
                                    <i class="fas fa-laptop-code text-white text-xl"></i>
                                </div>
                                <div>
                                    <span class="block text-3xl font-bold text-blue-600 dark:text-blue-400">15+</span>
                                    <span class="text-gray-600 dark:text-gray-400 text-sm">Projetos Reais</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg transform transition-all hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center space-x-4">
                                <div class="bg-gradient-to-br from-purple-500 to-pink-600 p-3 rounded-lg">
                                    <i class="fas fa-code-branch text-white text-xl"></i>
                                </div>
                                <div>
                                    <span class="block text-3xl font-bold text-purple-600 dark:text-purple-400">10+</span>
                                    <span class="text-gray-600 dark:text-gray-400 text-sm">Tecnologias</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botão de download CV -->
                    <div class="flex flex-wrap gap-4">
                        <a href="assets/docs/Currículo João Paulo Resende Costa.pdf" download="JoaoPaulo-Curriculo.pdf" 
                           class="btn-primary inline-flex items-center">
                            <i class="fas fa-download mr-2"></i> Download CV
                        </a>
                        <a href="#contato" class="btn-secondary inline-flex items-center">
                            <i class="fas fa-paper-plane mr-2"></i> Entre em Contato
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Seção de habilidades com design moderno -->
        <div class="mt-24" data-aos="fade-up" data-aos-duration="800">
            <div class="text-center mb-12">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Minhas <span class="text-primary-600 dark:text-primary-400">Habilidades</span>
                </h3>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Tecnologias e ferramentas com as quais trabalho para criar soluções digitais eficientes.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Coluna de habilidades técnicas -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-8" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-6 flex items-center">
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 p-2 rounded-lg mr-3">
                            <i class="fas fa-code"></i>
                        </span>
                        Habilidades Técnicas
                    </h4>
                    
                    <!-- Barras de progresso com design moderno -->
                    <div class="space-y-6">
                        <!-- HTML -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">HTML</span>
                                <span class="text-primary-600 dark:text-primary-400 font-medium">100%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-primary-500 to-blue-600 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <!-- CSS -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">CSS</span>
                                <span class="text-blue-600 dark:text-blue-400 font-medium">100%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-purple-600 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <!-- JavaScript -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">JavaScript</span>
                                <span class="text-purple-600 dark:text-purple-400 font-medium">80%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-purple-500 to-pink-600 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        
                        <!-- Git & GitHub -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Git & GitHub</span>
                                <span class="text-orange-600 dark:text-orange-400 font-medium">90%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-orange-500 to-red-600 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Coluna de habilidades adicionais -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-8" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-6 flex items-center">
                        <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 p-2 rounded-lg mr-3">
                            <i class="fas fa-server"></i>
                        </span>
                        Habilidades Adicionais
                    </h4>
                    
                    <!-- Barras de progresso com design moderno -->
                    <div class="space-y-6">
                        <!-- Node.js -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Node.js</span>
                                <span class="text-green-600 dark:text-green-400 font-medium">20%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-teal-600 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                        
                        <!-- PHP -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">PHP</span>
                                <span class="text-teal-600 dark:text-teal-400 font-medium">65%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        
                        <!-- React -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">React</span>
                                <span class="text-cyan-600 dark:text-cyan-400 font-medium">20%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                        
                        <!-- Tailwind -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Tailwind</span>
                                <span class="text-indigo-600 dark:text-indigo-400 font-medium">85%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        
                        <!-- Bootstrap -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Bootstrap</span>
                                <span class="text-purple-600 dark:text-purple-400 font-medium">85%</span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-purple-500 to-pink-600 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    </div>

<!-- Seção de Contato -->
<section id="contato" class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-950 relative overflow-hidden">
    <!-- Elementos decorativos de fundo -->
    <div class="absolute top-0 right-0 w-full h-full overflow-hidden opacity-10 pointer-events-none">
        <div class="absolute -top-24 -right-24 w-64 h-64 rounded-full bg-primary-300 dark:bg-primary-700 blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-80 h-80 rounded-full bg-blue-300 dark:bg-blue-700 blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <!-- Cabeçalho da seção -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
            <div class="inline-block px-4 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 rounded-full text-sm font-medium mb-4">
                Vamos Conversar
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Entre em <span class="text-primary-600 dark:text-primary-400">Contato</span>
            </h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Tem um projeto em mente ou quer conversar sobre oportunidades? Estou à disposição para discutir como posso ajudar a transformar suas ideias em realidade.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
            <!-- Informações de Contato -->
            <div class="lg:col-span-2 space-y-8" data-aos="fade-right" data-aos-duration="800">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-8 transform transition-all hover:shadow-2xl">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <span class="bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 p-2 rounded-lg mr-3">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        Informações de Contato
                    </h3>
                    
                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="flex items-start p-4 rounded-lg bg-gray-50 dark:bg-gray-700/50 transition-all hover:bg-primary-50 dark:hover:bg-primary-900/20">
                            <div class="bg-gradient-to-br from-primary-500 to-blue-600 p-3 rounded-lg mr-4 text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Email</h4>
                                <a href="mailto:joao.paulorcsilva@gmail.com" class="text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                    joao.paulorcsilva@gmail.com
                                </a>
                            </div>
                        </div>

                        <!-- Telefone -->
                        <div class="flex items-start p-4 rounded-lg bg-gray-50 dark:bg-gray-700/50 transition-all hover:bg-green-50 dark:hover:bg-green-900/20">
                            <div class="bg-gradient-to-br from-green-500 to-teal-600 p-3 rounded-lg mr-4 text-white">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Telefone</h4>
                                <a href="tel:61998278558" class="text-gray-600 dark:text-gray-400 hover:text-green-600 dark:hover:text-green-400 transition-colors">
                                    (61) 99827-8558
                                </a>
                            </div>
                        </div>

                        <!-- LinkedIn -->
                        <div class="flex items-start p-4 rounded-lg bg-gray-50 dark:bg-gray-700/50 transition-all hover:bg-blue-50 dark:hover:bg-blue-900/20">
                            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 p-3 rounded-lg mr-4 text-white">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">LinkedIn</h4>
                                <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" rel="noopener noreferrer" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                    linkedin.com/in/joaopauloresende
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Redes Sociais -->
                    <div class="mt-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Me siga nas redes</h4>
                        <div class="flex space-x-4">
                            <a href="https://github.com/joaopaulo-dev" target="_blank" rel="noopener noreferrer" class="bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 p-3 rounded-lg text-gray-700 dark:text-gray-300 transition-colors">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" rel="noopener noreferrer" class="bg-gray-100 dark:bg-gray-700 hover:bg-blue-100 dark:hover:bg-blue-900/30 p-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="https://wa.me/5561998278558" target="_blank" rel="noopener noreferrer" class="bg-gray-100 dark:bg-gray-700 hover:bg-green-100 dark:hover:bg-green-900/30 p-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 transition-colors">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                            <a href="https://instagram.com/joaopauloresende" target="_blank" rel="noopener noreferrer" class="bg-gray-100 dark:bg-gray-700 hover:bg-pink-100 dark:hover:bg-pink-900/30 p-3 rounded-lg text-gray-700 dark:text-gray-300 hover:text-pink-600 dark:hover:text-pink-400 transition-colors">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulário de Contato -->
            <div class="lg:col-span-3" data-aos="fade-left" data-aos-duration="800">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-8 transform transition-all hover:shadow-2xl">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 p-2 rounded-lg mr-3">
                            <i class="fas fa-envelope-open-text"></i>
                        </span>
                        Envie uma Mensagem
                    </h3>
                    
                    <form action="enviar_email.php" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome" class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">Nome</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" id="nome" name="nome" required 
                                        class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white transition-colors">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email" name="email" required 
                                        class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white transition-colors">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="assunto" class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">Assunto</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-tag text-gray-400"></i>
                                </div>
                                <input type="text" id="assunto" name="assunto" required 
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white transition-colors">
                            </div>
                        </div>

                        <div>
                            <label for="mensagem" class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">Mensagem</label>
                            <div class="relative">
                                <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                                    <i class="fas fa-comment-alt text-gray-400"></i>
                                </div>
                                <textarea id="mensagem" name="mensagem" rows="5" required 
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-white transition-colors"></textarea>
                            </div>
                        </div>

                        <button type="submit" 
                            class="w-full px-6 py-4 bg-gradient-to-r from-primary-600 to-blue-600 hover:from-primary-700 hover:to-blue-700 text-white font-medium rounded-lg transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Enviar Mensagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Mapa ou Localização -->
        <div class="mt-16 rounded-xl overflow-hidden shadow-xl" data-aos="fade-up" data-aos-duration="800">
            <div class="bg-white dark:bg-gray-800 p-4 text-center">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Localização</h3>
                <p class="text-gray-600 dark:text-gray-400">Brasília, DF - Brasil</p>
            </div>
            <div class="h-80 w-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245795.90869912957!2d-48.01233293515625!3d-15.721713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3d18df9ae275%3A0x738470e469754a24!2sBras%C3%ADlia%2C%20DF!5e0!3m2!1spt-BR!2sbr!4v1651271337719!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

  <!-- Footer com design moderno -->
  <footer class="bg-gradient-to-b from-gray-900 to-black text-gray-300 pt-16 pb-8 relative overflow-hidden">
    <!-- Elementos decorativos de fundo -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-5 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 rounded-full bg-primary-500 blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 rounded-full bg-blue-500 blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <!-- Seção superior do footer -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
            <!-- Coluna 1: Logo e descrição -->
            <div class="md:col-span-5 space-y-6">
                <div class="flex items-center">
                    <div class="bg-white/10 p-2 rounded-xl">
                        <img src="assets/icons/Logotipo_empresa_de_programação_sistemas_e_tecnologia-removebg-preview.png" 
                             alt="João Paulo - Dev Fullstack" 
                             class="h-12">
                    </div>
                    <div class="ml-3">
                        <h3 class="text-xl font-bold text-white">João Paulo</h3>
                        <p class="text-sm text-gray-400">Desenvolvedor Fullstack</p>
                    </div>
                </div>
                
                <p class="text-gray-400 text-base leading-relaxed">
                    Apaixonado por criar soluções inovadoras e eficientes que transformam ideias em realidade através do código. Especializado em desenvolvimento web fullstack com foco em experiências digitais modernas e responsivas.
                </p>
                
                <div class="pt-4">
                    <div class="flex space-x-4">
                        <a href="https://github.com/joaopaulo-dev" target="_blank" rel="noopener noreferrer"
                           class="bg-gray-800 hover:bg-gray-700 p-3 rounded-lg text-gray-300 hover:text-white transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" rel="noopener noreferrer"
                           class="bg-gray-800 hover:bg-blue-700 p-3 rounded-lg text-gray-300 hover:text-white transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                        <a href="https://wa.me/5561998278558" target="_blank" rel="noopener noreferrer"
                           class="bg-gray-800 hover:bg-green-700 p-3 rounded-lg text-gray-300 hover:text-white transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                        <a href="https://instagram.com/joaopauloresende" target="_blank" rel="noopener noreferrer"
                           class="bg-gray-800 hover:bg-pink-700 p-3 rounded-lg text-gray-300 hover:text-white transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Coluna 2: Links rápidos -->
            <div class="md:col-span-3 md:ml-auto">
                <h3 class="text-white font-bold text-lg mb-6 flex items-center">
                    <span class="bg-primary-900/50 text-primary-400 p-2 rounded-lg mr-3">
                        <i class="fas fa-link"></i>
                    </span>
                    Links Rápidos
                </h3>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                            <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#sobre" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                            <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a href="#projetos" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                            <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                            Projetos
                        </a>
                    </li>
                    <li>
                        <a href="#formacao" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                            <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                            Formação
                        </a>
                    </li>
                    <li>
                        <a href="#contato" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                            <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                            Contato
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Coluna 3: Contato -->
            <div class="md:col-span-4">
                <h3 class="text-white font-bold text-lg mb-6 flex items-center">
                    <span class="bg-blue-900/50 text-blue-400 p-2 rounded-lg mr-3">
                        <i class="fas fa-envelope-open-text"></i>
                    </span>
                    Entre em Contato
                </h3>
                <ul class="space-y-5">
                    <li class="flex items-start group">
                        <div class="bg-gray-800 group-hover:bg-primary-900/50 p-3 rounded-lg mr-4 transition-all duration-300">
                            <i class="fas fa-envelope text-primary-400 group-hover:text-primary-300"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-gray-300 uppercase tracking-wider">Email</h4>
                            <a href="mailto:joao.paulorcsilva@gmail.com" class="text-gray-400 hover:text-primary-400 transition-all duration-300">
                                joao.paulorcsilva@gmail.com
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start group">
                        <div class="bg-gray-800 group-hover:bg-green-900/50 p-3 rounded-lg mr-4 transition-all duration-300">
                            <i class="fas fa-phone-alt text-green-400 group-hover:text-green-300"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-gray-300 uppercase tracking-wider">Telefone</h4>
                            <a href="tel:61998278558" class="text-gray-400 hover:text-green-400 transition-all duration-300">
                                (61) 99827-8558
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start group">
                        <div class="bg-gray-800 group-hover:bg-blue-900/50 p-3 rounded-lg mr-4 transition-all duration-300">
                            <i class="fab fa-linkedin-in text-blue-400 group-hover:text-blue-300"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-gray-300 uppercase tracking-wider">LinkedIn</h4>
                            <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" rel="noopener noreferrer"
                               class="text-gray-400 hover:text-blue-400 transition-all duration-300">
                                linkedin.com/in/joaopauloresende
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divisor com gradiente -->
        <div class="mt-16 pt-8 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Direitos autorais -->
                <div class="mb-6 md:mb-0">
                    <p class="text-gray-500 flex items-center">
                        <span class="inline-block mr-2">
                            <i class="far fa-copyright text-primary-500"></i>
                        </span>
                        <span>2023 João Paulo. Todos os direitos reservados.</span>
                    </p>
                </div>

                <!-- Créditos -->
                <div>
                    <p class="text-gray-600 flex items-center">
                        <span>Feito com</span>
                        <i class="fas fa-heart text-red-500 mx-2 animate-pulse"></i>
                        <span>e</span>
                        <i class="fas fa-coffee text-amber-600 mx-2"></i>
                        <span>por João Paulo</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
    </div>
</footer>
    <!-- Formspree para envio de email (mais simples e confiável) -->
     
     <!-- AOS (Animate On Scroll) Scripts -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
        // Inicializa as animações AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
     </script>
     
     <!-- Script principal -->
     <script src="index.js"></script>
     
     <!-- Script para feedback do formulário de contato -->
     <script>
        // Função para mostrar mensagens de feedback
        function mostrarMensagem(tipo, mensagem) {
            // Remove mensagens existentes
            const mensagensExistentes = document.querySelectorAll('.mensagem-feedback');
            mensagensExistentes.forEach(msg => msg.remove());
            
            // Cria nova mensagem
            const divMensagem = document.createElement('div');
            divMensagem.className = `mensagem-feedback fixed top-20 right-4 z-50 p-4 rounded-lg shadow-lg max-w-md transform transition-all duration-500 ${
                tipo === 'sucesso' 
                    ? 'bg-green-500 text-white' 
                    : 'bg-red-500 text-white'
            }`;
            
            divMensagem.innerHTML = `
                <div class="flex items-center">
                    <i class="fas ${tipo === 'sucesso' ? 'fa-check-circle' : 'fa-exclamation-triangle'} mr-3"></i>
                    <span>${mensagem}</span>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-white hover:text-gray-200">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            
            document.body.appendChild(divMensagem);
            
            // Remove automaticamente após 5 segundos
            setTimeout(() => {
                if (divMensagem.parentNode) {
                    divMensagem.style.transform = 'translateX(100%)';
                    setTimeout(() => divMensagem.remove(), 300);
                }
            }, 5000);
        }
        
        // Verifica se há parâmetros de status na URL
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            const mensagem = urlParams.get('msg');
            
            if (status && mensagem) {
                mostrarMensagem(status, decodeURIComponent(mensagem));
                
                // Remove os parâmetros da URL sem recarregar a página
                const novaUrl = window.location.pathname + window.location.hash;
                window.history.replaceState({}, document.title, novaUrl);
            }
        });
        
        // Intercepta o envio do formulário para envio múltiplo (EmailJS + Formspree + PHP)
         document.querySelector('form[action="enviar_email.php"]').addEventListener('submit', function(e) {
             e.preventDefault(); // Impede envio padrão
             
             const botaoSubmit = this.querySelector('button[type="submit"]');
             const textoOriginal = botaoSubmit.innerHTML;
             const form = this;
             
             botaoSubmit.disabled = true;
             botaoSubmit.innerHTML = `
                 <i class="fas fa-spinner fa-spin mr-2"></i>
                 Enviando...
             `;
             
             // Dados do formulário
             const formData = new FormData(form);
             const nome = formData.get('nome');
             const email = formData.get('email');
             const assunto = formData.get('assunto');
             const mensagem = formData.get('mensagem');
             
             // Validação básica
             if (!nome || !email || !assunto || !mensagem) {
                 alert('Por favor, preencha todos os campos.');
                 botaoSubmit.disabled = false;
                 botaoSubmit.innerHTML = textoOriginal;
                 return;
             }
             
             // Primeiro: tentar enviar via EmailJS (mais confiável)
             tentarEmailJS(nome, email, assunto, mensagem, form, botaoSubmit, textoOriginal);
         });
         
         // Função para tentar EmailJS
         function tentarEmailJS(nome, email, assunto, mensagem, form, botaoSubmit, textoOriginal) {
             console.log('📧 Tentando enviar via EmailJS...');
             
             // Carregar EmailJS dinamicamente se não estiver carregado
             if (typeof emailjs === 'undefined') {
                 const script = document.createElement('script');
                 script.src = 'https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js';
                 script.onload = function() {
                     console.log('📦 EmailJS carregado');
                     enviarViaEmailJS(nome, email, assunto, mensagem, form, botaoSubmit, textoOriginal);
                 };
                 script.onerror = function() {
                     console.log('❌ Erro ao carregar EmailJS, tentando Formspree...');
                     tentarFormspree(nome, email, assunto, mensagem, form, botaoSubmit, textoOriginal);
                 };
                 document.head.appendChild(script);
             } else {
                 enviarViaEmailJS(nome, email, assunto, mensagem, form, botaoSubmit, textoOriginal);
             }
         }
         
         // Função para enviar via EmailJS
         function enviarViaEmailJS(nome, email, assunto, mensagem, form, botaoSubmit, textoOriginal) {
             // Inicializar EmailJS
             emailjs.init('iQRzEf_eTYt8ZJLhJ');
             
             const templateParams = {
                 from_name: nome,
                 from_email: email,
                 to_name: 'João Paulo',
                 to_email: 'joao.paulorcsilva@gmail.com',
                 subject: assunto,
                 message: mensagem + '\n\nEnviado via Portfolio\nData: ' + new Date().toLocaleString(),
                 reply_to: email
             };
             
             emailjs.send('service_8x7yr2r', 'template_ixqhqxr', templateParams)
                 .then(function(response) {
                     console.log('✅ Email enviado via EmailJS! Status:', response.status);
                     // Sucesso! Finalizar processo
                     finalizarEnvio(form, botaoSubmit, textoOriginal, true, 'Email enviado com sucesso!');
                 })
                 .catch(function(error) {
                     console.log('❌ EmailJS falhou:', error);
                     // Se EmailJS falhar, tentar Formspree
                     tentarFormspree(nome, email, assunto, mensagem, form, botaoSubmit, textoOriginal);
                 });
         }
         
         // Função para tentar Formspree (backup)
         function tentarFormspree(nome, email, assunto, mensagem, form, botaoSubmit, textoOriginal) {
             console.log('📧 Tentando Formspree como backup...');
             
             const formspreeData = new FormData();
             formspreeData.append('name', nome);
             formspreeData.append('email', email);
             formspreeData.append('subject', assunto);
             formspreeData.append('message', mensagem);
             formspreeData.append('_replyto', email);
             formspreeData.append('_subject', `[Portfolio] ${assunto}`);
             
             fetch('https://formspree.io/joao.paulorcsilva@gmail.com', {
                 method: 'POST',
                 body: formspreeData,
                 headers: {
                     'Accept': 'application/json'
                 }
             })
             .then(response => {
                 if (response.ok) {
                     console.log('✅ Email enviado via Formspree');
                     finalizarEnvio(form, botaoSubmit, textoOriginal, true, 'Email enviado com sucesso!');
                 } else {
                     console.log('⚠️ Formspree falhou, salvando localmente...');
                     enviarParaPHP(form, botaoSubmit, textoOriginal);
                 }
             })
             .catch(error => {
                 console.log('❌ Erro no Formspree:', error);
                 enviarParaPHP(form, botaoSubmit, textoOriginal);
             });
         }
         
         // Função para finalizar envio com sucesso
         function finalizarEnvio(form, botaoSubmit, textoOriginal, sucesso, mensagem) {
             botaoSubmit.disabled = false;
             botaoSubmit.innerHTML = textoOriginal;
             
             if (sucesso) {
                 mostrarMensagem('sucesso', mensagem);
                 form.reset(); // Limpar formulário
             } else {
                 mostrarMensagem('erro', mensagem);
             }
         }
        
        // Função para enviar para PHP (salvar arquivo)
        function enviarParaPHP(form, botaoSubmit, textoOriginal) {
            const formData = new FormData(form);
            
            fetch('enviar_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                // Redireciona para a resposta do PHP
                window.location.href = response.url;
            })
            .catch(error => {
                console.error('Erro:', error);
                botaoSubmit.disabled = false;
                botaoSubmit.innerHTML = textoOriginal;
                mostrarMensagem('erro', 'Erro ao enviar mensagem. Tente novamente.');
            });
        }
     </script>
  </body>
</html>