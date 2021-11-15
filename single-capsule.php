<?php /* Template Name: Page Capsule */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="single-capsule">
        <section class="capsule-content">
            <h2 class="capsule-content__title"><?php the_title() ?></h2>
            <div class="capsule-info">

                <p class="capsule-info__date sro">Date: <span
                            class="capsule-info__date-content">Le <?= get_the_date("d/m/y") ?></span></p>
                <p class="capsule-info__difficulty sro">Difficulté
                    <span class="capsule-info__difficulty-content sro"><?= es_difficulty(get_field('difficulty')); ?></span>
                </p>
                <p class="capsule-info__type sro"><span
                            class="capsule-info__type-content"><?= get_field('type'); ?></span>?></p>

                <dl class="single-capsule__infos-list">
                    <div class="single-capsule__infos list-container date">
                        <dt class="single-capsule__infos date-title sro">Date :</dt>
                        <dd class="single-capsule__infos date-content"
                        ">
                        <time datetime="<?= get_field('date') ?>"><?= get_field('date') ?></time>

                    </div>
                    <div class="single-capsule__infos list-container difficulty">
                        <dt class="single-capsule__infos difficulty-title ">Difficulté :</dt>
                        <dd class="single-capsule__infos difficulty-content"><?= es_difficulty(get_field('difficulty')); ?></dd>
                    </div>
                    <div class="single-capsule__infos list-container duration">
                        <dt class="single-capsule__infos duration-title ">Durée :</dt>
                        <dd class="single-capsule__infos duration-content"><?= get_field('duration') ?> minutes</dd>
                    </div>
                    <div class="single-capsule__infos list-container typeof">
                        <dt class="single-capsule__infos duration-title ">Catégorie :</dt>
                        <dd class="single-capsule__infos duration-content"><?= get_field('type') ?></dd>
                    </div>
                </dl>


                <ul class="share__list">
                    <!--<li class="share__item"><? /*= do_shortcode('[wp_ulike for="capsule"]'); */ ?></li>-->
                    <li class="share__item share__item-share">
                        <button type="button" class="share__link share__link_share share__link button">Partager</button>
                        <ul class="action-share">
                            <li class="action-share__item">
                                <a href="https://www.facebook.com/share.php?u=<?= the_permalink(); ?>" target="_blank"
                                   class="action-share__link fb">
                                    Partager sur Facebook
                                </a>
                            </li>
                            <li class="action-share__item">
                                <a href="http://twitter.com/home?status=<?= the_permalink() ?>" target="_blank"
                                   class="action-share__link insta">
                                    Partager sur Instagram
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="single-capsule-content">
                <h2 class="single-capsule-content__title sro">Contenu de la capsule</h2>
                <div class="slider">
                    <div class="slider__interaction">
                        <figure id="mainImg">

                            <?php $i = 1;
                            $image =get_field('image-' . $i);
                            if (!empty($image)): ?>
                            <img width="500" height="auto"
                                 class="slider__image"
                                 id="<?= $i ?>"
                                 src="<?= $image['sizes']['medium']; ?>" alt="<?= $image['alt']; ?>"
                                 srcset="<?= $image['sizes']['medium']; ?> 300w,
                         <?= $image['sizes']['medium_large']; ?> 768w,
                         <?= $image['sizes']['large']; ?> 1024w">
                        </figure>
                        <?php endif; ?>

                        <div class="slider__container thumb_img_list">


                            <!--<img class="slider__image" <? /*= es_the_thumbnail_attributes_density(['capsule-content-large', 'capsule-content-large-double']); */ ?>>
                        <?php /*$currentImageArray = es_create_image_array(); */ ?>
                        <?php /*foreach ($currentImageArray as $image) : */ ?>
                            <img class="slider__image" <? /*= es_the_content_attributes_density($image, ['capsule-content-large', 'capsule-content-large-double']) */ ?>>
                        --><?php /*endforeach; */ ?>

                            <?php /*$i = 1; get_field('image-' . $i);if (!empty($image)):*/ ?><!--?>
                            <div class="slider__big">
                                <img width="500" height="auto"
                                     class="slider__image"
                                     id="<? /*= $i */ ?>"
                                     src="<? /*= $image['sizes']['medium']; */ ?>" alt="<? /*= $image['alt']; */ ?>"
                                     srcset="<? /*= $image['sizes']['medium']; */ ?> 300w,
                         <? /*= $image['sizes']['medium_large']; */ ?> 768w,
                         <? /*= $image['sizes']['large']; */ ?> 1024w">
                            </div>
                            --><?php /*endif;*/ ?>
                            <ul>


                                <?php for ($i = 1; $i <= 4; $i++):
                                    $images = get_field('image-' . $i);
                                    if (!empty($image)):?>

                                        <li>
                                            <img width="500" height="auto"
                                                 class="slider__image"
                                                 id="<?= 'thumb'.$i ?>"
                                                 src="<?= $images['sizes']['medium']; ?>" alt="<?= $images['alt']; ?>"
                                                 srcset="<?= $images['sizes']['medium']; ?> 300w,
                         <?= $images['sizes']['medium_large']; ?> 768w,
                         <?= $images['sizes']['large']; ?> 1024w">
                                        </li>


                                        <!--<div class="slider__miniature">-->
                                        <!--<input checked="checked" id="<? /*='id'. $i */
                                        ?>" name="ani" type="radio">
                                    <label for="<? /*='id'. $i */
                                        ?>">
                                        <img width="150" height="auto"
                                             class="slider__image"
                                             id="<? /*= $i */
                                        ?>"
                                             src="<? /*= $image['sizes']['medium']; */
                                        ?>" alt="<? /*= $image['alt']; */
                                        ?>"
                                             srcset="<? /*= $image['sizes']['medium']; */
                                        ?> 300w,
                         <? /*= $image['sizes']['medium_large']; */
                                        ?> 768w,
                         <? /*= $image['sizes']['large']; */
                                        ?> 1024w">

                                    </label>
                                    <img width="700" height="200"
                                                 class="slider__image"
                                                 id="<? /*= $i */
                                        ?>"
                                                 src="<? /*= $image['sizes']['medium']; */
                                        ?>" alt="<? /*= $image['alt']; */
                                        ?>"
                                                 srcset="<? /*= $image['sizes']['medium']; */
                                        ?> 300w,
                         <? /*= $image['sizes']['medium_large']; */
                                        ?> 768w,
                         <? /*= $image['sizes']['large']; */
                                        ?> 1024w">-->
                                        <!--</div>-->


                                    <?php endif; endfor; ?>
                            </ul>
                        </div>
                    </div>
                    <figcaption class="slider__description">
                        <?php the_field('description'); ?>
                    </figcaption>
                </div>
                <div class="single-capsule__content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

        <section class="comments">
            <?php comments_template('', true) ?>
        </section>


        <?php if (count(es_related_posts()) > 1) : ?>
            <section class="others">
                <h2 class="others__title">Encore plus de capsules à lire</h2>
                <section class="others-list">
                    <h3 class="sro">Autres capsules</h3>
                    <ul class="other-list">
                        <?php foreach (es_related_posts() as $capsule) : ?>
                            <li class="other-li">
                                <?php get_template_part('template-capsules', null, ["capsule" => $capsule]) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </section>
        <?php endif; ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>