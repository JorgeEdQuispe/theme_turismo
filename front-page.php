<?php get_header() ?>
<section>
    <div class="container" style="max-width: 1250px !important;">
        <div style="margin: 4rem 0">
            <div class="row">

                <?php $recent = new WP_Query("page_id=1831");
                while ($recent->have_posts()) : $recent->the_post(); ?>
                    <div class="col-sm-12">
                        <h1 style="color: #824d00;font-weight: 700;text-transform: uppercase; text-align: center; margin: 1rem 0;">
                            <? the_title() ?>
                        </h1>
                    </div>
                    <div class="col-sm-5" style="margin: auto; font-size: 14px;">
                        <p><?php the_content() ?></p>
                    </div>
                    <div class="col-sm-7" style="margin: auto">
                        <img src="<?php the_post_thumbnail_url('inkatrail-slider-single-image'); ?>" alt="" style="width: 100%; height: 100%">
                    </div>
                <?php endwhile ?>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="slidertoursincatrail">
        <div class="col-sm-12 titlefrontpage">
            <h2>
                Experience the Inca Trail with us
            </h2>
        </div>
        <?php foreach ((get_categories()) as $category) { ?>
            <?php
            query_posts('cat=' . $category->cat_ID);
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="slidertoursincatrail-cont">
                        <div class="slidertoursincatrail-cont-img">
                            <? echo wp_get_attachment_image($id = get_field('img_portada'), 'inkatrail-slider-single-image', '', ''); ?>
                        </div>
                        <div class="slidertoursincatrail-cont-text container">
                            <div class="row slidertoursincatrail-cont-text-info">
                                <div class="col-sm-6 slidertoursincatrail-cont-text-info-title_resumen">
                                    <a href="<?php the_permalink() ?>">
                                        <h2>
                                            <? the_title(); ?>
                                        </h2>
                                    </a>
                                    <div class="slidertoursincatrail-cont-text-info-title_resumen-resumen">
                                        <? the_field('tour_front_page_summary'); ?>
                                    </div>
                                    <div class="slidertoursincatrail-cont-text-info-link">
                                        <a href="<?php the_permalink() ?>">
                                            more information
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-5 slidertoursincatrail-cont-text-info-price">
                                    <p>Reservation from
                                        <strong>$<?php the_field('precio'); ?></strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        <?php } ?>
    </div>
</section>

<section>
    <div class="container tourfrontpage">

        <div class="row tourfrontpage-content">
            <div class="col-sm-12 titlefrontpage">
                <h2>
                    What do you want to do go next year
                </h2>
            </div>
            <?php foreach ((get_categories()) as $category) { ?>

                <?php $link = get_category_link($category->term_id) ?>

                <?php

                query_posts('cat=' . $category->cat_ID);

                if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="col-lg-4 col-sm-6 tourfrontpage-content-tour">
                            <a href="<?php the_permalink() ?>">
                                <article class="tourfrontpage-content-tour-continfo">
                                    <div class="tourfrontpage-content-tour-continfo-img">
                                        <?php the_post_thumbnail($size = 'inkatrail-tour-frontpage-image') ?>
                                    </div>
                                    <div class="tourfrontpage-content-tour-continfo-text">
                                        <div class="tourfrontpage-content-tour-continfo-text-precio col-xs-4">
                                            <p><i class="fas fa-tag"></i> from <strong> US$ <?php the_field('precio') ?> </strong> </p>
                                        </div>
                                        <div class="tourfrontpage-content-tour-continfo-text-info col-xs-8">
                                            <h3>
                                                <? the_title() ?>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="tourfrontpage-content-tour-continfo-resumen">
                                        <div class="tourfrontpage-content-tour-continfo-resumen-text">
                                            <p>
                                                <? $texto = get_field('tour_front_page_summary');
                                                                            if ($texto == "") {
                                                                                the_excerpt();
                                                                            } else {
                                                                                echo $texto;
                                                                            } ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tourfrontpage-content-tour-continfo-info">
                                        <?php get_template_part('parts/part-tour-front-page-detalles'); ?>
                                    </div>
                                </article>
                            </a>
                        </div>

                <?php
                    endwhile;
                endif; ?>
            <?php } ?>
        </div>
    </div>
</section>

<section>
<div class="container tourfrontpage">

<div class="tourfrontpage-content">
    <? $cont = 0 ?>
    <?php foreach ((get_categories()) as $category) { ?>
        <? $cont++ ?>
            <?php $link = get_category_link($category->term_id);
                    $imgid = get_field('img', 'category_' . $category->term_id) ?>
            <div class="row categorycont" style="margin: 2rem 0;">
                <div class="col-lg-6 categorycont-info" style="padding: 0; height: 100%; margin: 0;">
                    <?php echo wp_get_attachment_image($imgid, $size = 'inkatrail-tour-category-image') ?>
                    <div class="categorycont-info-title">
                        <div class="categorycont-info-title-cont">
                            <h2 class="text-md-center">
                                <a href="<?php echo $link ?>">
                                    <?php echo _e($category->name); ?>
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 categorycont-info-tour multiple-items" style="margin: auto;">
                    <?php query_posts('cat=' . $category->cat_ID);
                            if (have_posts()) : while (have_posts()) : the_post();?>
                                    <div class="tourfrontpage-content-tour categorycont-info-tour-cont">
                                        <a href="<?php the_permalink() ?>">
                                            <article class="tourfrontpage-content-tour-continfo">
                                                <div class="tourfrontpage-content-tour-continfo-img" style="height: 320px;">
                                                    <?php the_post_thumbnail($size = 'inkatrail-tour-frontpage-image') ?>
                                                </div>
                                                <div class="tourfrontpage-content-tour-continfo-text-info col-xs-8">
                                                    <h3><? the_title() ?></h3>
                                                </div>
                                            </article>
                                        </a>
                                    </div>


                    <?
                                endwhile;
                            endif; ?>
                </div>
            </div>
    <?php

    } ?>
</div>
</div>
</section>
<section>
    <?php get_template_part('parts/part-what'); ?>
</section>
<!-- <section>
    <?php /*  get_template_part('parts/part-why-book-us'); */ ?>
</section> -->

<section>
    <?php get_template_part('parts/part-info-extra'); ?>
</section>

<?php get_footer(); ?>