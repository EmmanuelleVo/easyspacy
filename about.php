<?php /* Template Name: A propos */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="about-page">
        <svg xmlns="http://www.w3.org/2000/svg" width="850" height="500" viewBox="0 0 1048.545 630.913">
            <g id="svg" transform="translate(-960 -158.087)">
                <circle id="Ellipse_3" data-name="Ellipse 3" cx="275" cy="275" r="350" transform="translate(1200 150)" fill="#fdebd3"/>
                <path id="Polygone_1" data-name="Polygone 1" d="M47.25,0,43.313,20.625,63,27.5,43.313,34.375,47.25,55,31.5,41.25,15.75,55l3.938-20.625L0,27.5l19.688-6.875L15.75,0,31.5,13.75Z" transform="translate(960 367)" fill="#fff"/>
                <path id="Polygone_2" data-name="Polygone 2" d="M47.25,0,43.313,20.625,63,27.5,43.313,34.375,47.25,55,31.5,41.25,15.75,55l3.938-20.625L0,27.5l19.688-6.875L15.75,0,31.5,13.75Z" transform="translate(1343.763 644.087) rotate(34)" fill="#fff"/>
                <path id="Polygone_7" data-name="Polygone 7" d="M47.25,0,43.313,20.625,63,27.5,43.313,34.375,47.25,55,31.5,41.25,15.75,55l3.938-20.625L0,27.5l19.688-6.875L15.75,0,31.5,13.75Z" transform="translate(1140.763 158.087) rotate(34)" fill="#002a3d"/>
                <path id="Polygone_3" data-name="Polygone 3" d="M81,0,74.25,35.25,108,47,74.25,58.75,81,94,54,70.5,27,94l6.75-35.25L0,47,33.75,35.25,27,0,54,23.5Z" transform="translate(1621.763 582.087) rotate(34)" fill="#002a3d"/>
                <path id="Polygone_4" data-name="Polygone 4" d="M101.25,0,92.813,43.875,135,58.5,92.813,73.125,101.25,117,67.5,87.75,33.75,117l8.438-43.875L0,58.5,42.188,43.875,33.75,0,67.5,29.25Z" transform="translate(1896.625 218.019) rotate(34)" fill="#fff"/>
            </g>
        </svg>
        <h2 class="contact__title"><?php the_title(); ?></h2>
        <?php
    $members = new WP_Query([
        'post_type' => '$member',
        'posts_per_page' => 2,
        'orderby' => 'name',
        'order' => 'desc'
    ]);?>
        <section class="about">
    <?php if ($members->have_posts()) : while ($members->have_posts()) : $members->the_post(); $thumbnail = get_field('image');?>
            <div class="about__members">
                <h4 class="about_member title sro"><?php the_title(); ?></h4>
                <img src="<?= $thumbnail['sizes']['medium']; ?>" alt="<?= $thumbnail['alt']; ?>" class="capsule__img"
                srcset="<?= $thumbnail['sizes']['thumbnail']; ?> 150w,
                <?= $thumbnail['sizes']['medium']; ?> 300w,
                <?= $thumbnail['sizes']['large']; ?> 2000w">
                <p class="about__member content"><?php the_content() ?></p>
            </div>
    <?php endwhile;?>
            <a href="#" class="about__instagram button">Suivez-nous sur Instagram</a>
            <a href="#" class="about__news button">Voir nos news</a>
        </section>
    <?php else: ?>
        <p class="news__empty">Nous n'avons pas encore de news pour le moment.</p>
    <?php endif; ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>