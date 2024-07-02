<?php

$tagline = get_bloginfo( 'description', 'display' );

    if ( $tagline || ! is_customize_preview() ) :


        $string = $tagline;
        $pieces = explode(" ", $string);
        $last_word = array_splice($pieces, -1);

        $sentence = explode( " ", $string);
        $shortened = array_splice( $sentence, -1 );
        
        echo implode( " ", $shortened);

        function print_cta(){
            echo str_ireplace(["Resonate"], " ","The Things We Make Should Resonate");
        };
        
?>

    <h1 class="size-h2 sans-serif bold hero__heading canvas-wrap"><?php echo esc_html(print_cta());?><div id="blotter-container"></div></h1>


    <?php endif; ?>

    <div class="size-body courier hero__subheading"> <?php esc_html( the_content() ) ?> </div>
    
    <!-- <img src="<?php header_image('large'); ?>" class="thumbnail hero__thumbnail"></img> -->
    
    <?php if ( has_post_thumbnail() ): ?>
        <div class="thumbnail hero__thumbnail"> <?php the_post_thumbnail('large'); ?> </div>
    <?php endif; ?> <!-- Thumbnail -->
