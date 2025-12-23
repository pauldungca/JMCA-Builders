<?= $this->extend('home/layout') ?>

<?= $this->section('page_css') ?>
<link href="<?= base_url('assets/css/team.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section class="team-hero">
    <div class="team-hero-content container text-center">
        <h1>Meet <span>Our Team</span></h1>
        <p>The people behind our success</p>
    </div>
</section>

<!-- TEAM SECTION -->
<section class="team-section container">
    <div class="team-grid">

        <!-- TEAM MEMBER -->
        <div class="team-card">
            <div class="team-image">
                <img src="<?= base_url('assets/images/teams/team1.jpg') ?>" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Juan Dela Cruz</h3>
                <span class="team-role">Project Manager</span>
                <p>
                    Oversees all construction projects ensuring quality,
                    safety, and on-time delivery.
                </p>
            </div>
        </div>

        <div class="team-card">
            <div class="team-image">
                <img src="<?= base_url('assets/images/teams/team2.jpg') ?>" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Maria Santos</h3>
                <span class="team-role">Architect</span>
                <p>
                    Designs innovative and sustainable structures
                    aligned with client visions.
                </p>
            </div>
        </div>

        <div class="team-card">
            <div class="team-image">
                <img src="<?= base_url('assets/images/teams/team3.jpg') ?>" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Pedro Reyes</h3>
                <span class="team-role">Site Engineer</span>
                <p>
                    Manages site operations and ensures engineering
                    standards are met.
                </p>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>
