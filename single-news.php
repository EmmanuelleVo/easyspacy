<?php /* Template Name: Page News */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="single-news">
        <article class="single-news-content">
            <h2 class="single-news__title"><?php the_title() ?></h2>
            <dl class="single-news-date">
                <dt class="sro">Date</dt>
                <dd class="single-news-date__content"><?= get_the_date("d/m/Y") ?></dd>
            </dl>
            <img class="single-news-images-container__image" <?= es_the_news_attributes($image, ['news-image-2cols-1row', 'news-image-1cols-1row', 'news-image-1cols-2rows']) ?>>
            <h3 class="description__title sro">Contenu de la news</h3>
            <?php the_content() ?>
        </article>
        <a class='single-news__back-link' href="<?= get_post(49)->guid; ?>"> Retour aux actualités</a>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>