<?php
/**
*  Default Template File (Index)
* 
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Resonance
 * @link        https://nonarchival.com/themes/resonance
 */

get_header(); 
?>

<?php 
// If the page is the "front page/home page" and (&&) not (!) empty...
if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header>
<?php endif; ?>

<?php
	if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'parts/post/format', get_post_format() );
		endwhile;
    endif;
?>
 
<main id="main-content"> Silence is Golden.</main>

<footer>
    <?php get_footer();?>
</footer>