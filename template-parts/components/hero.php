<?php


$tagline = get_bloginfo( 'description', 'display' );

    if ( $tagline || ! is_customize_preview() ) :
?>

    <h1 class="size-h1 sans-serif bold hero__heading"><?php echo esc_html($tagline);?></h1>

    <?php endif; ?>


    <div class="size-body courier hero__subheading"> <?php esc_html( the_content() ) ?> </div>
    
    <img src="<?php header_image('large'); ?>" class="thumbnail hero__thumbnail"></img>

