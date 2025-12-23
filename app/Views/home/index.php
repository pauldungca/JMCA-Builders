<?= $this->extend('home/layout') ?>

<?= $this->section('page_css') ?>
<link href="<?= base_url('assets/css/index.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section with Automatic Slideshow -->
<section class="hero-section">
    <div class="hero-slideshow">
        <div class="hero-slide" :class="{ active: heroCurrentSlide === 0 }">
            <img src="<?= base_url('assets/images/landing-image.jpg') ?>" alt="JMCA Builders Hero 1" class="hero-image">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-slide" :class="{ active: heroCurrentSlide === 1 }">
            <img src="<?= base_url('assets/images/landing-image_2.jpg') ?>" alt="JMCA Builders Hero 2" class="hero-image">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-slide" :class="{ active: heroCurrentSlide === 2 }">
            <img src="<?= base_url('assets/images/landing-image_3.jpg') ?>" alt="JMCA Builders Hero 3" class="hero-image">
            <div class="hero-overlay"></div>
        </div>
    </div>
    
    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title">Transforming Your Dreams Into Reality</h1>
            <p class="hero-subtitle">We translate your dreams into drawings and create amazing structures</p>
            <a href="<?= base_url('contact') ?>" class="btn btn-hero" @click="navigateTo('contact', $event)">Get Started</a>
        </div>
    </div>
</section>

<!-- About Section with Carousel -->
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-carousel">
                    <div class="about-slide" :class="{ active: aboutCurrentSlide === 0 }">
                        <img src="<?= base_url('assets/images/about-image.jpg') ?>" alt="About JMCA 1" class="img-fluid rounded">
                    </div>
                    <div class="about-slide" :class="{ active: aboutCurrentSlide === 1 }">
                        <img src="<?= base_url('assets/images/about-image_2.jpg') ?>" alt="About JMCA 2" class="img-fluid rounded">
                    </div>
                    <div class="about-slide" :class="{ active: aboutCurrentSlide === 2 }">
                        <img src="<?= base_url('assets/images/about-image_3.jpg') ?>" alt="About JMCA 3" class="img-fluid rounded">
                    </div>
                    
                    <!-- Navigation Arrows -->
                    <button class="about-nav about-prev" @click="changeAboutSlide(-1)">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="about-nav about-next" @click="changeAboutSlide(1)">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                    
                    <!-- Dots Indicator -->
                    <div class="about-dots">
                        <span class="about-dot" :class="{ active: aboutCurrentSlide === 0 }" @click="setAboutSlide(0)"></span>
                        <span class="about-dot" :class="{ active: aboutCurrentSlide === 1 }" @click="setAboutSlide(1)"></span>
                        <span class="about-dot" :class="{ active: aboutCurrentSlide === 2 }" @click="setAboutSlide(2)"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">Who We Are</h2>
                <p class="section-description">
                    <strong>JMCA Builders, Inc.</strong> comprises of passion driven individuals, a group that started as colleagues bounded by Real Estate Company, determined to make their mark in this world.
                </p>
                <p class="section-description">
                    We were rooted from developing lands, we saw the need for a functionally aesthetic and structurally feasible structures for the lands we develop, thus we create <strong>JMCA Builders, Inc.</strong>
                </p>
                <p class="section-description" style="color: #d29b20; font-weight: 600; font-size: 1.3rem;">
                    "TRANSFORMING YOUR DREAMS INTO REALITY"
                </p>
                <a href="<?= base_url('about') ?>" class="btn btn-outline-primary" @click="navigateTo('about', $event)">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <p class="service-subtitle">WHAT WE OFFER</p>
            <h2 class="section-title">We provide the highest quality of <span style="color: #d29b20;">ARCHITECTURAL</span> and <span style="color: #d29b20;">ENGINEERING</span> services</h2>
        </div>
        
        <!-- Architectural & Engineering Services -->
        <div class="mb-5">
            <h3 class="services-category-title">ARCHITECTURAL & ENGINEERING SERVICES:</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <h3 class="service-title">Professional Consultation</h3>
                        <p class="service-description">
                            Expert guidance for your construction and design needs.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-house"></i>
                        </div>
                        <h3 class="service-title">Architectural Planning & Design</h3>
                        <p class="service-description">
                            Innovative designs tailored to your vision and requirements.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h3 class="service-title">Structural Plan & Analysis</h3>
                        <p class="service-description">
                            Comprehensive structural engineering solutions.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-calculator"></i>
                        </div>
                        <h3 class="service-title">Building Estimates & Specifications</h3>
                        <p class="service-description">
                            Detailed cost estimates and technical specifications.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-box"></i>
                        </div>
                        <h3 class="service-title">2D and 3D Visualization</h3>
                        <p class="service-description">
                            Realistic renderings to bring your project to life.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-camera-video"></i>
                        </div>
                        <h3 class="service-title">Video Animation</h3>
                        <p class="service-description">
                            Dynamic video presentations of your future project.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Construction Services -->
        <div class="mb-5">
            <h3 class="services-category-title">CONSTRUCTION SERVICES</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h3 class="service-title">Design and Build Services</h3>
                        <p class="service-description">
                            Complete solutions from concept to completion.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3 class="service-title">Supervision Services</h3>
                        <p class="service-description">
                            Expert oversight ensuring quality and compliance.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-kanban"></i>
                        </div>
                        <h3 class="service-title">Project Management</h3>
                        <p class="service-description">
                            Efficient coordination for on-time project delivery.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Services -->
        <div>
            <h3 class="services-category-title">OTHER SERVICES</h3>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <h3 class="service-title">Building Permit & Other Permit Processing</h3>
                        <p class="service-description">
                            Hassle-free permit processing and documentation.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h3 class="service-title">Loan Processing</h3>
                        <p class="service-description">
                            Assistance with construction loan applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <p class="service-subtitle">OUR PROJECTS</p>
            <h2 class="section-title">We exert great effort and dedication to each project</h2>
            <p class="section-description text-center mx-auto" style="max-width: 800px;">
                We handle from start of design conception to actual construction turnover
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="project-card">
                    <img src="<?= base_url('assets/images/residential_1.jpg') ?>" alt="Project 1" class="project-image">
                    <div class="project-overlay">
                        <h4 class="project-title">Modern Residence</h4>
                        <p class="project-category">Residential</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <img src="<?= base_url('assets/images/residential_2.jpg') ?>" alt="Project 2" class="project-image">
                    <div class="project-overlay">
                        <h4 class="project-title">Modern Residence</h4>
                        <p class="project-category">Residential</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <img src="<?= base_url('assets/images/residential_3.jpg') ?>" alt="Project 3" class="project-image">
                    <div class="project-overlay">
                        <h4 class="project-title">Modern Residence</h4>
                        <p class="project-category">Residential</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="<?= base_url('projects') ?>" class="btn btn-primary" @click="navigateTo('projects', $event)">View All Projects</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container text-center">
        <h2 class="cta-title">Ready to Start Your Project?</h2>
        <p class="cta-description">Let's bring your vision to life together</p>
        <a href="<?= base_url('contact') ?>" class="btn btn-light btn-lg" @click="navigateTo('contact', $event)">Contact Us Today</a>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('page_scripts') ?>

<script>
    // Reinitialize slideshows using vanilla JavaScript that works with AJAX-loaded content
    document.addEventListener('DOMContentLoaded', initializeHomeSlideshows);

    function initializeHomeSlideshows() {
        if (window.vueApp && window.vueApp.currentPage === 'home') {
            setTimeout(() => {
                window.vueApp.startHeroSlideshow();
                window.vueApp.startAboutAutoSlide();
            }, 200);
        }
    }

    // Call this when content is loaded via AJAX
    if (typeof window.vueApp !== 'undefined') {
        initializeHomeSlideshows();
    }
</script>

<?= $this->endSection() ?>