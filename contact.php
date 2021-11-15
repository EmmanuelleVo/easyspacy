<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="contact-page">
        <h2 class="contact-page__title"><?php the_title(); ?></h2>
        <section class="contact">
            <div class="contact__container">
                <div class="contact__ill">
                    <div class="contact__bubble">
                        <svg xmlns="http://www.w3.org/2000/svg" width="558.494" height="228.129" viewBox="0 0 558.494 228.129">
                            <path id="Icon_metro-bubble" data-name="Icon metro-bubble" d="M281.818,3.856c-154.224,0-279.247,44.28-279.247,98.9s125.023,98.9,279.247,98.9c14.811,0,29.348-.412,43.536-1.2,59.983,26.147,131.579,30.836,200.8,31.524v-6.4c-37.38-7.983-69.812-22.524-69.812-39.141a20.861,20.861,0,0,1,1.18-6.822c63.156-18.131,103.538-45.826,103.538-76.864,0-54.622-125.023-98.9-279.247-98.9Z" transform="translate(-2.571 -3.856)" fill="#fff"/>
                        </svg>
                        <p class="contact__bubble-content">Contactez-nous
                            à notre adresse mail easyspacy2327.com
                            Sur Instagram
                            Ou via ce formulaire</p>
                    </div>
                    <div class="contact__avatars">
                        <img src="http://localhost:8888/wordpress-easyspacy/wp-content/uploads/2021/09/avatar_Sarah-copie.png" alt="avatars" class="contact__avatars-img sarah">
                        <img src="http://localhost:8888/wordpress-easyspacy/wp-content/uploads/2021/09/avatar_Leo-copie.png" alt="avatars" class="contact__avatars-img leo">
                    </div>
                </div>

                <div class="contact__form">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Formulaire de contact 1"]')  ?>
                </div>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>