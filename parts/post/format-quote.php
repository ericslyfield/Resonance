<?php

/**
* Quote Post Format
*
* @package Resonance
*/

?>

<div class="grid">

    <div class="content-area">
        <?php the_content(); ?>
    </div>
    <br>
    <div class="quote-author">
        <cite <?php echo "— " ?><a href="<?php the_permalink();?>"><?php the_title(); ?></a></cite>
    </div>
    
</div>
