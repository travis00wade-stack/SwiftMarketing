<?php
/**
 * The main template file
 * Swift Marketing WordPress Theme
 */
get_header(); ?>

<div class="page-bg">
    <?php if (is_front_page()) : ?>
        <?php get_template_part('template-parts/hero-section'); ?>
        <?php get_template_part('template-parts/stats-section'); ?>
        <?php get_template_part('template-parts/services-section'); ?>
        <?php get_template_part('template-parts/case-studies-section'); ?>
        <?php get_template_part('template-parts/testimonials-section'); ?>
        <?php get_template_part('template-parts/technologies-section'); ?>
        <?php get_template_part('template-parts/cta-section'); ?>
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