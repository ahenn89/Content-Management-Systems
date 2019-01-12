
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php bloginfo(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
</head>
<body>

	<header>
    </header>
    <nav>
			<?php wp_nav_menu( array( 'menu' => 'Main Nav' ) ); ?>
	</nav>
<section>
	<aside id="sidebar">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('aside') ) : endif; ?>
	</aside>
    <div>
        <?php if(have_posts() ): while(have_posts() ): the_post(); ?>
        
			<article>
                <?php the_title(); ?> 
                <?php the_content(); ?> 
                
                <p>Posted <time datetime="<?php the_time( 'Y-m-d'); ?>" pubdate="pubdate"><?php the_time( 'M j' ) ?></time> &#149; <?php comments_number( '0 comments', 'only 1 comment', '% comments' ); ?></p>
			</article>
            
            <?php endwhile; else: ?>
           		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
           	<?php endif; ?>
			
			
        </div>
			
</section>
		<footer>
			<h3><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></h3>
		</footer>

</body>
</html>	

