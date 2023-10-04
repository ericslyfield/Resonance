<?php


$tagline = get_bloginfo( 'description', 'display' );

    if ( $tagline || ! is_customize_preview() ) :
?>

    <h1 class="size-h1 sans-serif bold hero__heading"><?php echo esc_html($tagline);?></h1>

    <?php endif; ?> <!-- Tagline / Heading -->


    <div class="size-body courier hero__subheading"> <?php esc_html( the_content() ) ?> </div> <!-- Subheading -->


    <?php if ( has_post_thumbnail() ): ?>
        <div class="thumbnail hero__thumbnail"> <?php the_post_thumbnail('large'); ?> </div>

<?php endif; ?> <!-- Thumbnail -->

