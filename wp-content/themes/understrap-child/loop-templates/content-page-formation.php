<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<?php the_title( '<h1 id="titlePage" class="titlePage">', '</h1>' ); ?>

	<div class="entry-content">
		<div class="row justify-content-center">



		<?php the_content(); ?>

		<?php

// check if the flexible content field has rows of data
if( have_rows('contenu_laj') ):

     // loop through the rows of data
    while ( have_rows('contenu_laj') ) : the_row();


// Titre secondaire H2
						if( get_row_layout() == 'titre2' ): ?>
						<div class="col-12">
							<h2><?php echo the_sub_field('titre_h2'); ?></h2>
						</div>

					<?php endif;

//champ de texte
        if( get_row_layout() == 'texte_zone' ):

				// champ de texte taille normale
				if (get_sub_field('bloc_texte_niv1')): ?>

				<div class="col-12 text-niv1 text">
        	<?php echo the_sub_field('bloc_texte_niv1'); ?>
				</div>
      <?php endif;

			// champ de texte taille normale
			if (get_sub_field('bloc_texte_niv2')): ?>

			<div class="col-12 text-niv2 text">
				<?php echo the_sub_field('bloc_texte_niv2'); ?>
			</div>
		<?php endif;

		// champ de texte taille normale
		if (get_sub_field('bloc_texte_niv3')): ?>

		<div class="col-12 text-niv3">
			<?php echo the_sub_field('bloc_texte_niv3'); ?>
		</div>
	<?php endif;

	endif;

// bouton encart central
								if( get_row_layout() == 'bloc_encart' ): ?>

									<div class="encart row justify-content-center">
										<p><?php echo the_sub_field('bloc_encart_text'); ?></p>
									</div>

								<?php endif;

// bouton central CTA
						if( get_row_layout() == 'bloc_bouton' ): ?>

							<div class="row justify-content-center mt-3">
									<a class="cta" href="<?php echo the_sub_field('bloc_bouton_lien'); ?>" target="_blank"><?php echo the_sub_field('bloc_bouton_texte'); ?></a>
							</div>

						<?php endif;

//Ajout d'une ancre
						        if( get_row_layout() == 'bloc_ancre' ): ?>
										<div id="<?php echo the_sub_field('bloc_ancre_nom'); ?>" class="anchor col-12"></div>
						      <?php endif;


// 2 Blocs de type informations

				if( get_row_layout() == 'double_bloc_info' ): ?>

				<div class="module col-md-10 col-lg-6 m-x-md-1  m-x-auto mt-5">
					<div class="mod"><h3>
					<?php echo the_sub_field('double_bloc_info_droit_h3'); ?></h3>

					<?php echo the_sub_field('double_bloc_info_droit_infos'); ?>
				</div>
				</div>

				<div class="module col-md-10 col-lg-6 m-x-md-1  m-x-auto mt-5">
					<div class="modL"><h3>
					<?php echo the_sub_field('double_bloc_info_gauche_h3'); ?></h3>

					<?php echo the_sub_field('double_bloc_info_gauche_infos'); ?>
				</div>
				</div>
			<?php endif;


// Bloc de type Info titre à droite

			if( get_row_layout() == 'bloc_info_droit' ): ?>

				<div class="module col-md-10 col-lg-6 m-x-md-1  m-x-auto mt-5">
					<div class="modR">
						<h3><?php echo the_sub_field('bloc_info_droit_h3'); ?></h3>
				<?php echo the_sub_field('bloc_info_droit_infos'); ?>
			</div>
		</div>

		<?php endif;

// Bloc de type Info titre à gauche

if( get_row_layout() == 'bloc_info_gauche' ): ?>

	<div class="module col-md-10 col-lg-6 m-x-md-1  m-x-auto mt-5">
		<div class="modL">
			<h3><?php echo the_sub_field('bloc_info_gauche_h3'); ?></h3>
					<?php echo the_sub_field('bloc_info_gauche_infos'); ?>
		</div>
</div>

<?php endif;

// Bloc de type Info avec descriptif - titre à droite

		if( get_row_layout() == 'bloc_info_description_droit' ): ?>


		<div class="col-md-10">
			<div class="module row justify-content-center">
			 	<div class="modR col-md-10 col-lg-6 mt-5 order-1 order-lg-2">
				<h3><?php echo the_sub_field('bloc_info_description_droit_h3'); ?></h3>
				<?php echo the_sub_field('bloc_info_description_droit_infos'); ?>
			</div>
			<div class="infos text col-md-10 col-lg-6 mt-lg-5 mt-0 order-2 order-lg-1">
				<?php echo the_sub_field('bloc_info_description_droit_description'); ?>
			</div>
		</div>
		</div>


		<?php endif;

// Bloc de type Info avec descriptif - titre à gauche

	if( get_row_layout() == 'bloc_info_description_gauche' ): ?>


		<div class="col-md-10">
			<div class="module row justify-content-center">
			 	<div class="modL col-md-10 col-lg-6 mt-5">
				<h3><?php echo the_sub_field('bloc_info_description_gauche_h3'); ?></h3>
				<?php echo the_sub_field('bloc_info_description_gauche_infos'); ?>
			</div>
			<div class="infos text col-md-10 col-lg-6 mt-lg-5 mt-0">
				<?php echo the_sub_field('bloc_info_description_gauche_description'); ?>
			</div>
		</div>
		</div>



<?php endif;


if( get_row_layout() == 'bloc_info_media_droit' ): ?>



<div class="col-md-10">
	<div class="module row justify-content-center">
		<div class="modR col-md-10 col-lg-6 mt-lg-5 mt-0">
			<h3><?php echo the_sub_field('bloc_info_media_droit_h3'); ?></h3>
			<?php echo the_sub_field('bloc_info_media_droit_infos'); ?>
		</div>
		<div class="media modL col-md-10 col-lg-6 mt-5">
			<?php echo the_sub_field('bloc_info_media_droit_media'); ?>
		</div>
	</div>
	</div>


<?php endif;

// Bloc de type Info avec média - titre à gauche

if( get_row_layout() == 'bloc_info_media' ): ?>


	<div class="module col-md-10 mt-5">
		<div class="module row justify-content-center">
		<div class="modL col-md-10 col-lg-6 mt-lg-5 mt-0">
			<h3><?php echo the_sub_field('bloc_info_media_gauche_h3'); ?></h3>
			<?php echo the_sub_field('bloc_info_media_gauche_infos'); ?>
		</div>
		<div class="modR owl-wrapper modL col-md-10 col-lg-6 mt-lg-5">
			<div class="media owl-carousel owl-theme">
				<?php
				if( have_rows('bloc_info_media_gauche_media') ):

					while ( have_rows('bloc_info_media_gauche_media') ) : the_row(); ?>

					<div style="background-image: url('<?php echo the_sub_field('bloc_slider_img'); ?>')">
					<p>
					<?php echo the_sub_field('bloc_slider_title')?>
				</p>
			</div>

	<?php
					endwhile;

	else :

	// no rows found

	endif;

	?>
			</div>
		</div>
	</div>
</div>



<?php endif;



// Bloc de description JEUX

if( get_row_layout() == 'bloc_jeu' ): ?>

<article class="col-10 jeu col-md-6">
	<div class="categorie">
		<div class="cat" style="background-image: url('<?php echo the_sub_field('bloc_jeu_image'); ?>')"></div>
		<h4><?php echo the_sub_field('bloc_jeu_h4'); ?></h4>
		<button class="infoscroll" type="button" name="button">En savoir plus</button>
	</div>
	<p class="infoscroll hidden">
		<?php echo the_sub_field('bloc_jeu_description'); ?>
		<br>
		<br>
		<b>Règle: <?php echo the_sub_field('bloc_jeu_regle'); ?></b>
	</p>

	<div class="tabclose hidden">
		<div>
			<img src="<?php echo get_stylesheet_directory_uri() ?>/img/arrowUp.png" alt="arrowUp">
		</div>
	</div>
</article>

<?php endif;

// bloc de description des formules

if( get_row_layout() == 'bloc_formule' ): ?>

<div class="col-8 formule col-lg-4 d-flex flex-column align-items-center">
	<h5><span>formule </span><?php echo the_sub_field('bloc_formule_h5'); ?></h5>
	<div class="infoscroll hidden">
		<p>contient :</p>
		<?php echo the_sub_field('bloc_formule_description'); ?>
		<a class="hidden" href="https://carlindusdesign.fr/LAJ/contenu-formation#contenuJeux" data-inscrire>Consulter les jeux </a>
	</div>
	<div class="prix d-flex flex-column align-items-center">
<?php		if (get_sub_field('bloc_formule_duree') && get_sub_field('bloc_formule_prix')): ?>
		<p><b><?php  echo the_sub_field('bloc_formule_duree'); ?> heures - <?php echo the_sub_field('bloc_formule_prix'); ?> Euros*</b></p>
	<?php else: ?>
		<p><?php echo the_sub_field('bloc_formule_indefini'); ?></p>
	<?php endif; ?>
			<a href="#" data-infoscroll>En savoir plus</a>
			<a class="hidden" href="https://carlindusdesign.fr/LAJ/modalites-inscription/" data-inscrire>Je veux m'inscrire</a>
	</div>
	<div class="tabclose">
		<div>
			<img class="arrowDown" src="<?php echo get_stylesheet_directory_uri() ?>/img/arrowUp.png" alt="arrowUp">
		</div>
	</div>
</div>

<?php endif;

// Bloc de navigation

if( get_row_layout() == 'bloc_navigation' ): ?>

  <article class="col-6 col-md-3">
		<div class="navigation">
			<div class="nav-back">
			<a class="navButton" href="<?php echo the_sub_field('bloc_navigation_lien'); ?>">Voir en détails</a>
    </div>
    <div class="navButton nav-front">
      <h2 class="px-xl-3"><?php echo the_sub_field('bloc_navigation_titre'); ?></h2	>
    </div>
    <img src="<?php echo the_sub_field('bloc_navigation_image'); ?>" alt="img\Thumb-Apropos">
	</div>
	<p><?php echo the_sub_field('bloc_navigation_texte'); ?></p>
  </article>



<?php endif;

//formulaire

if( get_row_layout() == 'bloc_formulaire' ): ?>

<?php echo do_shortcode(get_sub_field('bloc_formulaire_form')); ?>

<?php endif;

// iframe

if( get_row_layout() == 'bloc_iframe' ): ?>

<div class="iframe col-<?php echo the_sub_field('bloc_iframe_width'); ?>">
	<div class="embed-container">
	<iframe src="<?php echo the_sub_field('bloc_iframe_url'); ?>" height="<?php echo the_sub_field('bloc_iframe_height'); ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

</div>

<?php endif;

// FIN DES CHAMPS PERSONNALISES

    endwhile;

else :

    // no layouts found

endif;

?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

		</div>

	</div><!-- .entry-content -->

</section><!-- #post-## -->
