<?php

/**
* Quote Post Format
*
* @package Resonance
*/

?>

<div class="body-text-alt body-text-align">
    <?php the_content(); ?>
</div>
<br>
<div class="quote-author bold italic">
    <h5><?php echo "— " ?><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
</div>
