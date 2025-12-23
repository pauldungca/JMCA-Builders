<?= $this->extend('home/layout') ?>

<?= $this->section('page_css') ?>
<link href="<?= base_url('assets/css/about.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- HERO -->
<section class="about-hero">
    <div class="about-hero-content container">
        <h1>
            Transforming <span>Dreams</span><br>
            Into Reality
        </h1>
        <p>Architectural & Engineering Excellence</p>
    </div>
</section>

<!-- ABOUT US -->
<section class="about-section container">
    <div class="section-header">
        <span>ABOUT US</span>
        <h2>Our Story</h2>
    </div>

    <div class="about-grid">
        <div class="about-text">
            <p>
                JMCA Builders, Inc. comprises of passion driven Individuals, 
                a group that started as colleagues bounded by Real Estate Company, dermined to make there mark in this world.
            </p>
            <p>
                We were rooted from developing lands, we saw the need for a functionally aesthetic and structurally 
                feasible structures for the lands we develop, thus we create JMCA Builders, Inc.
            </p>
        </div>

        <div class="about-image">
            <img src="<?= base_url('assets/images/about/jmca_about.png') ?>" alt="About JMCA">
        </div>
    </div>
</section>

<!-- EXPANDED VISION & MISSION -->
<section class="vm-detailed-section">
    <div class="container">
        <div class="section-header">
            <span>OUR PURPOSE</span>
            <h2>Vision & Mission</h2>
        </div>

        <div class="vm-detailed-grid">
            <div class="vm-detailed-box">
                <div class="vm-icon">🏆</div>
                <h3>Our Vision</h3>
                <p>
                    To be the leading construction company in the industry, known for our commitment to 
                    quality, excellence, and innovation. We strive to be the company of choice for both 
                    clients and employees, providing exceptional service and creating long-term partnerships.
                </p>
                <p>
                    Our aim is to build a sustainable future by delivering outstanding construction projects 
                    that exceed expectations, while also providing our employees with a safe, rewarding, and 
                    fulfilling work environment. Together, we will continue to innovate and grow, setting 
                    new standards of excellence in the construction industry.
                </p>
            </div>
            
            <div class="vm-detailed-box">
                <div class="vm-icon">🎯</div>
                <h3>Our Mission</h3>
                <p>
                    To provide and perform any type of construction project that meets the rapid growth 
                    of the Philippine construction industry, its needs, and the growing demands of our clients.
                </p>
                <p>
                    Our commitment is to continuously strive to deliver first-rate results for every project 
                    we undertake, whether it's a large commercial development or any infrastructure project. 
                    We will ensure that every project is of the highest quality, completed on time, and within budget.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES -->
<section class="values-section container">
    <div class="section-header">
        <span>OUR PRINCIPLES</span>
        <h2>Core Values</h2>
    </div>

    <div class="values-grid">
        <div class="value-card">
            <div class="value-icon">✓</div>
            <h4>Excellence in Execution</h4>
            <p>We are committed to delivering first-rate results for every project, ensuring the highest quality standards, on-time completion, and strict budget adherence.</p>
        </div>
        
        <div class="value-card">
            <div class="value-icon">🤝</div>
            <h4>Integrity & Partnership</h4>
            <p>We build long-term relationships with our clients based on trust, transparency, and a shared commitment to turning their vision into reality.</p>
        </div>
        
        <div class="value-card">
            <div class="value-icon">♻️</div>
            <h4>Innovation & Sustainability</h4>
            <p>We incorporate innovative design and sustainable practices into our projects, reducing environmental impact while creating future-proof structures.</p>
        </div>
        
        <div class="value-card">
            <div class="value-icon">👥</div>
            <h4>Team Development</h4>
            <p>We provide our employees with opportunities to develop their careers and enhance their futures in a stimulating, equal, and reliable work environment.</p>
        </div>
    </div>
</section>

<!-- ENVIRONMENTAL & SAFETY POLICIES -->
<section class="policy-section">
    <div class="container">
        <div class="section-header">
            <span>OUR COMMITMENT</span>
            <h2>Environmental & Safety Policies</h2>
        </div>
        
        <div class="policy-content">
            <h3>Environmental Policy</h3>
            <p>
                With our philosophy of <strong>"Creating a Vibrant Environment for All Members of Society,"</strong> 
                JMCA Builders strives for the development of quality social infrastructure and the improvement 
                of living quality in harmony with nature.
            </p>
            <p>
                As environmental challenges increase worldwide, we recognize that our business activities impact 
                the environment. Guided by environmental management principles and working toward an environmentally 
                sensitive society, JMCA Builders is committed to <strong>"Environmental Protection and Innovation."</strong>
            </p>
            
            <h3>Safety Commitment</h3>
            <p>
                Safety is our top priority on every project site. We implement rigorous safety protocols, 
                regular training programs, and continuous monitoring to ensure the well-being of our employees, 
                subcontractors, clients, and the general public. Our safety record is a testament to our 
                unwavering commitment to creating secure work environments.
            </p>
        </div>
    </div>
</section>

<!-- PROJECT GALLERY -->
<section class="gallery-section">
    <div class="container">
        <div class="section-header">
            <span>GALLERY</span>
            <h2>Featured</h2>
        </div>

        <div class="gallery-grid">
            <img src="<?= base_url('assets/images/about/gallery1.jpg') ?>">
            <img src="<?= base_url('assets/images/about/gallery2.jpg') ?>">
            <img src="<?= base_url('assets/images/about/gallery3.jpg') ?>">
            <img src="<?= base_url('assets/images/about/gallery4.jpg') ?>">
            <img src="<?= base_url('assets/images/about/gallery5.jpg') ?>">
            <img src="<?= base_url('assets/images/about/gallery6.jpg') ?>">
            <img src="<?= base_url('assets/images/about/gallery7.jpg') ?>">
            <img src="<?= base_url('assets/images/about/gallery8.jpg') ?>">
        </div>
    </div>
</section>

<!-- CTA -->
<!-- <section class="about-cta">
    <h2>Imagine. Visualize. Create.</h2>
    <p>At JMCA, what you imagine — we build.</p>
    <a href="<?= base_url('contact') ?>">Contact Us</a>
</section> -->

<?= $this->endSection() ?>