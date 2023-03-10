 <?php
class Options {
   public function Options() {
    
       // Menu Support
       add_theme_support('menus');

       // RSS Feed Supoprt
       add_theme_support( 'automatic-feed-links' );

       // Post Format Support
       add_theme_support( 'post-formats', [ 
           'standard',
           'image',
           'video',
           'audio', 
           'status',
           'aside',
           'quote',
           'gallery',
           'link',
            ] );

       // Post Thumbnail Support
       add_theme_support( 'post-thumbnails' );
       add_image_size( 'small', 350, 350, false );
       add_image_size( 'medium', 825, 825, false );
       add_image_size( 'large', 1250, 1250, false ); 

       // Title Support
       add_theme_support( 'title-tag' );

       // Custom Header Support
       add_theme_support( 'custom-header' );

       // Navigation Menu Support
        register_nav_menus(
	        array(
		        'header-menu' =>__('Header Menu', 'theme'),
		        'mobile-menu' =>__('Mobile Menu', 'theme'),
		        'footer-menu' =>__('Footer Menu', 'theme'),
	        )
        );

       // Responive Video Embed Options
       add_theme_support( 'responsive-embeds' );
   }
}