<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>


<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-3.3.1.min.js">
</script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/myscript.js">
</script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/owl.carousel.min.js" charset="utf-8"></script>
<!------- Configuration du Slider de la home -------->
<script>
$(document).ready(function() {
  // set owl-carousel width equals to owl-wrapper width
function owlWrapperWidth( selector ) {
  $(selector).each(function(){
    $(this).find('.owl-carousel').outerWidth( $(this).closest( selector ).innerWidth() );
  });
}

// trigger on start and resize
owlWrapperWidth( '.owl-wrapper' );
$( window ).resize(function() {
  owlWrapperWidth( $('.owl-wrapper') );
});
	$('.owl-carousel').owlCarousel({
		items:1,
		autoplay:true,
		loop:true,
    center:true,
		autoplayTimeout:4000,
		autoplayHoverPause:false,
	});
});
</script>



</body>

</html>
