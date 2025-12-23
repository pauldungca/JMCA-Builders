<?= $this->extend('home/layout') ?>

<?= $this->section('page_css') ?>
<link href="<?= base_url('assets/css/project.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- HERO SECTION -->
<section class="projects-hero">
    <div class="projects-hero-content container">
        <h1>
            Our <span>Projects</span>
        </h1>
        <p>Transforming Vision Into Built Reality</p>
    </div>
</section>

<!-- FILTER SECTION -->
<section class="filter-section container">
    <div class="filter-controls">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="residential">Residential</button>
        <button class="filter-btn" data-filter="commercial">Commercial</button>
        <button class="filter-btn" data-filter="infrastructure">Infrastructure</button>
        <button class="filter-btn" data-filter="ongoing">Ongoing</button>
        <button class="filter-btn" data-filter="completed">Completed</button>
    </div>
</section>


<section class="projects-section container">
    <div class="projects-grid">

        <?php foreach ($projects as $project): ?>

            <div class="project-card"
                 data-category="<?= strtolower($project['category']) . ' ' . $project['status'] ?>">

                <div class="project-image">
                    <img src="<?= base_url($project['image']) ?>"
                         alt="<?= esc($project['title']) ?>">

                    <div class="project-overlay">
                        <div class="project-status <?= esc($project['status']) ?>">
                            <?= ucfirst($project['status']) ?>
                        </div>
                        <a href="#" class="view-project-btn">View Details</a>
                    </div>
                </div>

                <div class="project-info">
                    <span class="project-category"><?= esc($project['category']) ?></span>
                    <h3><?= esc($project['title']) ?></h3>

                    <p class="project-location">
                        📍 <?= esc($project['location']) ?>
                    </p>

                    <div class="project-meta">
                        <span>🏗️ <?= esc($project['duration']) ?></span>
                        <span>📐 <?= esc($project['size']) ?></span>
                    </div>
                </div>

            </div>

        <?php endforeach; ?>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards  = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {

            // remove active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filter = button.getAttribute('data-filter');

            projectCards.forEach(card => {
                const categories = card.getAttribute('data-category');

                if (filter === 'all' || categories.includes(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

});
</script>

<?= $this->endSection() ?>