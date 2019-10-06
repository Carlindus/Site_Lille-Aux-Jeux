<?php
/**
 * Template Name: Formation
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">
			<div class="col-md-12 content-area" id="primary">

				<main class="site-main singlePage" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="icolat d-flex flex-column justify-content-center">

						<a class=" d-flex justify-content-center" href="https://carlindusdesign.fr/LAJ/#home" title="Retourner à la page d'accueil">
							<div class=""></div>
						</a>
						<a class="d-flex justify-content-center" title="Nous contacter" href="https://carlindusdesign.fr/LAJ/a-propos-de-nous/#formContact">
							<div class=""></div>
						</a>
					</div>

						<?php get_template_part( 'loop-templates/content', 'page-formation' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
