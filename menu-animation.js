// Menu Mobile Animation
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuItems = document.querySelectorAll('.menu-item');

    if (!mobileMenuToggle || !mobileMenu) {
        console.warn('Menu mobile elements not found');
        return;
    }

    // Função para alternar o menu
    function toggleMenu() {
        const isMenuVisible = mobileMenu.classList.contains('show');
        
        if (isMenuVisible) {
            // Fechar menu
            mobileMenu.classList.remove('show');
            mobileMenu.classList.add('hidden');
            mobileMenuToggle.classList.remove('active');
        } else {
            // Abrir menu
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('show');
            mobileMenuToggle.classList.add('active');
        }
    }

    // Event listener para o botão hambúrguer
    mobileMenuToggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        toggleMenu();
    });

    // Fechar menu ao clicar em um item
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            mobileMenu.classList.remove('show');
            mobileMenu.classList.add('hidden');
            mobileMenuToggle.classList.remove('active');
        });
    });

    // Fechar menu ao clicar fora dele
    document.addEventListener('click', function(e) {
        if (!mobileMenuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.remove('show');
            mobileMenu.classList.add('hidden');
            mobileMenuToggle.classList.remove('active');
        }
    });

    // Fechar menu com a tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            mobileMenu.classList.remove('show');
            mobileMenu.classList.add('hidden');
            mobileMenuToggle.classList.remove('active');
        }
    });
});