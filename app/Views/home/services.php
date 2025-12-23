<?= $this->extend('home/layout') ?>

<?= $this->section('page_css') ?>
<link href="<?= base_url('assets/css/services.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section class="services-hero">
    <div class="services-hero-content container">
        <h1>
            Our <span>Services</span>
        </h1>
        <p>Professional Architectural & Engineering Excellence</p>
    </div>
</section>

<!-- INTRO SECTION -->
<section class="services-intro container">
    <div class="intro-content">
        <span class="intro-label">WHAT WE OFFER</span>
        <h2>We provide the highest quality of<br><span class="highlight">ARCHITECTURAL</span> and <span class="highlight">ENGINEERING</span> services</h2>
        <p>
            At JMCA, what you can only IMAGINE, WE CAN VISUALIZE, TRANSLATE, and CREATE.
            We translate your dreams into drawings and create amazing structures that satisfy expectations versus realities.
        </p>
    </div>
</section>

<!-- MAIN SERVICES -->
<section class="main-services container">

    <!-- Service 1 -->
    <div class="service-row">
        <div class="service-image">
            <img src="<?= base_url('assets/images/projects/projbg.jpg') ?>" alt="Architectural Design">
            <div class="service-badge">01</div>
        </div>
        <div class="service-content">
            <div class="service-icon">🏛️</div>
            <h3>Architectural Design & Planning</h3>
            <p>
                Our architectural team creates innovative and functional designs that blend aesthetics with practicality.
                We work closely with clients to understand their vision and translate it into detailed architectural plans
                that meet all regulatory requirements.
            </p>
            <ul class="service-features">
                <li>✓ Concept Development & 3D Visualization</li>
                <li>✓ Structural Engineering Integration</li>
                <li>✓ Permit Processing & Documentation</li>
                <li>✓ Interior & Exterior Design</li>
            </ul>
        </div>
    </div>

    <!-- Service 2 -->
    <div class="service-row reverse">
        <div class="service-image">
            <img src="<?= base_url('assets/images/landing-image.jpg') ?>" alt="General Construction">
            <div class="service-badge">02</div>
        </div>
        <div class="service-content">
            <div class="service-icon">🏗️</div>
            <h3>General Construction</h3>
            <p>
                We provide complete construction services for residential, commercial, and industrial projects.
                Our experienced team ensures quality workmanship, adherence to timelines, and budget management
                throughout the entire construction process.
            </p>
            <ul class="service-features">
                <li>✓ Residential & Commercial Buildings</li>
                <li>✓ Renovation & Remodeling</li>
                <li>✓ Site Development & Preparation</li>
                <li>✓ Quality Control & Inspection</li>
            </ul>
        </div>
    </div>

    <!-- Service 4 -->
    <div class="service-row">
        <div class="service-image">
            <img src="<?= base_url('assets/images/about/jmca_about.png') ?>" alt="Infrastructure Development">
            <div class="service-badge">03</div>
        </div>
        <div class="service-content">
            <div class="service-icon">🌉</div>
            <h3>Infrastructure Development</h3>
            <p>
                We specialize in building critical infrastructure projects including roads, bridges, and utilities.
                Our infrastructure solutions are designed for durability, sustainability, and to meet the growing
                needs of modern communities.
            </p>
            <ul class="service-features">
                <li>✓ Road & Highway Construction</li>
                <li>✓ Bridge & Overpass Projects</li>
                <li>✓ Drainage & Flood Control Systems</li>
                <li>✓ Utilities Installation & Maintenance</li>
            </ul>
        </div>
    </div>

</section>


<!-- ADDITIONAL SERVICES -->
<section class="additional-services">
    <div class="container">
        <div class="section-header">
            <span>OTHER SERVICES</span>
            <h2>Additional Solutions</h2>
        </div>
        
        <div class="additional-grid">
            
            <div class="additional-card">
                <div class="additional-icon">📋</div>
                <h4>Building Permit Processing</h4>
                <p>Complete assistance with building permits and other regulatory requirements.</p>
            </div>
            
            <div class="additional-card">
                <div class="additional-icon">💰</div>
                <h4>Loan Processing</h4>
                <p>Expert guidance through the loan application process for your construction project.</p>
            </div>
            
            <div class="additional-card">
                <div class="additional-icon">🏡</div>
                <h4>Residential Design</h4>
                <p>Custom home designs that reflect your lifestyle and preferences.</p>
            </div>
            
            <div class="additional-card">
                <div class="additional-icon">🏢</div>
                <h4>Commercial Design</h4>
                <p>Functional and attractive designs for commercial and office spaces.</p>
            </div>
            
            <div class="additional-card">
                <div class="additional-icon">🔨</div>
                <h4>Renovation & Remodeling</h4>
                <p>Transform existing spaces with our expert renovation services.</p>
            </div>
            
            <div class="additional-card">
                <div class="additional-icon">📊</div>
                <h4>Cost Estimation</h4>
                <p>Detailed and accurate cost estimates for your construction project.</p>
            </div>
            
        </div>
    </div>
</section>

<!-- SERVICES GALLERY -->
<section class="services-gallery">
    <div class="container">
        <div class="section-header">
            <span>OUR PROJECTS</span>
            <h2>Transforming Dreams Into Reality</h2>
            <p>We exert great effort and dedication to each project we handle from start of design conception to actual construction turnover</p>
        </div>
        
        <div class="gallery-grid">
            
            <div class="gallery-item">
                <img src="<?= base_url('assets/images/services/service1.jpg') ?>" alt="Modern House Design">
                <div class="gallery-overlay">
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="<?= base_url('assets/images/services/service2.jpg') ?>" alt="Modern House Design">
                <div class="gallery-overlay">
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="<?= base_url('assets/images/services/service3.jpg') ?>" alt="Modern House Design">
                <div class="gallery-overlay">
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="<?= base_url('assets/images/services/service4.jpg') ?>" alt="Modern House Design">
                <div class="gallery-overlay">
                </div>
            </div>
            
            <div class="gallery-item">
                <img src="<?= base_url('assets/images/services/service5.jpg') ?>" alt="Modern House Design">
                <div class="gallery-overlay">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- PROCESS SECTION -->
<section class="process-section container">
    <div class="section-header">
        <span>OUR PROCESS</span>
        <h2>How We Work</h2>
    </div>
    
    <div class="process-timeline">
        
        <div class="process-step">
            <div class="process-number">1</div>
            <div class="process-content">
                <h4>Consultation</h4>
                <p>Professional consultation to understand your vision and requirements.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="process-number">2</div>
            <div class="process-content">
                <h4>Design Development</h4>
                <p>Architectural planning and design with detailed specifications.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="process-number">3</div>
            <div class="process-content">
                <h4>Visualization</h4>
                <p>2D and 3D visualization with video animation and walkthroughs.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="process-number">4</div>
            <div class="process-content">
                <h4>Documentation</h4>
                <p>Building estimates, specifications, and permit processing.</p>
            </div>
        </div>
        
        <div class="process-step">
            <div class="process-number">5</div>
            <div class="process-content">
                <h4>Construction</h4>
                <p>Supervision services and project management until completion.</p>
            </div>
        </div>
        
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="why-choose">
    <div class="container">
        <div class="section-header">
            <span>WHY CHOOSE JMCA</span>
            <h2>At JMCA, what you can only<br>IMAGINE, WE CAN, VISUALIZE,<br>TRANSLATE, CREATE</h2>
        </div>
        
        <div class="advantages-grid">
            
            <div class="advantage-card">
                <div class="advantage-icon">🎨</div>
                <h4>Creative Design</h4>
                <p>Innovative architectural solutions that bring your dreams to life with stunning visual impact.</p>
            </div>
            
            <div class="advantage-card">
                <div class="advantage-icon">👷</div>
                <h4>Expert Team</h4>
                <p>Experienced architects and engineers committed to delivering excellence in every project.</p>
            </div>
            
            <div class="advantage-card">
                <div class="advantage-icon">💻</div>
                <h4>Advanced Technology</h4>
                <p>State-of-the-art visualization tools including 3D rendering and video animation.</p>
            </div>
            
            <div class="advantage-card">
                <div class="advantage-icon">⏱️</div>
                <h4>Timely Delivery</h4>
                <p>We respect deadlines and ensure projects are completed on schedule.</p>
            </div>
            
            <div class="advantage-card">
                <div class="advantage-icon">📋</div>
                <h4>Complete Documentation</h4>
                <p>Comprehensive building plans, permits, and specifications for your project.</p>
            </div>
            
            <div class="advantage-card">
                <div class="advantage-icon">🤝</div>
                <h4>Client Partnership</h4>
                <p>We build lasting relationships through transparency and excellent communication.</p>
            </div>
            
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="services-cta">
    <div class="container">
        <h2>Ready to Start Your Project?</h2>
        <p>Let's transform your dreams into reality with professional architectural & engineering services</p>
        <a href="<?= base_url('contact') ?>" class="cta-button">Get a Free Consultation</a>
    </div>
</section>

<?= $this->endSection() ?>