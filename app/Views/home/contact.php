<?= $this->extend('home/layout') ?>

<?= $this->section('page_css') ?>
<link href="<?= base_url('assets/css/contact.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="contact-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Let's Build Something Amazing Together</h1>
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Client Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Information Section -->
<div class="contact-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Get in Touch</h2>
            <p class="section-description">We're here to answer your questions and discuss your next project</p>
        </div>

        <div class="row g-4">
            <!-- Office Location -->
            <div class="col-lg-3 col-md-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h4>Visit Our Office</h4>
                    <p>
                        Door 5, MCR Bldg. <br>
                        along McArthur Highway, <br>
                        Brgy. Talaga, Capas, Philippines
                    </p>
               </div>
            </div>

            <!-- Phone -->
            <div class="col-lg-3 col-md-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h4>Call Us</h4>
                    <p>
                        <strong>Our Number: </strong> 0966 761 9289
                    </p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-lg-3 col-md-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h4>Email Us</h4>
                    <p>
                        <strong>Our Email: </strong> jmcabuilders2022@gmail.com
                    </p>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="col-lg-3 col-md-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <h4>Business Hours</h4>
                    <p>
                        <strong>Mon - Sat:</strong> 8:00 AM - 5:00 PM<br>
                        <strong>Sunday:</strong> Closed
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="cta-section">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Ready to Start Your Project?</h2>
            <p>Let's discuss how we can bring your construction dreams to reality</p>
            <div class="cta-buttons">
                <a 
                    class="btn btn-outline-light btn-lg"
                    href="<?= base_url('request') ?>"
                    @click="navigateTo('request', $event)"
                >
                    <i class="bi bi-envelope-fill me-2"></i>
                    Request a Quote
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>