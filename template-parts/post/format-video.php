<?php

/**
* Video Post Format
*
* @package Resonance
*/

?>

<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

<div class="date small">
    <?php the_time('F j, Y'); ?>
</div>	

<div class="thumbnail">
    <?php the_post_thumbnail('large'); ?>
</div>

<div class="content">
    <div class="videowrapper">
        <div class="videoplayer">
            <?php
                $content = do_shortcode( apply_filters('the_content', $post->post_content));
                $embed = get_media_embedded_in_content($content, array('video', 'embed', 'iframe'));
                            
                echo $embed[0]; 
            ?>
        </div>
    </div>
</div>