 <?php
class Options {
   public function __construct() {
    
       // Menu Support
       register_nav_menus();

       // Modern Supports Pack

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array('style','script', 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );
        
        add_theme_support( 'wp-block-styles' );

       

        function resonance_custom_logo_setup() {
            $defaults = array(
                'height'               => 100,
                'width'                => 400,
                'flex-height'          => true,
                'flex-width'           => true,
                'header-text'          => array( 'site-title', 'site-description' ),
                'unlink-homepage-logo' => true, 
            );
        add_theme_support( 'custom-logo', $defaults );
        }

        add_action( 'after_setup_theme', 'resonance_custom_logo_setup' );

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