<?php /* Template Name: Capsules */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="capsules-page">
        <section class="capsules-all">
            <h2 class="capsules-all__title"><?php the_title() ?></h2>
            <div class="capsules-container">
                <?php get_template_part('template-capsules') ?>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
