<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formação Acadêmica - João Paulo Dev Fullstack</title>
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
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
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
                        <a href="index.html" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Home</a>
                        <a href="index.html#sobre" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Sobre</a>
                        <a href="projetos.html" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Projetos</a>
                        <a href="formacao.php" class="nav-link text-primary-600 dark:text-primary-400 px-4 py-2 rounded-full transition duration-300 font-medium bg-primary-50 dark:bg-primary-900/30">Formação</a>
                        <a href="index.html#contato" class="nav-link text-gray-800 hover:text-primary-600 px-4 py-2 rounded-full transition duration-300 dark:text-gray-200 dark:hover:text-primary-400 font-medium">Contato</a>
                        
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
                        <a href="index.html" class="mobile-nav-link">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="index.html#sobre" class="mobile-nav-link">Sobre</a>
                    </li>
                    <li class="menu-item">
                        <a href="projetos.html" class="mobile-nav-link">Projetos</a>
                    </li>
                    <li class="menu-item">
                        <a href="formacao.php" class="mobile-nav-link">Formação</a>
                    </li>
                    <li class="menu-item">
                        <a href="index.html#contato" class="mobile-nav-link">Contato</a>
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

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        <!-- Hero Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-blue-50 to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 opacity-70"></div>
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
                <div class="absolute top-20 left-1/4 w-72 h-72 rounded-full bg-primary-400 blur-3xl animate-pulse-slow"></div>
                <div class="absolute bottom-20 right-1/4 w-96 h-96 rounded-full bg-blue-400 blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
            </div>
            
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                    <div class="inline-block px-6 py-2 bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 rounded-full text-sm font-medium mb-6">
                        <i class="fas fa-graduation-cap mr-2"></i>
                        Minha Jornada Acadêmica
                    </div>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                        Formação <span class="text-primary-600 dark:text-primary-400">Acadêmica</span>
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                        Conheça minha trajetória educacional e as competências que adquiri ao longo dos anos, 
                        sempre em busca do conhecimento e da excelência profissional.
                    </p>
                </div>
            </div>
        </section>

        <!-- Timeline de Formação -->
        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="relative">
                    <!-- Linha vertical da timeline -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-primary-400 to-blue-400 rounded-full hidden md:block"></div>
                    
                    <!-- Item 1 - Ensino Superior -->
                    <div class="relative mb-16" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <!-- Ícone para mobile (aparece apenas no mobile) -->
                        <div class="flex justify-center mb-6 md:hidden">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg mobile-timeline-icon">
                                <i class="fas fa-graduation-cap text-white text-2xl"></i>
                            </div>
                        </div>
                        
                        <div class="flex flex-col md:flex-row items-center">
                            <!-- Conteúdo (lado esquerdo no desktop) -->
                            <div class="md:w-5/12 md:pr-8 mb-8 md:mb-0">
                                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                    <div class="flex items-center mb-6">
                                        <div class="bg-primary-100 dark:bg-primary-900/30 p-3 rounded-xl mr-4">
                                            <i class="fas fa-university text-2xl text-primary-600 dark:text-primary-400"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">Análise e Desenvolvimento de Sistemas</h3>
                                            <p class="text-primary-600 dark:text-primary-400 font-medium">Tecnólogo</p>
                                        </div>
                                    </div>
                                    <div class="space-y-4">
                                        <div class="flex items-center text-gray-600 dark:text-gray-400">
                                            <i class="fas fa-calendar-alt mr-3 text-primary-500"></i>
                                            <span>2023 - 2025 (Cursando)</span>
                                        </div>
                                        <div class="flex items-center text-gray-600 dark:text-gray-400">
                                            <i class="fas fa-map-marker-alt mr-3 text-primary-500"></i>
                                            <span>Brasília, DF</span>
                                        </div>
                                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                            Formação focada no desenvolvimento de sistemas, análise de requisitos, 
                                            programação e gestão de projetos de software.
                                        </p>
                                        <div class="flex flex-wrap gap-2 mt-4">
                                            <span class="px-3 py-1 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300 rounded-full text-sm">Desenvolvimento Web</span>
                                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm">Banco de Dados</span>
                                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm">Análise de Sistemas</span>
                                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm">Gestão de Projetos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Ícone central (oculto no mobile) -->
                            <div class="md:w-2/12 justify-center mb-8 md:mb-0 hidden md:flex">
                                <div class="w-16 h-16 bg-primary-600 dark:bg-primary-500 rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-graduation-cap text-white text-xl"></i>
                                </div>
                            </div>
                            
                            <!-- Espaço vazio (lado direito) -->
                            <div class="md:w-5/12"></div>
                        </div>
                    </div>

                    <!-- Item 2 - Curso Técnico -->
                    <div class="relative mb-16" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="flex flex-col md:flex-row items-center">
                            <!-- Espaço vazio (lado esquerdo) -->
                            <div class="md:w-5/12"></div>
                            
                            <!-- Ícone central -->
                            <div class="md:w-2/12 flex justify-center mb-8 md:mb-0">
                                <div class="w-16 h-16 bg-green-600 dark:bg-green-500 rounded-full flex items-center justify-center shadow-lg">
                                    <i class="fas fa-school text-white text-xl"></i>
                                </div>
                            </div>
                            
                            <!-- Conteúdo (lado direito no desktop) -->
                            <div class="md:w-5/12 md:pl-8">
                                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                    <div class="flex items-center mb-6">
                                        <div class="bg-green-100 dark:bg-green-900/30 p-3 rounded-xl mr-4">
                                            <i class="fas fa-school text-2xl text-green-600 dark:text-green-400"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">Ensino Médio</h3>
                                            <p class="text-green-600 dark:text-green-400 font-medium">Colégio Estadual de Educação do Campo Joaquim Cavalcante de Lima</p>
                                        </div>
                                    </div>
                                    <div class="space-y-4">
                                        <div class="flex items-center text-gray-600 dark:text-gray-400">
                                            <i class="fas fa-calendar-alt mr-3 text-green-500"></i>
                                            <span>2020 - 2022</span>
                                        </div>
                                        <div class="flex items-center text-gray-600 dark:text-gray-400">
                                            <i class="fas fa-map-marker-alt mr-3 text-green-500"></i>
                                            <span>Educação do Campo</span>
                                        </div>
                                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                            Formação básica com foco em ciências exatas e desenvolvimento do pensamento lógico, 
                                            preparando para o ensino superior.
                                        </p>
                                        <div class="flex flex-wrap gap-2 mt-4">
                                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-sm">Matemática</span>
                                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm">Física</span>
                                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm">Lógica</span>
                                            <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-sm">Ciências</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!-- Seção de Certificações -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                        Certificações e <span class="text-primary-600 dark:text-primary-400">Cursos</span>
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Certificações e cursos complementares que ampliam meu conhecimento técnico
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Certificação 1 -->
                    <div class="certification-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="certification-header">
                            <div class="certification-icon bg-primary-100 dark:bg-primary-900/30">
                                <i class="fab fa-js-square text-primary-600 dark:text-primary-400"></i>
                            </div>
                            <div class="certification-badge">
                                <span class="text-xs font-medium text-primary-600 dark:text-primary-400">Certificado</span>
                            </div>
                        </div>
                        <div class="certification-content">
                            <h3 class="certification-title">JavaScript Moderno</h3>
                            <p class="certification-provider">Udemy</p>
                            <p class="certification-description">
                                Curso completo de JavaScript ES6+, incluindo conceitos avançados, async/await, e frameworks modernos.
                            </p>
                            <div class="certification-skills">
                                <span class="skill-tag">ES6+</span>
                                <span class="skill-tag">Async/Await</span>
                                <span class="skill-tag">DOM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Certificação 2 -->
                    <div class="certification-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="certification-header">
                            <div class="certification-icon bg-blue-100 dark:bg-blue-900/30">
                                <i class="fab fa-react text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div class="certification-badge">
                                <span class="text-xs font-medium text-blue-600 dark:text-blue-400">Certificado</span>
                            </div>
                        </div>
                        <div class="certification-content">
                            <h3 class="certification-title">React.js Completo</h3>
                            <p class="certification-provider">Rocketseat</p>
                            <p class="certification-description">
                                Desenvolvimento de aplicações modernas com React, incluindo hooks, context API e gerenciamento de estado.
                            </p>
                            <div class="certification-skills">
                                <span class="skill-tag">React Hooks</span>
                                <span class="skill-tag">Context API</span>
                                <span class="skill-tag">Redux</span>
                            </div>
                        </div>
                    </div>

                    <!-- Certificação 3 -->
                    <div class="certification-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="certification-header">
                            <div class="certification-icon bg-green-100 dark:bg-green-900/30">
                                <i class="fab fa-node-js text-green-600 dark:text-green-400"></i>
                            </div>
                            <div class="certification-badge">
                                <span class="text-xs font-medium text-green-600 dark:text-green-400">Certificado</span>
                            </div>
                        </div>
                        <div class="certification-content">
                            <h3 class="certification-title">Node.js & Express</h3>
                            <p class="certification-provider">Alura</p>
                            <p class="certification-description">
                                Desenvolvimento de APIs RESTful com Node.js, Express, autenticação JWT e integração com bancos de dados.
                            </p>
                            <div class="certification-skills">
                                <span class="skill-tag">Express.js</span>
                                <span class="skill-tag">JWT</span>
                                <span class="skill-tag">MongoDB</span>
                            </div>
                        </div>
                    </div>

                    <!-- Certificação 4 -->
                    <div class="certification-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <div class="certification-header">
                            <div class="certification-icon bg-purple-100 dark:bg-purple-900/30">
                                <i class="fas fa-database text-purple-600 dark:text-purple-400"></i>
                            </div>
                            <div class="certification-badge">
                                <span class="text-xs font-medium text-purple-600 dark:text-purple-400">Certificado</span>
                            </div>
                        </div>
                        <div class="certification-content">
                            <h3 class="certification-title">Banco de Dados</h3>
                            <p class="certification-provider">Coursera</p>
                            <p class="certification-description">
                                Modelagem de dados, SQL avançado, otimização de consultas e administração de bancos relacionais e NoSQL.
                            </p>
                            <div class="certification-skills">
                                <span class="skill-tag">SQL</span>
                                <span class="skill-tag">PostgreSQL</span>
                                <span class="skill-tag">NoSQL</span>
                            </div>
                        </div>
                    </div>

                    <!-- Certificação 5 -->
                    <div class="certification-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <div class="certification-header">
                            <div class="certification-icon bg-orange-100 dark:bg-orange-900/30">
                                <i class="fab fa-aws text-orange-600 dark:text-orange-400"></i>
                            </div>
                            <div class="certification-badge">
                                <span class="text-xs font-medium text-orange-600 dark:text-orange-400">Em Progresso</span>
                            </div>
                        </div>
                        <div class="certification-content">
                            <h3 class="certification-title">AWS Cloud Practitioner</h3>
                            <p class="certification-provider">Amazon Web Services</p>
                            <p class="certification-description">
                                Fundamentos de computação em nuvem, serviços AWS, segurança e arquitetura de soluções escaláveis.
                            </p>
                            <div class="certification-skills">
                                <span class="skill-tag">Cloud Computing</span>
                                <span class="skill-tag">EC2</span>
                                <span class="skill-tag">S3</span>
                            </div>
                        </div>
                    </div>

                    <!-- Certificação 6 -->
                    <div class="certification-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                        <div class="certification-header">
                            <div class="certification-icon bg-red-100 dark:bg-red-900/30">
                                <i class="fab fa-git-alt text-red-600 dark:text-red-400"></i>
                            </div>
                            <div class="certification-badge">
                                <span class="text-xs font-medium text-red-600 dark:text-red-400">Certificado</span>
                            </div>
                        </div>
                        <div class="certification-content">
                            <h3 class="certification-title">Git & GitHub</h3>
                            <p class="certification-provider">Digital Innovation One</p>
                            <p class="certification-description">
                                Controle de versão, colaboração em equipe, workflows com Git e GitHub, CI/CD e boas práticas.
                            </p>
                            <div class="certification-skills">
                                <span class="skill-tag">Git</span>
                                <span class="skill-tag">GitHub</span>
                                <span class="skill-tag">CI/CD</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Competências -->
        <section class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                        Competências <span class="text-primary-600 dark:text-primary-400">Desenvolvidas</span>
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                        Habilidades técnicas e soft skills adquiridas ao longo da minha formação
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Competências Técnicas -->
                    <div data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700">
                            <div class="flex items-center mb-8">
                                <div class="bg-primary-100 dark:bg-primary-900/30 p-3 rounded-xl mr-4">
                                    <i class="fas fa-code text-2xl text-primary-600 dark:text-primary-400"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Competências Técnicas</h3>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="skill-progress-item">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">JavaScript/TypeScript</span>
                                        <span class="text-primary-600 dark:text-primary-400 font-bold">90%</span>
                                    </div>
                                    <div class="skill-progress-bar">
                                        <div class="skill-progress-fill" style="width: 90%"></div>
                                    </div>
                                </div>

                                <div class="skill-progress-item">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">React.js/Next.js</span>
                                        <span class="text-primary-600 dark:text-primary-400 font-bold">85%</span>
                                    </div>
                                    <div class="skill-progress-bar">
                                        <div class="skill-progress-fill" style="width: 85%"></div>
                                    </div>
                                </div>

                                <div class="skill-progress-item">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">Node.js/Express</span>
                                        <span class="text-primary-600 dark:text-primary-400 font-bold">80%</span>
                                    </div>
                                    <div class="skill-progress-bar">
                                        <div class="skill-progress-fill" style="width: 80%"></div>
                                    </div>
                                </div>

                                <div class="skill-progress-item">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">Banco de Dados</span>
                                        <span class="text-primary-600 dark:text-primary-400 font-bold">75%</span>
                                    </div>
                                    <div class="skill-progress-bar">
                                        <div class="skill-progress-fill" style="width: 75%"></div>
                                    </div>
                                </div>

                                <div class="skill-progress-item">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">Git/GitHub</span>
                                        <span class="text-primary-600 dark:text-primary-400 font-bold">85%</span>
                                    </div>
                                    <div class="skill-progress-bar">
                                        <div class="skill-progress-fill" style="width: 85%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Soft Skills -->
                    <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-100 dark:border-gray-700">
                            <div class="flex items-center mb-8">
                                <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-xl mr-4">
                                    <i class="fas fa-users text-2xl text-blue-600 dark:text-blue-400"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Soft Skills</h3>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="soft-skill-item">
                                    <div class="flex items-center mb-3">
                                        <div class="w-3 h-3 bg-primary-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">Resolução de Problemas</span>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm ml-6">
                                        Capacidade de analisar problemas complexos e desenvolver soluções eficientes e criativas.
                                    </p>
                                </div>

                                <div class="soft-skill-item">
                                    <div class="flex items-center mb-3">
                                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">Trabalho em Equipe</span>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm ml-6">
                                        Experiência em colaboração, comunicação efetiva e contribuição para objetivos comuns.
                                    </p>
                                </div>

                                <div class="soft-skill-item">
                                    <div class="flex items-center mb-3">
                                        <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">Aprendizado Contínuo</span>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm ml-6">
                                        Sempre em busca de novas tecnologias e metodologias para aprimorar minhas habilidades.
                                    </p>
                                </div>

                                <div class="soft-skill-item">
                                    <div class="flex items-center mb-3">
                                        <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">Pensamento Crítico</span>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm ml-6">
                                        Análise objetiva de situações e tomada de decisões baseadas em dados e evidências.
                                    </p>
                                </div>

                                <div class="soft-skill-item">
                                    <div class="flex items-center mb-3">
                                        <div class="w-3 h-3 bg-orange-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700 dark:text-gray-300 font-medium">Adaptabilidade</span>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm ml-6">
                                        Flexibilidade para se adaptar a novas tecnologias, metodologias e ambientes de trabalho.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-primary-600 to-blue-600 dark:from-primary-700 dark:to-blue-700">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
                    Vamos Construir Algo Incrível Juntos?
                </h2>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Com uma base sólida em educação e experiência prática, estou pronto para contribuir com seu próximo projeto.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="index.html#contato" class="bg-white text-primary-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-envelope mr-2"></i>
                        Entrar em Contato
                    </a>
                    <a href="projetos.html" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-primary-600 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-code mr-2"></i>
                        Ver Projetos
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
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
                            <a href="index.html" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                                <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="index.html#sobre" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                                <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                                Sobre
                            </a>
                        </li>
                        <li>
                            <a href="projetos.html" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                                <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                                Projetos
                            </a>
                        </li>
                        <li>
                            <a href="formacao.php" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
                                <span class="inline-block w-2 h-2 rounded-full bg-primary-500 mr-3 group-hover:w-3 transition-all duration-300"></span>
                                Formação
                            </a>
                        </li>
                        <li>
                            <a href="index.html#contato" class="group flex items-center text-gray-400 hover:text-white transition-all duration-300">
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
</body>
</html>