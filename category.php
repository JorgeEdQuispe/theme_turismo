<?php
get_header();
?>
<?php
$id = get_queried_object();
$id->term_id;
$image = get_field('foto_de_categoria', $id); ?>

<?php
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
if ($image) {
	$img_atts = wp_get_attachment_image_src($image, 'full');
}
?>


<header class="masthead" style="background: linear-gradient( to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url(<?php echo $img_atts[0]; ?>);background-repeat: no-repeat;
    background-size: cover;">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center text-center">
			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase text-white font-weight-bold"><?php single_term_title(); ?>
				</h1>
				<hr class="divider my-4" />
			</div>
			<div class="col-lg-8 align-self-baseline">
				<div class="text-white-75 font-weight-light mb-5"><?php the_archive_description(); ?> </div>
			</div>
		</div>
	</div>
</header>
<section class="container">
	<div id="primary" class=" row content-area">
		<main id="main" class="site-main">

			<?php if (have_posts()) : ?>

				<?php
				// Start the Loop.
				while (have_posts()) :
					the_post();
				?>
					<br>
					<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="col-sm-5 m-auto text-center">
							<div class="entry-header">
								<?php
								if (is_sticky() && is_home() && !is_paged()) {
									printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'twentynineteen'));
								}
								the_title(sprintf('<h2 class="title_categoryservicio entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
								?>
								<hr class="divider my-4" />
							</div><!-- .entry-header -->

							<div class="entry-content">
								<?php the_excerpt(); ?>
							</div><!-- .entry-content -->
						</div>
						<div class="col-sm-7 img_categoryservicio">
							<?php the_post_thumbnail($size = 'medium_large') ?>
						</div>
					</article><!-- #post-<?php the_ID(); ?> -->
					<br>
					<br>


			<?php
				// End the loop.
				endwhile;

			// If no content, include the "No posts found" template.
			else :
				get_template_part('template-parts/content/content', 'none');

			endif;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php
get_footer();
