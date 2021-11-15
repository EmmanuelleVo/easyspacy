<?php /* Template Name: News */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="news-page">
            <h2 class="news-page__title">News</h2>
            <?php $news = new WP_Query([
                'post_type' => 'news',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'desc'
            ]); ?>
    <?php if ($news->have_posts()) : ?>
        <section class="news-list">
            <?php while ($news->have_posts()) : $news->the_post(); ?>
                <?php get_template_part('template-news') ?>
            <?php endwhile; ?>
        </section>
    <?php else : ?>
        <p class="news-page__empty-message">Il n'y a pas encore d'actualités.</p>

    </main>
<?php endif; endwhile; endif; ?>
<?php get_footer(); ?>