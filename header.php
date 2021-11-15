<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= is_front_page() ? ''. bloginfo('description') : wp_title(). ' • Easy Spacy' ?></title>

    <!--ASSETS-->
    <link rel="stylesheet" href="<?= es_asset('css/theme.css') ?>">
    <script src="<?= es_asset('js/app.js') ?>"></script>
    <link rel="icon" sizes="180x180"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/logo.jpg' ?>">

    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body itemscope itemtype="https://schema.org/WebSite">
    <header class="top">
        <h1 class="top__title sro" itemprop="name"><?= is_front_page() ? 'Accueil' : trim(wp_title('Easy Spacy', false)) ?></h1>
        <a href="<?= site_url(); ?>" class="top__logo" title="Retour à l‘Accueil" itemprop="mainEntityOfPage">
            <img src="<?php echo get_template_directory_uri() . '/resources/favicon/logo.jpg' ?>" alt="Aller à l'accueil d'Easy Spacy" class="top__logo"  width="80">
        </a>
        <div class="top__container">
            <nav class="top__nav">
                <ul class="top__nav menu">
                    <?php foreach(es_menu('main') as $link): ?>
                    <li class="menu__links">
                            <a href="<?= $link->url; ?>" class="menu__link <?= es_bem('menu__link', $link->modifiers); ?>"><?= $link->label; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <h2 class="sro">Navigation principale</h2>
            </nav>
            <form action="<?= get_home_url() ?>" method="get" class="search-form">
                <label for="search" class="search__form-label sro">Rechercher</label>
                <input type="text" name="search" id="search" value="<?= isset($_GET['search']) ? get_search_query() : "" ?>" class="search__form-input" autocomplete="off" spellcheck="false" />
                <button type="submit" class="search__form-submit button sro">Rechercher</button>
            </form>
        </div>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </header>
