const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        let menuOpen = false;
        
        menuBtn.addEventListener('click', () => {
            if(!menuOpen) {
                menuBtn.classList.add('open');
                mobileMenu.classList.add('open');
                
                // Anima os itens do menu com delay
                const menuItems = document.querySelectorAll('.menu-item');
                menuItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.transitionDelay = `${index * 0.1}s`;
                    }, 50);
                });
                
                menuOpen = true;
            } else {
                menuBtn.classList.remove('open');
                mobileMenu.classList.remove('open');
                
                // Remove os delays quando o menu fecha
                const menuItems = document.querySelectorAll('.menu-item');
                menuItems.forEach(item => {
                    item.style.transitionDelay = '0s';
                });
                
                menuOpen = false;
            }
        });

        // Menu mobile
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    menuBtn.addEventListener('click', function() {
        this.classList.toggle('active');
        mobileMenu.classList.toggle('open');
        
        // Adiciona/remove a classe para animar os itens do menu
        if (mobileMenu.classList.contains('open')) {
            document.querySelectorAll('.menu-item').forEach((item, index) => {
                item.style.transitionDelay = `${index * 0.1}s`;
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            });
        } else {
            document.querySelectorAll('.menu-item').forEach(item => {
                item.style.transitionDelay = '0s';
                item.style.opacity = '0';
                item.style.transform = 'translateX(-16px)';
            });
        }
    });
    
    // Fechar menu ao clicar em um item
    document.querySelectorAll('.menu-item a').forEach(item => {
        item.addEventListener('click', () => {
            menuBtn.classList.remove('active');
            mobileMenu.classList.remove('open');
            document.querySelectorAll('.menu-item').forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-16px)';
            });
        });
    });

    // Dark Mode Toggle
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    const themeIcon = document.getElementById('theme-icon');
    const themeIconMobile = document.getElementById('theme-icon-mobile');
    
    function toggleDarkMode() {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('darkMode', isDark);
        
        if (isDark) {
            themeIcon.classList.replace('fa-moon', 'fa-sun');
            themeIconMobile.classList.replace('fa-moon', 'fa-sun');
        } else {
            themeIcon.classList.replace('fa-sun', 'fa-moon');
            themeIconMobile.classList.replace('fa-sun', 'fa-moon');
        }
    }
    
    // Verificar preferência do usuário
    if (localStorage.getItem('darkMode') === 'true' || 
        (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        themeIcon.classList.replace('fa-moon', 'fa-sun');
        themeIconMobile.classList.replace('fa-moon', 'fa-sun');
    }
    
    themeToggle.addEventListener('click', toggleDarkMode);
    themeToggleMobile.addEventListener('click', toggleDarkMode);
});