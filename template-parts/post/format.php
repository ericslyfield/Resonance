<?php

/**
* Standard Post Format
*
* @package Resonance
*/

?>

    <!-- Category -->
    <div class="category up small bold blog-category-text">
        <a href="<?php the_permalink();?>"><?php $subcategory = new singleCategory(); ?></a>
    </div>

    <div class="date small">

        date
        <?php the_time('F j, Y'); ?>


        <div class="time">
            <?php the_time('H:i:s'); ?>
        </div>
    </div>

    <div>
        title 

        <h2 class="blog-title-text"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <div></div>
    </div>

    <div class="thumbnail blog-hero-image">
        thumbnail
        <?php the_post_thumbnail('large'); ?>
    </div>

        <div class="content blog-main-text">
            <?php the_content(); ?>
        </div>
        
    <div>


<div>

</div>
</div>