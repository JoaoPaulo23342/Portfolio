// JavaScript para a página de projetos

document.addEventListener('DOMContentLoaded', function() {
    // Filtros de projetos
    const filterButtons = document.querySelectorAll('.project-filter-btn');
    const projectCards = document.querySelectorAll('.project-card-modern');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Atualizar botões ativos
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filtrar projetos
            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                
                if (filter === 'all' || category.includes(filter)) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.5s ease-out';
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Atualizar estatísticas
            updateProjectStats(filter);
        });
    });

    // Função para atualizar estatísticas
    function updateProjectStats(filter) {
        const totalProjects = document.getElementById('total-projects');
        const completedProjects = document.getElementById('completed-projects');
        const inProgressProjects = document.getElementById('in-progress-projects');
        
        let total = 0;
        let completed = 0;
        let inProgress = 0;
        
        projectCards.forEach(card => {
            const category = card.getAttribute('data-category');
            const status = card.querySelector('.status-badge').textContent.trim();
            
            if (filter === 'all' || category.includes(filter)) {
                total++;
                if (status === 'Concluído') {
                    completed++;
                } else if (status === 'Em Desenvolvimento') {
                    inProgress++;
                }
            }
        });
        
        // Animar contadores
        animateCounter(totalProjects, total);
        animateCounter(completedProjects, completed);
        animateCounter(inProgressProjects, inProgress);
    }

    // Função para animar contadores
    function animateCounter(element, target) {
        const start = parseInt(element.textContent) || 0;
        const duration = 500;
        const startTime = performance.now();
        
        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const current = Math.floor(start + (target - start) * progress);
            
            element.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            }
        }
        
        requestAnimationFrame(updateCounter);
    }

    // Inicializar estatísticas
    updateProjectStats('all');

    // Animação de entrada para os cards
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    projectCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        observer.observe(card);
    });
});

// Animações CSS
const style = document.createElement('style');
style.textContent = `
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
`;
document.head.appendChild(style);