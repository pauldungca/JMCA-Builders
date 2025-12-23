<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'JMCA Builders') ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
    
    <!-- Page Specific CSS -->
    <?= $this->renderSection('page_css') ?>
    
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@3.3.4/dist/vue.global.js"></script>
</head>
<body>
    <div id="app">
        <?= $this->include('components/header') ?>
        
        <main id="main-content">
            <?= $this->renderSection('content') ?>
        </main>
        
        <?= $this->include('components/footer') ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const { createApp } = Vue;

        createApp({
            data() {
                return {
                    currentPage: this.getCurrentPageFromUrl()
                }
            },
            methods: {
                getCurrentPageFromUrl() {
                    const path = window.location.pathname;
                    const segments = path.split('/').filter(segment => segment !== '');
                    
                    // Get the last segment or default to 'home'
                    const page = segments.length > 0 ? segments[segments.length - 1] : 'home';
                    return page;
                },
                
                navigateTo(page, event) {
                    event.preventDefault();
                    
                    // Update current page
                    this.currentPage = page;
                    
                    // Build the URL
                    const url = page === 'home' ? '/' : `/${page}`;
                    
                    // Show loading state
                    const mainContent = document.getElementById('main-content');
                    mainContent.style.opacity = '0.5';
                    
                    // Load content via AJAX
                    fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(html => {
                        // Parse the HTML response
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        
                        // Extract the main content
                        const newContent = doc.querySelector('#main-content');
                        
                        if (newContent) {
                            // Replace the content
                            mainContent.innerHTML = newContent.innerHTML;
                            
                            // Update browser history
                            history.pushState({ page: page }, '', url);
                            
                            // Scroll to top
                            window.scrollTo({ top: 0, behavior: 'smooth' });
                        } else {
                            // If main-content not found, reload the page
                            window.location.href = url;
                        }
                        
                        // Reset opacity
                        mainContent.style.opacity = '1';
                    })
                    .catch(error => {
                        console.error('Error loading content:', error);
                        // Fallback to normal navigation
                        window.location.href = url;
                    });
                }
            },
            mounted() {
                // Handle browser back/forward buttons
                window.addEventListener('popstate', (event) => {
                    if (event.state && event.state.page) {
                        this.currentPage = event.state.page;
                        location.reload();
                    }
                });
                
                // Set initial state
                history.replaceState({ page: this.currentPage }, '', window.location.pathname);
            }
        }).mount('#app');
    </script>
</body>
</html>