<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article class="emploi" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">

		<?php the_title( '<h2 class="entry-title">', '</h2>' );  ?>

	 	<p>Annonce publiée le : <em><?php echo get_the_date(); ?></em></p>

	</header><!-- .entry-header /test -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>


	<div class="entry-content">

		<?php
		the_content();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php
		 // understrap_entry_footer();
		 // ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
