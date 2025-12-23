<?= $this->extend('home/layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1>Services</h1>
    <p class="lead">Get in touch with us for your construction needs.</p>
    
    <div class="row mt-5">
        <div class="col-md-6">
            <h3>Send us a Message</h3>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <h3>Contact Information</h3>
            <div class="mt-4">
                <h5><i class="bi bi-geo-alt"></i> Address</h5>
                <p>123 Construction Ave, Building City, BC 12345</p>
                
                <h5 class="mt-4"><i class="bi bi-telephone"></i> Phone</h5>
                <p>+1 (555) 123-4567</p>
                
                <h5 class="mt-4"><i class="bi bi-envelope"></i> Email</h5>
                <p>info@jmcabuilders.com</p>
                
                <h5 class="mt-4"><i class="bi bi-clock"></i> Business Hours</h5>
                <p>Monday - Friday: 8:00 AM - 6:00 PM<br>
                Saturday: 9:00 AM - 3:00 PM<br>
                Sunday: Closed</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>