document.addEventListener('DOMContentLoaded', function() {
    // Sembunyikan semua section kecuali beranda saat pertama kali dimuat
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => section.style.display = 'none');
    document.querySelector('#beranda').style.display = 'block';

    // Tambahkan event listener untuk menu navigasi
    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            
            // Sembunyikan semua section
            sections.forEach(section => section.style.display = 'none');
            
            // Tampilkan section yang dipilih
            const targetSection = document.querySelector(`#${targetId}`);
            if (targetSection) {
                targetSection.style.display = 'block';
            }
        });
    });

    // Filter portfolio items
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;
            
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Touch device optimizations
    const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    
    if (isTouchDevice) {
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.addEventListener('touchstart', function(e) {
                e.preventDefault();
                const title = this.getAttribute('title');
                
                // Show tooltip
                const tooltip = document.createElement('div');
                tooltip.classList.add('touch-tooltip');
                tooltip.textContent = title;
                
                this.appendChild(tooltip);
                
                setTimeout(() => {
                    tooltip.remove();
                }, 1500);
            });
        });
    }
    
    // Smooth scrolling for content sections
    document.querySelectorAll('.content-section').forEach(section => {
        section.style.scrollBehavior = 'smooth';
    });
    
    // Prevent rubber-banding/overscroll on iOS
    document.body.addEventListener('touchmove', function(e) {
        if (e.target.closest('.content-section')) return;
        e.preventDefault();
    }, { passive: false });

    // Menangani perpindahan class active pada navigasi
    const navLinks = document.querySelectorAll('.nav-link');

    function setActiveNav() {
        const sections = document.querySelectorAll('section');
        const scrollPosition = window.scrollY;

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.clientHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', setActiveNav);
    window.addEventListener('load', setActiveNav);
}); 