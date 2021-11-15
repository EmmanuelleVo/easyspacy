<?php

/* *****
 * Return the useful thumbnail attributes
 * *****/
function es_the_thumbnail_attributes($sizes = [])
{
    // 1. Récupérer le thumbnail pour le post courant dans the loop
    $thumbnail = get_post(get_post_thumbnail_id());
    $thumbnail_meta = get_post_meta($thumbnail->ID);
    $src = null;

    // 2. Récupérer les tailles d'image qui nous intéressent & formater les tailles pour qu'elles soient utilisables dans srcset
    $sizes = array_map(function($size) use ($thumbnail, &$src) { // use(xxx) = pour utiliser la variable dans le scope
        $data = wp_get_attachment_image_src($thumbnail->ID, $size);

        if(is_null($src)) {
            $src = $data[0];
        }

        return $data[0] . ' ' . $data[1] . 'w';
    }, $sizes);

    // 4. Formater les attributs
    $srcset = implode(', ', $sizes);
    $alt = $thumbnail_meta['_wp_attachment_image_alt'][0] ?? null;

    // 5. Retourner les attributs générés
    return 'src="' . $src . '" srcset="' . $srcset . '" alt="' . $alt . '"';
}



/* *****
 * Return a menu structure for display
 * *****/
function es_bem($base, $modifiers = [])
{
    $classes = array_map(function($modifier) use ($base) {
        return $base . '--' . $modifier;
    }, $modifiers);

    return implode(' ', $classes);
}

/* *****
 * Return a menu structure for display
 * *****/
function es_menu($location)
{
    // 1. Récupérer l'identifiant (WP_post) de mon menu $location
    $locations = get_nav_menu_locations();
    $menu = $locations[$location];

    // 2. Récupérer les liens (instances WP_Post) du menu en question
    $links = wp_get_nav_menu_items($menu);

    // 3. Formater les objets (liens) récupérés pour qu'ils soient utilisables
    $links = array_map(function($result) {
        // Récupérer l'objet de la page courante
        global $post;

        $link = new \stdClass();

        $link->url = $result->url;
        $link->label = $result->title;
        $link->modifiers = [];

        // Est-ce que le lien représente la page courante ?
        if(intval($result->object_id) === intval($post->ID)) {
            $link->modifiers[] = 'current';
        }

        // Est-ce que le lien possède une icone (ACF) à afficher ?
        if($icon = get_field('icon', $result->ID)) {
            $link->modifiers[] = $icon;
        }

        return $link;
    }, $links);

    // 4. Retourner le tableau ainsi créé
    return $links;
}


/* *****
 * Return a compiled asset's URI
 * *****/
function es_asset($path)
{
    return rtrim(get_template_directory_uri(), '/') . '/public/' . ltrim($path, '/');
}

/* *****
 * Register a custom post type
 * *****/

add_action('init', 'es_custom_post_type');

function es_custom_post_type() {
    register_post_type('capsule', [
        'label' => 'Capsules',
        'labels' => [
            'singular_name' => 'Capsule',
            'add_new_item' => 'Ajouter une nouvelle capsule',
            'add_new' => 'Ajouter une nouvelle capsule',
        ],
        'description' => 'Toutes les capsules',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-palmtree',
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => [
            'slug' => 'capsules'
        ]
    ]);

    register_post_type('news', [
        'label' => 'News',
        'labels' => [
            'singular_name' => 'news',
            'add_new_item' => 'Ajouter une nouvelle news',
            'add_new' => 'Ajouter une nouvelle news',
        ],
        'description' => 'Toutes les news',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-palmtree',
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => [
            'slug' => 'news'
        ]
    ]);

    register_post_type('member', [
        'label' => 'Members',
        'labels' => [
            'singular_name' => 'member',
            'add_new_item' => 'Ajouter un nouveau membre de l’équipe',
            'add_new' => 'Ajouter un nouveau membre de l’équipe',
        ],
        'description' => 'Toutes les capsules',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-palmtree',
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => [
            'slug' => 'members'
        ]
    ]);

    register_post_type('bio', [
        'label' => 'Bio',
        'labels' => [
            'singular_name' => 'bio',
            'add_new_item' => 'Ajouter une biographie pour Easy Spacy',
            'add_new' => 'Ajouter une biographie pour Easy Spacy',
        ],
        'description' => 'Biographie',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-palmtree',
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => [
            'slug' => 'bio'
        ]
    ]);
}

/* *****
 * Register navigation menus
 * *****/

add_action('init', 'es_custom_navigation_menus');

function es_custom_navigation_menus() {
    register_nav_menus([
        'main' => 'Navigation principale',
        'footer' => 'Navigation en pied de page',
    ]);
}

/* Pagination */
function numberPage($pageName)
{
    echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $pageName->max_num_pages,
        'prev_text' => __('<<'),
        'next_text' => __('>>'),));
}

/* *****
 * Return difficulty
 * *****/
function es_difficulty($difficulty)
{
    $string = '';
    for ($i = 1; $i <= 3; $i++) {
        if ($i <= $difficulty) {
            $string .=  "🌕";
        } else {
            $string .= "🌑";
        }
    }
    return $string; //trim($string);
}

//for use in the loop, list 5 post titles related to first tag on current post


/*function es_related_posts()
{
    $currentPost = get_post();
    $tags = wp_get_post_tags($currentPost->ID);
    if ($tags) {
        $all_tag = array_map(fn ($tag)  => $tag->term_id, $tags);
        $args = [
            'post_type' => 'capsule',
            'tag__in' => $all_tag,
            'post__not_in' => array($currentPost->ID),
            'posts_per_page' => 3,
            'ignore_sticky_posts' => 1
        ];
        $my_query = new WP_Query($args);

        $avoidIds = array_map(fn ($post)  => $post->ID, $my_query->posts);
        $avoidIds[] = $currentPost->ID;
        if (count($my_query->posts) < 8) {
            $complete = new WP_Query([
                'post_type' => 'capsule',
                'post__not_in' => $avoidIds,
                'posts_per_page' => 8 - count($my_query->posts),
            ]);
        }
        $result = array_merge($my_query->posts, $complete->posts);
    }
    return $result;
}*/
function es_related_post()
{

    $post_id = get_the_ID();
    $es_ids = array();
    $categories = get_the_category($post_id);

    if (!empty($categories) && !is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($es_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);

    $query_args = array(
        'category__in' => $es_ids,
        'post_type' => $current_post_type,
        'post__not_in' => array($post_id),
        'posts_per_page' => '3',
    );

    $related_post = new WP_Query($query_args);

}
/* *****
 * Disable the Wordpress Gutenberg Editor
 * *****/

add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

function disable_gutenberg_editor()
{
    return false;
}


/* *****
 * Add theme supports
 * *****/

add_action('after_setup_theme', 'es_add_theme_supports');

function es_add_theme_supports()
{
    add_theme_support('post-thumbnails', ['post', 'trip']);
}

/* *****
 * Add custom thumbnail sizes
 * *****/

add_action('after_setup_theme', 'es_add_image_sizes');

function es_add_image_sizes() {
    add_image_size('trip-header', 1024, 312, true);
}




