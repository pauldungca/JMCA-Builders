<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'JMCA Builders') ?></title>
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Custom CSS - Always load these -->
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/about.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/project.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/footer.css') ?>" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Page Specific CSS -->
    <?= $this->renderSection('page_css') ?>
    
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@3.3.4/dist/vue.global.js"></script>
    
    <style>
        /* Ensure loading screen is visible initially */
        #loading-screen {
            display: flex !important;
        }
        
        [v-cloak] {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Loading Screen - Outside Vue app for immediate display -->
    <div id="loading-screen">
        <div class="loader-content">
            <img src="<?= base_url('assets/images/JMCA-logo.png') ?>" alt="JMCA Builders Logo" class="loader-logo">
            <div class="loader-spinner"></div>
        </div>
    </div>

    <div id="app">
        <?= $this->include('components/header') ?>
        
        <main id="main-content" v-cloak>
            <?= $this->renderSection('content') ?>
        </main>
        
        <?= $this->include('components/footer') ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Page Specific Scripts -->
    <?= $this->renderSection('page_scripts') ?>
    
    <script>
        // Handle loading screen on page load
        (function() {
            const loadingScreen = document.getElementById('loading-screen');
            
            // Always show loading screen briefly on page load
            setTimeout(() => {
                loadingScreen.classList.add('fade-out');
                
                // After fade-out transition, hide loading screen completely
                setTimeout(() => {
                    loadingScreen.classList.add('hidden');
                }, 800);
            }, 1000); // Show for 1 second
        })();

        const { createApp } = Vue;

        const app = createApp({
            data() {
                return {
                    currentPage: this.getCurrentPageFromUrl(),
                    heroCurrentSlide: 0,
                    aboutCurrentSlide: 0,
                    heroTimer: null,
                    aboutTimer: null
                }
            },
            methods: {
                getCurrentPageFromUrl() {
                    const path = window.location.pathname;
                    const segments = path.split('/').filter(segment => segment !== '');
                    const page = segments.length > 0 ? segments[segments.length - 1] : 'home';
                    return page;
                },
                
                navigateTo(page, event) {
                    event.preventDefault();
                    
                    // Don't navigate if already on the page
                    if (this.currentPage === page) {
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                        return;
                    }
                    
                    // Clear any existing timers
                    if (this.heroTimer) {
                        clearInterval(this.heroTimer);
                        this.heroTimer = null;
                    }
                    if (this.aboutTimer) {
                        clearInterval(this.aboutTimer);
                        this.aboutTimer = null;
                    }
                    
                    // Update current page
                    this.currentPage = page;
                    
                    // Build the URL
                    const url = page === 'home' ? '<?= base_url() ?>' : '<?= base_url() ?>' + page;
                    
                    // Show loading state with smooth transition
                    const mainContent = document.getElementById('main-content');
                    mainContent.style.transition = 'opacity 0.3s ease';
                    mainContent.style.opacity = '0';
                    
                    // Load content via AJAX
                    setTimeout(() => {
                        fetch(url, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.text();
                        })
                        .then(html => {
                            // Parse the HTML response
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(html, 'text/html');
                            
                            // Extract the main content
                            const newContent = doc.querySelector('#main-content');
                            
                            if (newContent) {
                                // Replace the content
                                mainContent.innerHTML = newContent.innerHTML;
                                
                                // Update browser history
                                history.pushState({ page: page }, '', url);
                                
                                // Scroll to top
                                window.scrollTo({ top: 0, behavior: 'smooth' });
                                
                                // Reinitialize homepage scripts if going to home
                                if (page === 'home') {
                                    this.$nextTick(() => {
                                        // Reset slide indices
                                        this.heroCurrentSlide = 0;
                                        this.aboutCurrentSlide = 0;
                                        
                                        // Small delay to ensure DOM is ready
                                        setTimeout(() => {
                                            this.startHeroSlideshow();
                                            this.startAboutAutoSlide();
                                        }, 200);
                                    });
                                }
                                
                                // Fade content back in
                                setTimeout(() => {
                                    mainContent.style.opacity = '1';
                                }, 50);
                            } else {
                                // If main-content not found, reload the page
                                window.location.href = url;
                            }
                        })
                        .catch(error => {
                            console.error('Error loading content:', error);
                            // Fallback to normal navigation
                            window.location.href = url;
                        });
                    }, 300);
                },
                
                // Hero slideshow methods
                startHeroSlideshow() {
                    // Clear any existing timer
                    if (this.heroTimer) {
                        clearInterval(this.heroTimer);
                    }
                    
                    // Check if hero slides exist
                    const heroSlides = document.querySelectorAll('.hero-slide');
                    if (heroSlides.length === 0) {
                        return;
                    }
                    
                    // Reset to first slide
                    this.heroCurrentSlide = 0;
                    this.updateHeroSlides();
                    
                    this.heroTimer = setInterval(() => {
                        this.heroCurrentSlide = (this.heroCurrentSlide + 1) % heroSlides.length;
                        this.updateHeroSlides();
                    }, 5000);
                },
                
                updateHeroSlides() {
                    const slides = document.querySelectorAll('.hero-slide');
                    slides.forEach((slide, index) => {
                        if (index === this.heroCurrentSlide) {
                            slide.classList.add('active');
                        } else {
                            slide.classList.remove('active');
                        }
                    });
                },
                
                // About carousel methods
                changeAboutSlide(direction) {
                    if (this.aboutTimer) clearInterval(this.aboutTimer);
                    const slides = document.querySelectorAll('.about-slide');
                    this.aboutCurrentSlide = (this.aboutCurrentSlide + direction + slides.length) % slides.length;
                    this.updateAboutSlides();
                    this.startAboutAutoSlide();
                },
                
                setAboutSlide(index) {
                    if (this.aboutTimer) clearInterval(this.aboutTimer);
                    this.aboutCurrentSlide = index;
                    this.updateAboutSlides();
                    this.startAboutAutoSlide();
                },
                
                startAboutAutoSlide() {
                    // Clear any existing timer
                    if (this.aboutTimer) {
                        clearInterval(this.aboutTimer);
                    }
                    
                    // Check if about slides exist
                    const aboutSlides = document.querySelectorAll('.about-slide');
                    if (aboutSlides.length === 0) {
                        return;
                    }
                    
                    this.aboutTimer = setInterval(() => {
                        this.aboutCurrentSlide = (this.aboutCurrentSlide + 1) % aboutSlides.length;
                        this.updateAboutSlides();
                    }, 4000);
                },
                
                updateAboutSlides() {
                    const slides = document.querySelectorAll('.about-slide');
                    const dots = document.querySelectorAll('.about-dot');
                    
                    slides.forEach((slide, index) => {
                        if (index === this.aboutCurrentSlide) {
                            slide.classList.add('active');
                        } else {
                            slide.classList.remove('active');
                        }
                    });
                    
                    dots.forEach((dot, index) => {
                        if (index === this.aboutCurrentSlide) {
                            dot.classList.add('active');
                        } else {
                            dot.classList.remove('active');
                        }
                    });
                }
            },
            mounted() {
                // Initialize slideshows if on homepage
                if (this.currentPage === 'home') {
                    setTimeout(() => {
                        this.startHeroSlideshow();
                        this.startAboutAutoSlide();
                    }, 200);
                }
                
                // Handle browser back/forward buttons
                window.addEventListener('popstate', (event) => {
                    // Simply reload the page on back/forward
                    location.reload();
                });
                
                // Set initial state
                history.replaceState({ page: this.currentPage }, '', window.location.pathname);
            },
            beforeUnmount() {
                // Clean up timers
                if (this.heroTimer) clearInterval(this.heroTimer);
                if (this.aboutTimer) clearInterval(this.aboutTimer);
            }
        });
        
        const vueApp = app.mount('#app');
        
        // Make Vue app globally accessible for page scripts
        window.vueApp = vueApp;
    </script>
</body>
</html>