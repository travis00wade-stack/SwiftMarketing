<?php
/**
 * The main template file
 * Swift Marketing WordPress Theme
 * This template is used for all pages except the front page (which uses front-page.php)
 */
get_header(); ?>

<div class="page-bg">
    <?php if (is_front_page() || is_home()) : ?>
        <!-- Front page content is handled by front-page.php -->
        <!-- This section is kept as fallback if front-page.php is missing -->
        <div class="container mx-auto px-4 py-20">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-900 mb-6">Swift Marketing</h1>
                <p class="text-xl text-gray-600 mb-8">Bringing Digital Dreams to Life</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient">Get Started</a>
            </div>
        </div>
    <?php else : ?>
        <div class="container mx-auto px-4 py-20">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('card max-w-4xl mx-auto'); ?>>
                        <h1 class="text-4xl font-bold text-gray-900 mb-6"><?php the_title(); ?></h1>
                        <div class="prose max-w-none">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="text-center">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">Nothing Found</h1>
                    <p class="text-gray-600">Sorry, no content was found.</p>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>