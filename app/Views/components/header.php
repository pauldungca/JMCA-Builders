<header class="main-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/images/JMCA-logo.png') ?>?v=<?= filemtime(FCPATH.'assets/images/JMCA-logo.png') ?>" alt="JMCA Builders Logo" class="logo">
                <span class="brand-text">JMCA BUILDERS</span>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            :class="{ active: currentPage === 'home' }"
                            href="<?= base_url() ?>"
                            @click="navigateTo('home', $event)"
                        >
                            <img
                                :src="currentPage === 'home'
                                    ? '<?= base_url('assets/icons/home-active.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/home-active.png') ?>'
                                    : '<?= base_url('assets/icons/home-default.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/home-default.png') ?>'"
                                alt="Home Icon"
                                class="nav-icon"
                            >
                        Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            :class="{ active: currentPage === 'about' }"
                            href="<?= base_url('about') ?>"
                            @click="navigateTo('about', $event)"
                        >
                            <img
                                :src="currentPage === 'about'
                                    ? '<?= base_url('assets/icons/about-active.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/about-active.png') ?>'
                                    : '<?= base_url('assets/icons/about-default.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/about-default.png') ?>'"
                                alt="About Icon"
                                class="nav-icon"
                            >
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            :class="{ active: currentPage === 'team' }"
                            href="<?= base_url('team') ?>"
                            @click="navigateTo('team', $event)"
                        >
                            <img
                                :src="currentPage === 'team'
                                    ? '<?= base_url('assets/icons/team-active.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/team-active.png') ?>'
                                    : '<?= base_url('assets/icons/team-default.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/team-default.png') ?>'"
                                alt="Team Icon"
                                class="nav-icon"
                            >
                            Our Team
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            :class="{ active: currentPage === 'projects' }"
                            href="<?= base_url('projects') ?>"
                            @click="navigateTo('projects', $event)"
                        >
                            <img
                                :src="currentPage === 'projects'
                                    ? '<?= base_url('assets/icons/projects-active.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/projects-active.png') ?>'
                                    : '<?= base_url('assets/icons/projects-default.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/projects-default.png') ?>'"
                                alt="Projects Icon"
                                class="nav-icon"
                            >
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            :class="{ active: currentPage === 'services' }"
                            href="<?= base_url('services') ?>"
                            @click="navigateTo('services', $event)"
                        >
                            <img
                                :src="currentPage === 'services'
                                    ? '<?= base_url('assets/icons/services-active.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/services-active.png') ?>'
                                    : '<?= base_url('assets/icons/services-default.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/services-default.png') ?>'"
                                alt="Services Icon"
                                class="nav-icon"
                            >
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            :class="{ active: currentPage === 'contact' }"
                            href="<?= base_url('contact') ?>"
                            @click="navigateTo('contact', $event)"
                        >
                            <img
                                :src="currentPage === 'contact'
                                    ? '<?= base_url('assets/icons/contact-active.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/contact-active.png') ?>'
                                    : '<?= base_url('assets/icons/contact-default.png') ?>?v=<?= filemtime(FCPATH.'assets/icons/contact-default.png') ?>'"
                                alt="Contact Icon"
                                class="nav-icon"
                            >
                            Contact Us
                        </a>
                    </li>
                  <li class="nav-item">
                        <a 
                            class="nav-link quote-link <?= ($activePage === 'request') ? 'active' : '' ?>"
                            href="<?= base_url('request') ?>"
                        >
                            <i class="bi bi-envelope-fill me-2"></i>
                            Request a Quote
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>