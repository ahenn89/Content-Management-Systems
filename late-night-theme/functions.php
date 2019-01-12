

<?php register_nav_menu( 'menu', 'Main Nav' ); ?>


<?php dynamic_sidebar( $index ); ?>

<?php 
// let's get some widgetized zones 
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'aside',
	'description' => "This is the my widget description and it's awesome that you came to check this out",
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 
	'after_widget' => '</div>', 
	'before_title' => '<h3 class="widgettitle">', 
	'after_title' => '</h3>', 
	));
?>


 
 
 
 
