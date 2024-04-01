<?php
/**
* Audio Post Format
*
* @package Resonance
*/
?>


<div class="grid">

    <div class="date body-text-alt blog-metadata">
        <h5><?php echo'Date'; ?></h5>
        <h6 class="body-text-alt"><?php the_time('F j, Y'); ?><h6>
        <h6 class="body-text-alt"><?php the_time('H:i:s'); ?><h6>
    </div>

    <div class="content body-text-alt blog-title-text">
        <h5><a href="<?php the_permalink();?>"><?php $subcategory = new singleCategory(); ?></a></h5>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    </div>

    <div class="audio-content body-text">

    <div class="waveform"></div>

    <?php echo the_content(); ?>

    <?php
            // echo '</div>'; // Close div
    // 		echo '<br>';
    // 		echo '<i class="non-play-button ph-play-fill"></i>';
    // 		echo '<br>';
    // 		echo '<br>';
    // 	}

    ?>

    </div>
    
</div>
