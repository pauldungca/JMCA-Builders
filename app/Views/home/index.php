<?= $this->extend('home/layout') ?>
    <?= $this->section('page_css') ?>
    <link href="<?= base_url('assets/css/index.css') ?>" rel="stylesheet">
    <?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1>Welcome to JMCA Builders</h1>
    <p>Your trusted partner in construction excellence.</p>
    
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quality Construction</h5>
                    <p class="card-text">We deliver top-notch construction services with attention to detail.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Expert Team</h5>
                    <p class="card-text">Our experienced professionals ensure project success.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">On-Time Delivery</h5>
                    <p class="card-text">We pride ourselves on meeting deadlines and exceeding expectations.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>