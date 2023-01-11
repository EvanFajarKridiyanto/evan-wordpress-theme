<?php

function evan_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'evan_resources');




    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height' => 480,
        'width'  => 720,
    ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); 
?>

<?php
register_nav_menus(array(
	'primary' =>__("Pimary Menus"),
));

 //custom background
add_theme_support( 'custom-background' );
$args = array(
	'default-color' => '000000',
	'default-image' => '%1$s/images/background.jpg',
);
add_theme_support( 'custom-background', $args );


add_theme_support( 'automatic-feed-links' );

add_theme_support( 'title-tag' );

/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

       
     

?>
