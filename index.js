document.addEventListener('DOMContentLoaded', function() {
    // ========== Scroll Suave SIMPLES com Tailwind ==========
    // Com scroll-smooth no HTML, só precisamos fechar o menu mobile
    
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function() {
            // Fechar menu mobile se estiver aberto
            const mobileMenu = document.getElementById('mobile-menu');
            const menuBtn = document.getElementById('menu-btn');
            if (mobileMenu && mobileMenu.classList.contains('open')) {
                menuBtn.classList.remove('active');
                mobileMenu.classList.remove('open');
            }
        });
    });

    // ========== Filtro de Projetos ==========
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    // Inicializar filtros
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remover classe active de todos os botões
            filterBtns.forEach(b => b.classList.remove('active'));
            
            // Adicionar classe active ao botão clicado
            btn.classList.add('active');
            
            // Obter categoria do filtro
            const filterValue = btn.getAttribute('data-filter');
            
            // Filtrar projetos
            projectCards.forEach(card => {
                if (filterValue === 'all') {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else if (card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // ========== Menu Mobile ==========
    // Suporte para ambos os IDs (antigo e novo)
    const menuBtn = document.getElementById('menu-btn') || document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobile-menu') || document.getElementById('mobileMenu');
    
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', function() {
            // Alternar estado do menu
            this.classList.toggle('active');
            
            // Para o menu com classe 'open' (formacao.html, index.php)
            if (mobileMenu.classList.contains('mobile-menu')) {
                mobileMenu.classList.toggle('open');
                
                // Animar itens do menu
                const menuItems = document.querySelectorAll('.menu-item');
                if (mobileMenu.classList.contains('open')) {
                    menuItems.forEach((item, index) => {
                        item.style.transitionDelay = `${index * 0.1}s`;
                        item.style.opacity = '1';
                        item.style.transform = 'translateX(0)';
                    });
                } else {
                    menuItems.forEach(item => {
                        item.style.transitionDelay = '0s';
                        item.style.opacity = '0';
                        item.style.transform = 'translateX(-16px)';
                    });
                }
            } 
            // Para o menu com classe 'hidden' (index.html, projetos.html)
            else {
                mobileMenu.classList.toggle('hidden');
            }
        });
    }

    // ========== Dark Mode Toggle ==========
    const darkModeToggle = document.getElementById('darkModeToggle');
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    
    let lastToggleTime = 0; // Debounce simples
    
    function toggleDarkMode(event) {
        const now = Date.now();
        // Debounce de 150ms para evitar cliques múltiplos
        if (now - lastToggleTime < 150) return;
        lastToggleTime = now;
        
        // Aplicar mudança imediatamente
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('darkMode', isDark);
        
        // Efeito visual no botão (simples e rápido)
         const button = event?.currentTarget;
         if (button) {
             button.style.transform = 'scale(0.95)';
             
             // Restaurar botão rapidamente
             setTimeout(() => {
                 button.style.transform = '';
             }, 100);
         }
     }
    
    // Verificar preferência do usuário ao carregar a página
    if (localStorage.getItem('darkMode') === 'true' || 
        (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    }
    
    // Adicionar event listeners para todos os botões de dark mode
    if (darkModeToggle) darkModeToggle.addEventListener('click', toggleDarkMode);
    if (themeToggle) themeToggle.addEventListener('click', toggleDarkMode);
    if (themeToggleMobile) themeToggleMobile.addEventListener('click', toggleDarkMode);

    // ========== Scroll para Projetos ==========
    const scrollToProjectsBtn = document.getElementById('scrollToProjects');
    if (scrollToProjectsBtn) {
        scrollToProjectsBtn.addEventListener('click', () => {
            const projectsSection = document.getElementById('projetos');
            if (projectsSection) {
                projectsSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    // Esconder botão de scroll no primeiro scroll
    let hasScrolled = false;
    window.addEventListener('scroll', () => {
        const scrollBtn = document.getElementById('scrollToProjects');
        
        if (scrollBtn && !hasScrolled && window.pageYOffset > 0) {
            hasScrolled = true;
            scrollBtn.parentElement.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
            scrollBtn.parentElement.style.opacity = '0';
            scrollBtn.parentElement.style.transform = 'translateY(20px)';
            scrollBtn.parentElement.style.pointerEvents = 'none';
        }
    });

    // ========== Lazy Loading com Intersection Observer ==========
    const lazyImages = document.querySelectorAll('img[data-src]');
    const lazyElements = document.querySelectorAll('[data-lazy]');
    
    // Observer para imagens
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy-loading');
                img.classList.add('lazy-loaded');
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '50px 0px',
        threshold: 0.1
    });
    
    // Observer para elementos gerais
    const elementObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, {
        rootMargin: '20px 0px',
        threshold: 0.1
    });
    
    // Aplicar observers
    lazyImages.forEach(img => imageObserver.observe(img));
    lazyElements.forEach(el => elementObserver.observe(el));

    // ========== Botão Voltar ao Topo (Otimizado) ==========
    const backToTopButton = document.getElementById('backToTop');
    let ticking = false;
    
    function updateBackToTop() {
        if (backToTopButton) {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
                backToTopButton.classList.remove('opacity-100', 'visible');
            }
        }
        ticking = false;
    }
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateBackToTop);
            ticking = true;
        }
    }, { passive: true });

    if (backToTopButton) {
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
