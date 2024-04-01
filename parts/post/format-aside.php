<?php
/**
* Aside Post Format
*
* @package Resonance
*/
?>

<div class="grid">

    <div class="date body-text-alt blog-metadata">
        <h5><?php echo'Date'; ?></h5>
        <h5 class="body-text-alt"><?php the_time('F j, Y'); ?><h5>
        <h5 class="body-text-alt"><?php the_time('H:i:s'); ?><h5>
    </div>

    <div class="content-area">
        <h5><a href="<?php the_permalink();?>"><?php $subcategory = new singleCategory(); ?></a></h5>
        <section class="body-text"><?php the_content(); ?></section>
    </div>

</div>