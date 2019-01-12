<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php bloginfo(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
</head>

<body>

	<header>
    	<div id="header">
			 <div id="headerimg">
  				 <h1>
                 <a href="<?php echo get_option('home'); ?>">
				 	<?php bloginfo('name'); ?></a>
                 </h1>
    			 	<div class="description">
       					<?php bloginfo('description'); ?>
     				</div>
 			 </div>
		</div>

    </header>
</body>
</html>
    




        									


        

