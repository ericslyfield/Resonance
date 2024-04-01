<?php
class blogFormatDisplay{
    public function blogFormatDisplay(){
        $format = get_post_format() ? : 'standard';
        if ( has_post_format( 'aside' )) {
            // Displays the Aside Post Format
                 get_template_part('parts/post/format','aside');
          }  else if (has_post_format('quote')) {
             // Displays the Quote Post Format
              get_template_part('parts/post/format','quote');
          }  else if (has_post_format('link')) {
             // Displays the Link Post Format
              get_template_part('parts/post/format','link');
          }  else if (has_post_format('image')) {
             // Displays the Image Post Format
              get_template_part('parts/post/format','image');
          }  else if (has_post_format('video')) {
             // Displays the Gallery Post Format
              get_template_part('parts/post/format','video');
          }  else if (has_post_format('gallery')) {
             // Displays the Gallery Post Format
              get_template_part('parts/post/format','gallery');
          }  else if (has_post_format('audio')) {
             // Displays the Audio Post Format
              get_template_part('parts/post/format','audio');
          }  else if (has_post_format('standard')) {
             // Displays the Standard Post Format
              get_template_part('parts/post/format','standard');
          }
    }
}
?>