<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema Neumorfisme</title>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <nav class="neumorphic">
            <a href="#" class="logo">Artesis</a>
            <ul>
                <li><a href="#beranda" class="nav-link active" title="Beranda"><i class="ph ph-house-simple"></i></a></li>
                <li><a href="#tentang" class="nav-link" title="Tentang"><i class="ph ph-info"></i></a></li>
                <li><a href="#layanan" class="nav-link" title="Layanan"><i class="ph ph-squares-four"></i></a></li>
                <li><a href="#kontak" class="nav-link" title="Kontak"><i class="ph ph-envelope-simple"></i></a></li>
                <li><a href="#admin" class="nav-link admin-btn" title="Admin"><i class="ph ph-user-circle-gear"></i></a></li>
            </ul>
        </nav>
        
        <!-- Konten utama -->
        <main class="neumorphic">
            <!-- Bagian Beranda -->
            <section id="beranda" class="content-section">
                <!-- Hero Section -->
                <div class="hero-section neumorphic">
                    <!-- Badge -->
                    <div class="hero-badge neumorphic-inset">
                        <i class="ph ph-crown"></i>
                        <span>Trusted Digital Agency</span>
                    </div>

                    <!-- Main Content -->
                    <div class="hero-content">
                        <h1 class="hero-title">Solusi Digital Kreatif untuk Bisnis Anda</h1>
                        <p class="hero-description">Kami membantu mengembangkan bisnis Anda melalui solusi digital yang inovatif, modern, dan tepat guna.</p>
                        
                        <!-- CTA Buttons -->
                        <div class="hero-cta">
                            <a href="https://wa.me/6283867898073?text=Halo,%20saya%20tertarik%20untuk%20konsultasi%20tentang%20layanan%20digital%20Anda" target="_blank" class="cta-btn primary neumorphic">
                                <i class="ph ph-whatsapp-logo"></i>
                                <span>Konsultasi Gratis</span>
                            </a>
                            <a href="#portfolio" class="cta-btn secondary neumorphic">
                                <i class="ph ph-folder-open"></i>
                                <span>Lihat Portfolio</span>
                            </a>
                        </div>

                        <!-- Stats -->
                        <div class="hero-stats">
                            <div class="stat-card neumorphic">
                                <div class="stat-icon">
                                    <i class="ph ph-users"></i>
                                </div>
                                <div class="stat-info">
                                    <h3 class="stat-number">100+</h3>
                                    <p class="stat-label">Klien Puas</p>
                                </div>
                            </div>
                            <div class="stat-card neumorphic">
                                <div class="stat-icon">
                                    <i class="ph ph-check-circle"></i>
                                </div>
                                <div class="stat-info">
                                    <h3 class="stat-number">150+</h3>
                                    <p class="stat-label">Proyek Selesai</p>
                                </div>
                            </div>
                            <div class="stat-card neumorphic">
                                <div class="stat-icon">
                                    <i class="ph ph-star"></i>
                                </div>
                                <div class="stat-info">
                                    <h3 class="stat-number">5.0</h3>
                                    <p class="stat-label">Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Layanan Unggulan Section (Setelah Hero) -->
                <div class="featured-services neumorphic">
                    <div class="section-header">
                        <h2 class="section-title">Layanan Unggulan</h2>
                        <p class="section-subtitle">Pilih layanan yang sesuai dengan kebutuhan Anda</p>
                    </div>

                    <div class="products-grid">
                        <!-- Undangan Pernikahan Online -->
                        <div class="product-card neumorphic">
                            <div class="product-badge">Promo Spesial!</div>
                            <div class="product-icon neumorphic">
                                <i class="ph ph-heart"></i>
                            </div>
                            <div class="product-header">
                                <h3>Undangan Pernikahan Online</h3>
                                <div class="price-box neumorphic-inset">
                                    <div class="price-label">Harga Spesial</div>
                                    <div class="old-price">Rp 99.000</div>
                                    <div class="price">Rp 50.000</div>
                                    <div class="price-period"></div>
                                    <div class="discount-tag">Hemat 50%!</div>
                                </div>
                            </div>

                            <ul class="feature-list">
                                <li><i class="ph ph-check-circle"></i> Desain Elegan & Modern</li>
                                <li><i class="ph ph-check-circle"></i> Fitur RSVP Online</li>
                                <li><i class="ph ph-check-circle"></i> Galeri Foto & Video</li>
                                <li><i class="ph ph-check-circle"></i> Peta Lokasi Interaktif</li>
                                <li><i class="ph ph-check-circle"></i> Amplop Digital</li>
                            </ul>

                            <div class="product-actions">
                                <a href="#demo" class="btn btn-secondary neumorphic">
                                    <i class="ph ph-eye"></i>
                                    Lihat Demo
                                </a>
                                <a href="#order" class="btn btn-primary neumorphic">
                                    <i class="ph ph-shopping-cart"></i>
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>

                        <!-- Pembuatan Website -->
                        <div class="product-card neumorphic">
                            <div class="product-badge">Diskon Besar!</div>
                            <div class="product-icon neumorphic">
                                <i class="ph ph-globe"></i>
                            </div>
                            <div class="product-header">
                                <h3>Pembuatan Website</h3>
                                <div class="product-rating neumorphic-inset">
                                    <div class="stars">
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                    </div>
                                    <span>(90+ Review)</span>
                                </div>
                            </div>

                            <ul class="feature-list">
                                <li><i class="ph ph-check-circle"></i> Desain Responsif</li>
                                <li><i class="ph ph-check-circle"></i> SEO Friendly</li>
                                <li><i class="ph ph-check-circle"></i> Custom Domain</li>
                                <li><i class="ph ph-check-circle"></i> Support 24/7</li>
                                <li><i class="ph ph-check-circle"></i> Free Maintenance</li>
                            </ul>

                            <div class="price-box neumorphic-inset">
                                <div class="price-label">Mulai dari</div>
                                <div class="old-price">Rp 1.499.000</div>
                                <div class="price">Rp 900.000</div>
                                <div class="discount-tag">Hemat 60%!</div>
                            </div>

                            <div class="product-actions">
                                <a href="#portfolio" class="btn btn-secondary neumorphic">
                                    <i class="ph ph-images"></i>
                                    Portfolio
                                </a>
                                <a href="#order" class="btn btn-primary neumorphic">
                                    <i class="ph ph-shopping-cart"></i>
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>

                        <!-- Pembuatan Aplikasi Android -->
                        <div class="product-card neumorphic">
                            <div class="product-icon neumorphic">
                                <i class="ph ph-android-logo"></i>
                            </div>
                            <div class="product-header">
                                <h3>Aplikasi Android</h3>
                                <div class="product-rating neumorphic-inset">
                                    <div class="stars">
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                    </div>
                                    <span>(75+ Review)</span>
                                </div>
                            </div>

                            <ul class="feature-list">
                                <li><i class="ph ph-check-circle"></i> UI/UX Modern</li>
                                <li><i class="ph ph-check-circle"></i> Integrasi API</li>
                                <li><i class="ph ph-check-circle"></i> Play Store Upload</li>
                                <li><i class="ph ph-check-circle"></i> Maintenance</li>
                                <li><i class="ph ph-check-circle"></i> Source Code</li>
                            </ul>

                            <div class="price-box neumorphic-inset">
                                <div class="price-label">Mulai dari</div>
                                <div class="price">Rp 3.999.000</div>
                            </div>

                            <div class="product-actions">
                                <a href="#portfolio" class="btn btn-secondary neumorphic">
                                    <i class="ph ph-images"></i>
                                    Portfolio
                                </a>
                                <a href="#order" class="btn btn-primary neumorphic">
                                    <i class="ph ph-shopping-cart"></i>
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>

                        <!-- Desain Logo -->
                        <div class="product-card neumorphic">
                            <div class="product-icon neumorphic">
                                <i class="ph ph-paint-brush"></i>
                            </div>
                            <div class="product-header">
                                <h3>Desain Logo</h3>
                                <div class="product-rating neumorphic-inset">
                                    <div class="stars">
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                        <i class="ph ph-star-fill"></i>
                                    </div>
                                    <span>(100+ Review)</span>
                                </div>
                            </div>

                            <ul class="feature-list">
                                <li><i class="ph ph-check-circle"></i> Konsep Original</li>
                                <li><i class="ph ph-check-circle"></i> File Source</li>
                                <li><i class="ph ph-check-circle"></i> Revisi 3x</li>
                                <li><i class="ph ph-check-circle"></i> Brand Guidelines</li>
                                <li><i class="ph ph-check-circle"></i> Multiple Format</li>
                            </ul>

                            <div class="price-box neumorphic-inset">
                                <div class="price-label">Mulai dari</div>
                                <div class="price">Rp 99.000</div>
                            </div>

                            <div class="product-actions">
                                <a href="#portfolio" class="btn btn-secondary neumorphic">
                                    <i class="ph ph-images"></i>
                                    Portfolio
                                </a>
                                <a href="#order" class="btn btn-primary neumorphic">
                                    <i class="ph ph-shopping-cart"></i>
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mengapa Memilih Kami -->
                <div class="why-choose-us neumorphic">
                    <div class="section-header">
                        <h2 class="section-title">Mengapa Memilih Kami?</h2>
                        <p class="section-subtitle">Keunggulan layanan kami yang terpercaya</p>
                    </div>

                    <div class="features-grid">
                        <div class="feature-card neumorphic">
                            <div class="feature-icon neumorphic">
                                <i class="ph ph-clock"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Pengerjaan Cepat</h3>
                                <p>Kami menjamin ketepatan waktu dalam setiap pengerjaan proyek</p>
                            </div>
                            <div class="feature-badge neumorphic-inset">
                                <span>Fast</span>
                            </div>
                        </div>

                        <div class="feature-card neumorphic">
                            <div class="feature-icon neumorphic">
                                <i class="ph ph-currency-circle-dollar"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Harga Bersaing</h3>
                                <p>Dapatkan layanan berkualitas dengan harga yang terjangkau</p>
                            </div>
                            <div class="feature-badge neumorphic-inset">
                                <span>Best Price</span>
                            </div>
                        </div>

                        <div class="feature-card neumorphic">
                            <div class="feature-icon neumorphic">
                                <i class="ph ph-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Support 24/7</h3>
                                <p>Tim support kami siap membantu Anda kapanpun</p>
                            </div>
                            <div class="feature-badge neumorphic-inset">
                                <span>24/7</span>
                            </div>
                        </div>

                        <div class="feature-card neumorphic">
                            <div class="feature-icon neumorphic">
                                <i class="ph ph-shield-check"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Garansi Layanan</h3>
                                <p>Jaminan kepuasan dengan garansi revisi</p>
                            </div>
                            <div class="feature-badge neumorphic-inset">
                                <span>Warranty</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Section -->
                <div class="testimonial-section neumorphic">
                    <div class="section-header">
                        <h2 class="section-title">Apa Kata Mereka?</h2>
                        <p class="section-subtitle">Testimoni dari klien kami</p>
                    </div>
                    
                    <div class="testimonial-slider">
                        <div class="testimonial-controls">
                            <button class="control-btn prev neumorphic">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button class="control-btn next neumorphic">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                        
                        <div class="testimonial-wrapper">
                            <div class="testimonial-card neumorphic">
                                <div class="testimonial-quote neumorphic-inset">
                                    <i class="ph ph-quotes"></i>
                                </div>
                                <div class="testimonial-content">
                                    <p>"Sangat puas dengan layanan yang diberikan. Hasil sesuai ekspektasi dan pengerjaan tepat waktu."</p>
                                </div>
                                <div class="testimonial-author">
                                    <img src="assets/client1.jpg" alt="Client" class="author-image neumorphic">
                                    <div class="author-info">
                                        <h4>Ahmad Fadli</h4>
                                        <p>Pengusaha Digital</p>
                                        <div class="author-rating neumorphic-inset">
                                            <i class="ph ph-star-fill"></i>
                                            <i class="ph ph-star-fill"></i>
                                            <i class="ph ph-star-fill"></i>
                                            <i class="ph ph-star-fill"></i>
                                            <i class="ph ph-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bagian Tentang/Portofolio -->
            <section id="tentang" class="content-section">
                <div class="section-header">
                    <h2 class="section-title">Portfolio Saya</h2>
                    <p class="section-subtitle">Koleksi proyek terbaik yang telah saya kerjakan</p>
                </div>
                
                <div class="profile-container neumorphic">
                    <div class="profile-content">
                        <div class="profile-image-wrapper neumorphic">
                            <img src="assets/photo.png" alt="Foto Profil" class="profile-photo" loading="lazy">
                        </div>
                        <div class="profile-info">
                            <h3>Fahmi Faisal Bahari</h3>
                            <p class="job-title">Full Stack Developer</p>
                            <div class="profile-stats">
                                <div class="stat-item">
                                    <span class="stat-number">5+</span>
                                    <span class="stat-label">Tahun Pengalaman</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">50+</span>
                                    <span class="stat-label">Proyek Selesai</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">30+</span>
                                    <span class="stat-label">Klien Puas</span>
                                </div>
                            </div>
                            <p class="profile-description">Seorang pengembang web passionate dengan pengalaman dalam membangun solusi digital yang inovatif dan user-friendly.</p>
                            <div class="profile-skills">
                                <span class="skill-tag neumorphic">
                                    <i class="ph ph-file-react"></i>React
                                </span>
                                <span class="skill-tag neumorphic">
                                    <i class="ph ph-nodejs-logo"></i>Node.js
                                </span>
                                <span class="skill-tag neumorphic">
                                    <i class="ph ph-code"></i>PHP
                                </span>
                                <span class="skill-tag neumorphic">
                                    <i class="ph ph-code-simple"></i>Laravel
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-section">
                    <div class="portfolio-filters">
                        <button class="filter-btn neumorphic active" data-filter="all">
                            <i class="ph ph-squares-four"></i> Semua
                        </button>
                        <button class="filter-btn neumorphic" data-filter="web">
                            <i class="ph ph-globe"></i> Web
                        </button>
                        <button class="filter-btn neumorphic" data-filter="mobile">
                            <i class="ph ph-device-mobile"></i> Mobile
                        </button>
                        <button class="filter-btn neumorphic" data-filter="design">
                            <i class="ph ph-paint-brush"></i> Design
                        </button>
                    </div>
                    
                    <div class="portfolio-grid">
                        <div class="portfolio-item" data-category="web">
                            <div class="portfolio-image">
                                <img src="path/to/project1.jpg" alt="E-Commerce Platform" loading="lazy">
                            </div>
                            <div class="portfolio-content">
                                <div class="portfolio-meta">
                                    <i class="ph ph-calendar"></i>
                                    <span>2024</span>
                                    <i class="ph ph-dot"></i>
                                    <i class="ph ph-globe"></i>
                                    <span>Web Development</span>
                                </div>
                                <h4>E-Commerce Platform</h4>
                                <p>Platform e-commerce modern dengan fitur pembayaran terintegrasi dan dashboard admin yang komprehensif.</p>
                                <div class="portfolio-tags">
                                    <span class="tag">
                                        <i class="ph ph-file-react"></i>React
                                    </span>
                                    <span class="tag">
                                        <i class="ph ph-nodejs-logo"></i>Node.js
                                    </span>
                                    <span class="tag">
                                        <i class="ph ph-database"></i>MongoDB
                                    </span>
                                </div>
                                <div class="portfolio-links">
                                    <a href="#" class="btn neumorphic">
                                        <i class="ph ph-globe"></i>Live Demo
                                    </a>
                                    <a href="#" class="btn neumorphic">
                                        <i class="ph ph-github-logo"></i>Source Code
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item" data-category="mobile">
                            <div class="portfolio-image">
                                <img src="path/to/project2.jpg" alt="Mobile App" loading="lazy">
                            </div>
                            <div class="portfolio-content">
                                <h4>Fitness Tracking App</h4>
                                <p>Aplikasi mobile untuk tracking fitness dengan fitur analisis dan rekomendasi personal.</p>
                                <div class="portfolio-tags">
                                    <span class="tag">Flutter</span>
                                    <span class="tag">Firebase</span>
                                    <span class="tag">ML Kit</span>
                                </div>
                                <div class="portfolio-links">
                                    <a href="#" class="btn">
                                        <i class="ph ph-app-store-logo"></i> App Store
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-item" data-category="design">
                            <div class="portfolio-image">
                                <img src="path/to/project3.jpg" alt="Dashboard Design" loading="lazy">
                            </div>
                            <div class="portfolio-content">
                                <h4>Analytics Dashboard</h4>
                                <p>UI/UX design untuk dashboard analytics dengan fokus pada visualisasi data.</p>
                                <div class="portfolio-tags">
                                    <span class="tag">Figma</span>
                                    <span class="tag">UI/UX</span>
                                    <span class="tag">Analytics</span>
                                </div>
                                <div class="portfolio-links">
                                    <a href="#" class="btn">
                                        <i class="ph ph-figma-logo"></i> Design Files
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonials-section">
                    <h3 class="section-subtitle">Testimoni Klien</h3>
                    <div class="testimonials-grid">
                        <div class="testimonial-item neumorphic">
                            <div class="testimonial-content">
                                <i class="ph ph-quotes"></i>
                                <p>"Sangat profesional dan hasil kerjanya memuaskan. Komunikasi lancar dan tepat waktu."</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="path/to/client1.jpg" alt="Client 1" class="author-image neumorphic" loading="lazy">
                                <div class="author-info">
                                    <h5>John Doe</h5>
                                    <p>CEO, Tech Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tambahkan testimonial-item lainnya -->
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>