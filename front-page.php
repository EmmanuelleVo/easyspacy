<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="home">
        <section class="home__hero">
            <svg xmlns="http://www.w3.org/2000/svg" width="850" height="500" viewBox="0 0 1048.545 630.913">
                <g id="svg" transform="translate(-960 -158.087)">
                    <circle id="Ellipse_3" data-name="Ellipse 3" cx="275" cy="275" r="275" transform="translate(1200 300)" fill="#fdebd3"/>
                    <path id="Polygone_1" data-name="Polygone 1" d="M47.25,0,43.313,20.625,63,27.5,43.313,34.375,47.25,55,31.5,41.25,15.75,55l3.938-20.625L0,27.5l19.688-6.875L15.75,0,31.5,13.75Z" transform="translate(960 367)" fill="#fff"/>
                    <path id="Polygone_2" data-name="Polygone 2" d="M47.25,0,43.313,20.625,63,27.5,43.313,34.375,47.25,55,31.5,41.25,15.75,55l3.938-20.625L0,27.5l19.688-6.875L15.75,0,31.5,13.75Z" transform="translate(1343.763 644.087) rotate(34)" fill="#fff"/>
                    <path id="Polygone_7" data-name="Polygone 7" d="M47.25,0,43.313,20.625,63,27.5,43.313,34.375,47.25,55,31.5,41.25,15.75,55l3.938-20.625L0,27.5l19.688-6.875L15.75,0,31.5,13.75Z" transform="translate(1140.763 158.087) rotate(34)" fill="#002a3d"/>
                    <path id="Polygone_3" data-name="Polygone 3" d="M81,0,74.25,35.25,108,47,74.25,58.75,81,94,54,70.5,27,94l6.75-35.25L0,47,33.75,35.25,27,0,54,23.5Z" transform="translate(1621.763 582.087) rotate(34)" fill="#002a3d"/>
                    <path id="Polygone_4" data-name="Polygone 4" d="M101.25,0,92.813,43.875,135,58.5,92.813,73.125,101.25,117,67.5,87.75,33.75,117l8.438-43.875L0,58.5,42.188,43.875,33.75,0,67.5,29.25Z" transform="translate(1896.625 218.019) rotate(34)" fill="#fff"/>
                </g>
            </svg>
            <h2 class="home__title sro"><?= the_title()?></h2>
            <div class="home__description" itemprop="description">
                <p class="home__description-content">
                    <b>Easy Spacy</b> est une initiative visant la vulgarisation en aérospatiale et en astrophysique par <b>Sarah Joiret</b> et <b>Léo Cotteleer</b>
                </p>
            </div>
            <div class="home__avatars">
                <img src="http://localhost:8888/wordpress-easyspacy/wp-content/uploads/2021/09/avatar_Leo-copie.png" alt="avatar" class="home__img leo">
                <img src="http://localhost:8888/wordpress-easyspacy/wp-content/uploads/2021/09/avatar_Sarah-copie.png" alt="avatar" class="home__img sarah">
            </div>
        </section>

        <section class="capsules__new">
            <div class="capsules__container">
                <h3 class="capsules__new-title">Capsules récentes</h3>
                <a href="#" class="capsules__new-link see-all button">Voir toutes les capsules</a>
            </div>
            <div class="capsules-container">
                <?php get_template_part('template-capsules') ?>
            </div>
        </section>

        <section class="news__new">
            <div class="news__container">
            <h3 class="news__new-title">News récentes</h3>
            <a href="#" class="news__new-link see-all button">Voir toutes les news</a>
            </div>
            <div class="news-container">

            <?php get_template_part('template-news') ?>
            </div>
        </section>



    </main>
<?php endwhile; else : ?>
    <div class="empty">
        <p class="empty__message">Oups, nous n'avons rien à afficher.</p>
    </div>
<?php endif; ?>
<?php get_footer(); ?>