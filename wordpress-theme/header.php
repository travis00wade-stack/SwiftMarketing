<?php
/**
 * The header for Swift Marketing theme
 * Compatible with Elementor
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="digital marketing agency south africa, clickup partners, ai-driven marketing, custom software development, seo services cape town, project management solutions">
    <meta name="author" content="Swift Marketing">
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="Leading South African digital marketing agency specializing in AI-driven strategies, ClickUp project management, and custom software solutions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="https://www.swiftmarketing.co.za/wp-content/uploads/2020/09/Swift-Marketing-Logo-2020-Square.png">
    
    <!-- Preload key resources -->
    <link rel="preload" href="https://www.swiftmarketing.co.za/wp-content/uploads/2020/09/Swift-Marketing-Logo-2020-Square.png" as="image">
    
    <!-- Essential inline CSS for immediate rendering only -->
    <style>
        /* Only essential layout CSS for immediate rendering */
        body { margin: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        .container { width: 100%; max-width: 1200px; margin-left: auto; margin-right: auto; padding-left: 1rem; padding-right: 1rem; }
        .btn-gradient {
            background: linear-gradient(to right, #2563eb, #4f46e5);
            color: white; padding: 0.75rem 2rem; border-radius: 0.5rem; 
            text-decoration: none; display: inline-flex; align-items: center;
            transition: all 0.3s ease; border: none; cursor: pointer;
        }
        .btn-gradient:hover {
            background: linear-gradient(to right, #1d4ed8, #4338ca);
            transform: translateY(-2px); color: white; text-decoration: none;
        }
    </style>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
// WordPress 5.2+ wp_body_open hook
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>

<header class="site-header" id="site-header">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-3 group" aria-label="Swift Marketing Home">
                <img 
                    src="https://www.swiftmarketing.co.za/wp-content/uploads/2020/09/Swift-Marketing-Logo-2020-Square.png" 
                    alt="Swift Marketing Logo" 
                    class="site-logo h-12 w-12"
                    loading="eager"
                />
                <div>
                    <div class="text-xl font-bold text-gray-900"><?php bloginfo('name'); ?></div>
                    <div class="text-xs text-blue-600 font-medium">Digital Dreams to Life</div>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8" role="navigation" aria-label="Main navigation">
                <a href="<?php echo home_url(); ?>" class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">
                    Home
                </a>
                <a href="<?php echo home_url('/services'); ?>" class="nav-link <?php echo is_page('services') ? 'active' : ''; ?>">
                    Services
                </a>
                <a href="<?php echo home_url('/case-studies'); ?>" class="nav-link <?php echo is_page('case-studies') ? 'active' : ''; ?>">
                    Case Studies
                </a>
                <a href="<?php echo home_url('/contact'); ?>" class="nav-link <?php echo is_page('contact') ? 'active' : ''; ?>">
                    Contact
                </a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden lg:block">
                <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient shadow-lg hover:shadow-xl transition-all duration-300">
                    Get Started
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-btn"
                class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300"
                aria-label="Toggle mobile menu"
                aria-expanded="false"
            >
                <svg id="menu-icon" class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 text-gray-700 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden border-t border-gray-200 bg-white/95 backdrop-blur-md hidden">
            <nav class="py-4 space-y-2" role="navigation" aria-label="Mobile navigation">
                <a href="<?php echo home_url(); ?>" class="block px-4 py-3 text-base font-medium transition-colors duration-300 rounded-lg mx-2 <?php echo is_front_page() ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50'; ?>">
                    Home
                </a>
                <a href="<?php echo home_url('/services'); ?>" class="block px-4 py-3 text-base font-medium transition-colors duration-300 rounded-lg mx-2 <?php echo is_page('services') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50'; ?>">
                    Services
                </a>
                <a href="<?php echo home_url('/case-studies'); ?>" class="block px-4 py-3 text-base font-medium transition-colors duration-300 rounded-lg mx-2 <?php echo is_page('case-studies') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50'; ?>">
                    Case Studies
                </a>
                <a href="<?php echo home_url('/contact'); ?>" class="block px-4 py-3 text-base font-medium transition-colors duration-300 rounded-lg mx-2 <?php echo is_page('contact') ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-gray-50'; ?>">
                    Contact
                </a>
                <div class="px-2 pt-2">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center block">
                        Get Started
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

<script>
// Header scroll effect and mobile menu
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('site-header');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    // Header scroll effect
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Mobile menu toggle
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
            
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            
            mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!header.contains(event.target) && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // Close mobile menu on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }
    });
});
</script></header>