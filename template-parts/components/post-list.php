<?php




$args = array(
    'posts_per_page' => 10, //Limit to 10 most recent posts,
    'orderby' => 'DESC',
  );

  $query = new WP_Query($args);

  echo '<div class="post-list size-body uppercase courier">';
  
  if ($query->have_posts()){
    while ($query->have_posts()) {
      $query->the_post();

      echo '<li class="post-list__item flex">'; ?>

          <a href="<?php the_permalink();?>" class="post-list__title bold"><?php the_title(); ?></a> 

          <?php /* Title */ 

        echo '<div class="post-list__metadata">';

          echo '<div class="post-list__category">';
            esc_html(the_category(', '));
          echo '</div>'; /* Category */ 


          echo '<div class="post-list__separator mobile__reader-only">';
          echo '⁎'; 
          echo '</div>'; /* Separator */ 


          echo '<div class="post-list__date mobile__reader-only">';
          $post_date = get_the_date( 'M Y ' ); 
            echo $post_date;
          echo '</div>'; /* Date */ 

        echo '</div>'; /* Metadaata Ends */ 

      echo '</li>';
            ?>

            <?php
        }
      };
    echo '</div>';
?>