<?php

$args = array(
    'posts_per_page' => 10, //Limit to 10 most recent posts,
    'orderby' => 'DESC',
  );

  $query = new WP_Query($args);

  echo '<div class="post-list-container center">';

  echo '<h3 class="post-list-heading">';
  echo 'Recent Posts: ';
  echo '</h3>';

  if ($query->have_posts()) {
      while ($query->have_posts()) {
          $query->the_post();

        echo '<br>';

        echo '<div class="post-list-title">';
        the_title(); 
        echo '</div>';

        echo '<br>';

        echo '<div class="post-list-category">';
        the_category(', ');
        echo '</div>';

        echo '𝇇';

        echo '<div class="post-list-date">';
        the_date('M Y ');
        echo '</div>';

        echo '<br>';
          ?>

          <?php
      }
    };
    echo '</div>';
?>