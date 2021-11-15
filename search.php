<?php /* Template Name: Recherche */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="search-page">

        <?php $query = new WP_Query([
            //'s' => $s,
            'post_type' => 'capsule',
            'orderby' => 'date',
            'order' => 'desc'
        ]); ?>
        <h2 class='search-page__title'><?php the_title() ?></h2>
        <form action="<?= get_home_url() ?>" method="get" class="search__form">
            <label for="search" class="search__form-label sro">Rechercher</label>
            <input type="text" name="search" id="search" value="<?= isset($_GET['s']) ? get_search_query() : "" ?>" class="search__form-input" autocomplete="off" spellcheck="false" />
            <button type="submit" class="search__form-submit button">Rechercher</button>
        </form>
        <p class="search-page__result-title">Résultats pour la recherche <em class="search-page__title-search">"<?= get_search_query() ?>"</em></p>
        <?php if ($query->have_posts()) : ?>
            <section class="search-list">
                <h3 class="search-list__title sro">Capsules correspondantes à la recherche</h3>
                <div class="capsules-container">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php get_template_part('template-capsules', null, ["heading" => 4]) ?>
                <?php endwhile; ?>
                </div>
            </section>
        <?php else : ?>
            <h3 class="search-page__error">Il n'y a pas de capsule correspondant à votre recherche.</h3>
        <?php endif; ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>