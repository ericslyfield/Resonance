<?php

/**
* Status Post Format
*
* @package Resonance
*/

?>

<div class="date body-text-alt blog-metadata">
    <h5><?php echo'Date'; ?></h5>
	<h6 class="body-text-alt"><?php the_time('F j, Y'); ?><h6>
    <h6 class="body-text-alt"><?php the_time('H:i:s'); ?><h6>
</div>

<div class="content body-text body-text-align">
    <h5><a class="body-text" href="<?php the_permalink();?>"><?php $subcategory = new singleCategory(); ?></a></h5>
    <section><?php echo substr(strip_tags($post->post_content), 0, 141);?></section>
</div>


<div class="thumbnail">
    <?php the_post_thumbnail('large'); ?>
</div>