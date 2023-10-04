<?php
/**
 * The template for displaying the comments
 *
 * Contains the closing of the #page div and all content after
*
* @package Resonance
* @link        https://nonarchival.com/themes/resonance
*/


if ( post_password_required() ) {
	return;
} ?>

<div id="comments" class="comments-area">

<?php
    if(have_comments(  )):
    // Comments
?>


<?php
    endif;
?>

<?php comment_form(); ?>

</div><!-- .comments-area -->