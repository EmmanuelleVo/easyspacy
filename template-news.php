    <?php
    $news = new WP_Query([
        'post_type' => 'news',
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'desc'
    ]);

    if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); $thumbnail = get_field('image');?>
        <article class="single-news" itemprop="subjectOf" itemscope itemtype="https://schema.org/Article">
            <h4 class="single-news__title" itemprop="name headline"><?php the_title(); ?></h4>
            <div class="single-news-container">
                <img src="<?= $thumbnail['sizes']['thumbnail']; ?>" alt="<?= $thumbnail['alt']; ?>" class="single-news__img"
                     srcset="<?= $thumbnail['sizes']['thumbnail']; ?> 150w,
            <?= $thumbnail['sizes']['medium']; ?> 300w,
            <?= $thumbnail['sizes']['large']; ?> 2000w">
                <div class="single-news-container-info">
                <dl class="single-news__infos hover">
                    <dt class="single-news__infos date-title sro">Date : </dt>
                    <dd class="single-news__infos date-content sro" itemprop="contentReferenceTime datePublished">
                        <time datetime="<?= get_field('date') ?>"><?= get_field('date') ?></time>
                    </dd>
                    <dt class="single-news__infos description-title sro">Difficulté : </dt>
                    <dd class="single-news__infos description-content"><?= get_field('description') ?></dd>
                </dl>
                <a href="<?php the_permalink(); ?>" class="article__link button-news">
                    En savoir plus<span class="sro">sur <?php the_title() ?></span>
                </a>
                <div class="single-news-container">
            </div>

        </article>
    <?php endwhile; else: ?>
        <p class="news__empty">Nous n'avons pas encore de news pour le moment.</p>
    <?php endif; ?>