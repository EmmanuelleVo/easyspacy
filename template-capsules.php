<?php /* Template Name: template-capsules */ ?>
<?php
$capsules = new WP_Query([
    'post_type' => 'capsule',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'desc'
]);
?>
    <?php if ($capsules->have_posts()) : while ($capsules->have_posts()) :
    $capsules->the_post();
    $thumbnail = get_field('image-1'); ?>
    <article class="capsule" itemprop="subjectOf" itemscope itemtype="https://schema.org/Article">
        <h4 class="capsule__title sro" itemprop="name headline"><?php the_title(); ?></h4>
            <a href="<?php the_permalink(); ?>" class="capsule__link" rel="author">
                <img src="<?= $thumbnail['sizes']['medium']; ?>" alt="<?= $thumbnail['alt']; ?>" class="capsule__img"
                     srcset="<?= $thumbnail['sizes']['thumbnail']; ?> 150w,
            <?= $thumbnail['sizes']['medium']; ?> 300w,
            <?= $thumbnail['sizes']['large']; ?> 2000w">
            </a>
        <dl class="capsule__infos hover">
            <dt class="capsule__infos date-title sro">Date :</dt>
            <dd class="capsule__infos date-content" itemprop="contentReferenceTime datePublished">
                <time datetime="<?= get_field('date') ?>"><?= get_field('date') ?></time>
            </dd>
            <dt class="capsule__infos difficulty-title sro">Difficulté :</dt>
            <dd class="capsule__infos difficulty-content"><?= get_field('difficulty') ?></dd>
            <dt class="capsule__infos duration-title sro">Durée :</dt>
            <dd class="capsule__infos duration-content"><?= get_field('duration') ?> minutes</dd>

        </dl>
    </article>
<?php endwhile; else: ?>
    <p class="news__empty">Nous n'avons pas encore de capsule pour le moment.</p>
<?php endif; ?>
