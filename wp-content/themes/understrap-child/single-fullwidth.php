<?php
/**
 * The template for displaying all single posts.
 * Template Name: Test Jeux
 * Template Post Type: post
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

								<div class="row">

						  <div class="col-md-4">
								<div class="container d-flex justify-content-center align-items-center ">
									<?php echo the_field('note') ?>
								</div>
						  </div>
							<div class="col-md-8">
								<h3>Notre verdict</h3>
								<p>			<?php echo the_field('verdict') ?></p>
							</div>
							<div class="row">
							  <div class="col-md-4">
									<img src="<?php echo the_field('jaquette') ?>" alt="">
							  </div>
								<div class="col-md-4 d-flex flex-column">
									<h3>Les plus</h3>
								  <p><?php echo the_field('les_plus') ?></p>
								</div>
								<div class="col-md-4 d-flex flex-column">
									<h3>Les moins</h3>
									<p><?php echo the_field('les_moins') ?></p>
								</div>
							</div>
				<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>



			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
