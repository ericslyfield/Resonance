<?php
/**
* Link Post Format
*
* @package Premise
*/
?>

<div class="grid">

    <div class="date body-text-alt blog-metadata">
        <h5 class="body-text"><?php echo'Date'; ?></h5>
        <h6 class="body-text-alt"><?php the_time('F j, Y'); ?></h6>
    </div>

    <div class="content-area">
        <h5><a href="<?php the_permalink();?>"><?php $subcategory = new singleCategory(); ?></a></h5>
        <!-- Displays The First link in a Post As The Hyperlinked Title -->
        <h2><a class="link-content" href=" <?php echo get_url_in_content(get_the_content())?>" target="_blank"> <?php the_title(); ?> </a>
    </div>

</div>