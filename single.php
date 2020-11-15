<?php
get_header();
?>
<link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/style/page.css' ?>>
<?php
// Start the loop.
while (have_posts()) : the_post();
?>
    <header class="bg-primary text-white">
        <div class="container text-center">
            <h1 class="text-light font-weight-light text-uppercase" style="    font-family: 'Font Awesome 5 Brands';"><?php the_title(); ?></h1>
        </div>
    </header>
    <section id="about" class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-body row">
                            <?php $thumbnail = get_the_post_thumbnail_url();  ?>
                            <div class="text-center col-md-12  " style="max-height: 400px;">
                                <img width="100%" class="img-fluid rounded mx-auto d-block pb-2" style="height: 100%;
                    object-fit: contain;" src="<?php echo $thumbnail ?>" alt="">
                            </div>
                            <div class="text-justify col-md-12 ">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/contact-footer'); ?>

<?php
// End of the loop.
endwhile;
?>
<?php
get_footer();
