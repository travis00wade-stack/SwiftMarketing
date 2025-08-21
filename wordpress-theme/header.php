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
    
    <!-- Inline Critical CSS for immediate rendering -->
    <style>
        /* Critical CSS for immediate loading */
        .page-bg { 
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 50%, #e0e7ff 100%); 
            min-height: 100vh; 
        }
        .hero-bg {
            background: linear-gradient(135deg, rgba(248, 250, 252, 0.95), rgba(224, 242, 254, 0.95), rgba(224, 231, 255, 0.95)), url('https://images.unsplash.com/photo-1617012811506-344ff32b7055?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .service-card {
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 400px;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .service-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.9), rgba(79, 70, 229, 0.8));
            z-index: 1;
        }
        .card-content {
            position: relative;
            z-index: 2;
            color: white;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 2rem;
        }
        .container {
            width: 100%; max-width: 1200px; 
            margin-left: auto; margin-right: auto; 
            padding-left: 1rem; padding-right: 1rem;
        }
        .text-hero { 
            font-size: clamp(2.5rem, 5vw, 4.5rem); 
            line-height: 1.1; font-weight: 900; 
        }
        .text-section-title { 
            font-size: clamp(2rem, 4vw, 3rem); 
            line-height: 1.2; font-weight: 800; 
        }
        .btn-gradient {
            background: linear-gradient(to right, #2563eb, #4f46e5);
            color: white; padding: 0.75rem 2rem; 
            border-radius: 0.5rem; text-decoration: none;
            display: inline-flex; align-items: center;
            transition: all 0.3s ease; border: none; cursor: pointer;
        }
        .btn-gradient:hover {
            background: linear-gradient(to right, #1d4ed8, #4338ca);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            color: white; text-decoration: none;
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