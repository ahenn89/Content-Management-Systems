
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
</head>
<body>

	<header>
    </header>
    <nav id=navigation>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</nav>
<section>
    
    <div>
        <?php if(have_posts() ): while(have_posts() ): the_post(); ?>
        
			<article id="background">
                
                <?php the_content(); ?> 
			</article>
            
            <?php endwhile; else: ?>
           		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
           	<?php endif; ?>
			
			
        </div>
        
	<aside>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('aside') ) : endif; ?>
	</aside>
    
</section>
		
	<footer>
		<h3><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></h3>
	</footer>
</body>
</html>	

