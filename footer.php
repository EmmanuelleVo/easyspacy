<footer class="end">
    <div class="end__container">
        <a href="<?= site_url(); ?>" class="top__logo" title="Retour à l‘Accueil" itemprop="mainEntityOfPage">
            <img src="<?php echo get_template_directory_uri() . '/resources/favicon/logo.jpg' ?>"
                 alt="Aller à l'accueil d'Easy Spacy" class="top__logo" width="80">
        </a>
        <div class="end__container-flex">
            <div class="end__contact">
                <h4 class="end__contact-title">Contactez-nous</h4>
                <p class="end__contact-content">easyspacy2327.com</p>
            </div>
            <div class="end__follow">
                <h4 class="end__follow-title">Suivez-nous</h4>
                <div>
                    <figure class="end__follow-fig">
                        <img src="#" alt="logo instagram" class="end__follow-img">
                    </figure>
                    <p class="end__follow-content">easyspacy2327.com</p>
                </div>
            </div>

        </div>
    </div>
    <p class="end__copyright">© Emmanuelle Vo</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>