<?php
/**
 * The header for Swift Marketing theme
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
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-2 group">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-xl font-bold text-gray-900"><?php bloginfo('name'); ?></div>
                    <div class="text-xs text-blue-600 font-medium">Digital Dreams to Life</div>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="<?php echo home_url(); ?>" class="relative px-3 py-2 text-sm font-medium transition-colors duration-300 hover:text-blue-600 <?php echo is_front_page() ? 'text-blue-600' : 'text-gray-700'; ?>">
                    Home
                    <?php if (is_front_page()) : ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full"></div>
                    <?php endif; ?>
                </a>
                <a href="<?php echo home_url('/services'); ?>" class="relative px-3 py-2 text-sm font-medium transition-colors duration-300 hover:text-blue-600 <?php echo is_page('services') ? 'text-blue-600' : 'text-gray-700'; ?>">
                    Services
                    <?php if (is_page('services')) : ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full"></div>
                    <?php endif; ?>
                </a>
                <a href="<?php echo home_url('/case-studies'); ?>" class="relative px-3 py-2 text-sm font-medium transition-colors duration-300 hover:text-blue-600 <?php echo is_page('case-studies') ? 'text-blue-600' : 'text-gray-700'; ?>">
                    Case Studies
                    <?php if (is_page('case-studies')) : ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full"></div>
                    <?php endif; ?>
                </a>
                <a href="<?php echo home_url('/contact'); ?>" class="relative px-3 py-2 text-sm font-medium transition-colors duration-300 hover:text-blue-600 <?php echo is_page('contact') ? 'text-blue-600' : 'text-gray-700'; ?>">
                    Contact
                    <?php if (is_page('contact')) : ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full"></div>
                    <?php endif; ?>
                </a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden lg:block">
                <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient shadow-lg hover:shadow-xl transition-all duration-300">
                    Get Started
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300" aria-label="Toggle menu">
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
            <nav class="py-4 space-y-2">
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
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center">
                        Get Started
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>