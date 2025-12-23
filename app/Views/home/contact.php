<?= $this->extend('home/layout') ?>

<?= $this->section('page_css') ?>
<link href="<?= base_url('assets/css/contact.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="contact-hero">
    <div class="container text-center">
        <h1>Let's Build Together</h1>
        <p class="lead">We're here to bring your construction vision to life</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="contact-form-card">
                <h3 class="section-title">Send us a Message</h3>
                <form id="contactForm">
                    <div class="mb-4">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" class="form-control" id="email" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="+1 (555) 123-4567">
                    </div>
                    
                    <div class="mb-4">
                        <label for="subject" class="form-label">Subject *</label>
                        <select class="form-select" id="subject" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="quote">Request a Quote</option>
                            <option value="residential">Residential Project</option>
                            <option value="commercial">Commercial Project</option>
                            <option value="renovation">Renovation</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="message" class="form-label">Message *</label>
                        <textarea class="form-control" id="message" rows="6" placeholder="Tell us about your project..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-send">
                        <i class="bi bi-send me-2"></i>Send Message
                    </button>
                </form>
            </div>
        </div>
        
        <div class="col-lg-6 mb-4">
            <div class="contact-info-card">
                <h3 class="section-title">Get in Touch</h3>
                
                <div class="info-item">
                    <h5><i class="bi bi-geo-alt-fill"></i> Our Location</h5>
                    <p>123 Construction Ave<br>Building City, BC 12345</p>
                </div>
                
                <div class="info-item">
                    <h5><i class="bi bi-telephone-fill"></i> Phone</h5>
                    <p>+1 (555) 123-4567<br>Toll Free: 1-800-BUILDER</p>
                </div>
                
                <div class="info-item">
                    <h5><i class="bi bi-envelope-fill"></i> Email</h5>
                    <p>info@jmcabuilders.com<br>quotes@jmcabuilders.com</p>
                </div>
                
                <div class="info-item">
                    <h5><i class="bi bi-clock-fill"></i> Business Hours</h5>
                    <p>
                        Monday - Friday: 8:00 AM - 6:00 PM<br>
                        Saturday: 9:00 AM - 3:00 PM<br>
                        Sunday: Closed
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        alert('Thank you for your message! We will get back to you soon.');
        this.reset();
    });
</script>

<?= $this->endSection() ?>