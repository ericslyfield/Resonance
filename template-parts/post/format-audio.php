<?php
/**
* Audio Post Format
*
* @package Resonance
*/
?>



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

<?php 

// Query All Audio Posts in Context

// $args = array
// (
// 	'post_type' => 'attachment',
// 	'post_mime_type' => 'audio',
// 	'numberposts' => -1
// );

// $audiofiles = get_posts($args);
	
// 	foreach ($audiofiles as $file)
// 	{

// 		$audioURL = $file->guid;

// 		// echo json_encode(array("audioURL" => $audioURL));

// 		// $audioURL = print_r($file->guid);
// 		echo '<br>';
// 		echo '<br>';

// 		// print_r($file->guid);

// 		// $url = wp_get_attachment_url($file->ID);
// 		echo '<div id="waveform">'; // Wrap block in "waveform" ID
// 		echo $audioURL . ' '; // URL
// 		echo '</div>'; // Close div
// 		echo '<br>';
// 		echo '<i class="non-play-button ph-play-fill"></i>';
// 		echo '<br>';
// 		echo '<br>';
// 	}

?>


	<!-- <?php the_content(); ?> -->
</div>

