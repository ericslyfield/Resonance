<?php

$tagline = get_bloginfo( 'description', 'display' );

    if ( $tagline || ! is_customize_preview() ) :
?>

<p>Checkbox status: <span class="check-state">Listening...</span></p>


    <h1 class="size-h2 sans-serif bold hero__heading"><?php echo esc_html($tagline);?></h1>

    <?php endif; ?>

    <div class="size-body courier hero__subheading"> <?php esc_html( the_content() ) ?> </div>
    
    <!-- <img src="<?php header_image('large'); ?>" class="thumbnail hero__thumbnail"></img> -->
    
    <?php if ( has_post_thumbnail() ): ?>
        <div class="thumbnail hero__thumbnail"> <?php the_post_thumbnail('large'); ?> </div>
    <?php endif; ?> <!-- Thumbnail -->
