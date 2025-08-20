// Formation.js - Script específico para a página de formação

document.addEventListener('DOMContentLoaded', function() {
    // Inicialização dos componentes
    initDarkMode();
    initMobileMenu();
    initScrollEffects();
    initCounters();
    initProgressBars();
    initBackToTop();
});

// Dark Mode Toggle
function initDarkMode() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const html = document.documentElement;
    let isToggling = false;
    
    function toggleDarkMode() {
        if (isToggling) return;
        isToggling = true;
        
        const isDark = html.classList.toggle('dark');
        localStorage.setItem('darkMode', isDark);
        
        // Adicionar efeito de ripple no botão
        const button = event.currentTarget;
        if (button) {
            button.style.transform = 'scale(0.95)';
            setTimeout(() => {
                button.style.transform = '';
            }, 150);
        }
        
        setTimeout(() => {
            isToggling = false;
        }, 500);
    }
    
    // Verificar preferência salva ou preferência do sistema
    if (localStorage.getItem('darkMode') === 'true' || 
        (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        html.classList.add('dark');
    }
    
    darkModeToggle?.addEventListener('click', toggleDarkMode);
}

// Menu Mobile
function initMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    
    mobileMenuToggle?.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
    
    // Fechar menu ao clicar em um link
    const mobileLinks = mobileMenu?.querySelectorAll('a');
    mobileLinks?.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });
    
    // Fechar menu ao clicar fora
    document.addEventListener('click', function(e) {
        if (!mobileMenuToggle?.contains(e.target) && !mobileMenu?.contains(e.target)) {
            mobileMenu?.classList.add('hidden');
        }
    });
}

// Efeitos de Scroll
function initScrollEffects() {
    const header = document.querySelector('header');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header?.classList.add('backdrop-blur-lg', 'bg-white/90', 'dark:bg-gray-900/90');
        } else {
            header?.classList.remove('backdrop-blur-lg', 'bg-white/90', 'dark:bg-gray-900/90');
        }
    });
}

// Contadores Animados
function initCounters() {
    const counters = document.querySelectorAll('[data-counter]');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-counter'));
        const duration = 2000; // 2 segundos
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        updateCounter();
    };
    
    // Intersection Observer para animar quando entrar na viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
}

// Barras de Progresso Animadas
function initProgressBars() {
    const progressBars = document.querySelectorAll('.progress-bar');
    
    const animateProgressBar = (bar) => {
        const width = bar.getAttribute('data-width');
        bar.style.width = '0%';
        
        setTimeout(() => {
            bar.style.transition = 'width 1.5s ease-out';
            bar.style.width = width + '%';
        }, 200);
    };
    
    // Intersection Observer para animar quando entrar na viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progressBar = entry.target.querySelector('.progress-bar');
                if (progressBar) {
                    animateProgressBar(progressBar);
                }
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    // Observar os containers das skills
    const skillItems = document.querySelectorAll('.skill-item');
    skillItems.forEach(item => {
        observer.observe(item);
    });
}

// Botão Voltar ao Topo
function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopBtn?.classList.remove('translate-y-20', 'opacity-0');
            backToTopBtn?.classList.add('translate-y-0', 'opacity-100');
        } else {
            backToTopBtn?.classList.add('translate-y-20', 'opacity-0');
            backToTopBtn?.classList.remove('translate-y-0', 'opacity-100');
        }
    });
    
    backToTopBtn?.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Smooth Scroll para links internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Animações de hover para cards
document.querySelectorAll('.certification-card, .skill-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px) scale(1.02)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Lazy loading para imagens
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// Preloader (se existir)
window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 300);
    }
});

// Tratamento de erros para imagens
document.querySelectorAll('img').forEach(img => {
    img.addEventListener('error', function() {
        this.style.display = 'none';
        console.warn('Imagem não encontrada:', this.src);
    });
});

// Performance: Debounce para eventos de scroll
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Aplicar debounce aos eventos de scroll
const debouncedScrollHandler = debounce(() => {
    // Handlers de scroll já implementados acima
}, 10);

window.addEventListener('scroll', debouncedScrollHandler);

// Acessibilidade: Navegação por teclado
document.addEventListener('keydown', function(e) {
    // ESC para fechar menu mobile
    if (e.key === 'Escape') {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu?.classList.add('hidden');
    }
    
    // Enter/Space para botões
    if ((e.key === 'Enter' || e.key === ' ') && e.target.getAttribute('role') === 'button') {
        e.preventDefault();
        e.target.click();
    }
});

// Analytics (se necessário)
function trackEvent(eventName, properties = {}) {
    // Implementar tracking de eventos aqui
    console.log('Event tracked:', eventName, properties);
}

// Exportar funções se necessário
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        initDarkMode,
        initMobileMenu,
        initScrollEffects,
        initCounters,
        initProgressBars,
        initBackToTop
    };
}