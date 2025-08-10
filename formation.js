// JavaScript para a página de formação acadêmica

document.addEventListener('DOMContentLoaded', function() {
    // Animação das barras de progresso
    function animateSkillBars() {
        const skillBars = document.querySelectorAll('.skill-progress-fill');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const percentage = bar.getAttribute('data-percentage');
                    
                    // Animar a barra
                    setTimeout(() => {
                        bar.style.width = percentage + '%';
                    }, 200);
                    
                    observer.unobserve(bar);
                }
            });
        }, {
            threshold: 0.5
        });
        
        skillBars.forEach(bar => {
            bar.style.width = '0%';
            observer.observe(bar);
        });
    }

    // Animação dos itens da timeline
    function animateTimelineItems() {
        const timelineItems = document.querySelectorAll('.timeline-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'slideInFromLeft 0.8s ease-out forwards';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });
        
        timelineItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateX(-50px)';
            item.style.animationDelay = `${index * 0.2}s`;
            observer.observe(item);
        });
    }

    // Animação dos cards de certificação
    function animateCertificationCards() {
        const certCards = document.querySelectorAll('.certification-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -30px 0px'
        });
        
        certCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.animationDelay = `${index * 0.1}s`;
            observer.observe(card);
        });
    }

    // Contador animado para estatísticas
    function animateCounters() {
        const counters = document.querySelectorAll('[data-count]');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-count'));
                    const duration = 2000;
                    const startTime = performance.now();
                    
                    function updateCounter(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const current = Math.floor(target * progress);
                        
                        counter.textContent = current;
                        
                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    }
                    
                    requestAnimationFrame(updateCounter);
                    observer.unobserve(counter);
                }
            });
        }, {
            threshold: 0.5
        });
        
        counters.forEach(counter => {
            counter.textContent = '0';
            observer.observe(counter);
        });
    }

    // Inicializar todas as animações
    animateSkillBars();
    animateTimelineItems();
    animateCertificationCards();
    animateCounters();

    // Smooth scroll para âncoras internas
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
});

// Adicionar animações CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInFromLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .timeline-item {
        transition: all 0.3s ease;
    }
    
    .timeline-item:hover {
        transform: translateX(10px);
    }
    
    .certification-card:hover {
        transform: translateY(-5px);
    }
`;
document.head.appendChild(style);